<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 3/10/17
 * Time: 7:51 AM
 *
 * search_keyword/[word]?type=[news|web|social|video]&site=facebook.cm
 */

function searchKeyword($keyword){



    $sqlSelectKeyword = "SELECT `id`, `keyword`, `site`, `creation`, `last_updated`, `last_searched`, `status`, `type`,TIMESTAMPDIFF(MINUTE, `last_searched`, NOW()) as last_search_before FROM shatkon_sherlock.`keywords` where keyword like :keyword";



    $checkUrl = "select id from shatkon_sherlock.urls where url = :url";

    $updateUrlSql = "update shatkon_sherlock.urls set count = count +1 where id =  :id";

    $insertUrlSql = "INSERT INTO shatkon_sherlock.`urls`(`keyword_id`, `url`, `count`, `creation`)
                          VALUES (:keyword_id, :url, 1, :creation)";

    $updateKeyWords = "update shatkon_sherlock.keywords set last_searched = now() where id = :id";

    $getUrls = "select * from shatkon_sherlock.urls WHERE keyword_id = :keyword_id";

    try {
        $db = getDB();
        $stmt = $db->prepare($sqlSelectKeyword);

        $t = "%$keyword%";
        $stmt->bindParam("keyword", $t);
        //$stmt->bindParam("creation", date('Y-m-d H:i:s'));

        $stmt->execute();

        $return = array();

        $keywordObjs = $stmt->fetchAll(PDO::FETCH_OBJ);


        if(count($keywordObjs) > 0) {

            $keywordObj = $keywordObjs[0];

            if($keywordObj->last_search_before > 360){

               $urls = getKeywordUrls($keywordObj->keyword,$keywordObj->type,$keywordObj->site);
                var_dump($urls);die();
                foreach($urls as $url){

                    $stmt = $db->prepare($checkUrl);
                    $stmt->bindParam("url", $url);

                    $stmt->execute();

                    $urlObjs = $stmt->fetchAll(PDO::FETCH_OBJ);

                    if(count($urlObjs) >= 1){

                        $stmt = $db->prepare($updateUrlSql);


                        $stmt->bindParam("id", $urlObjs[0]->id);
                        //$stmt->bindParam("creation", date('Y-m-d H:i:s'));

                        $stmt->execute();

                        $urlObjDetails = $stmt->fetchAll(PDO::FETCH_OBJ);
                        $urlObjDetail = $urlObjDetails[0];


                    }else{
                        $stmt = $db->prepare($insertUrlSql);


                        $stmt->bindParam("keyword_id", $urlObjs[0]->id);
                        $stmt->bindParam("url", $url);
                        $stmt->bindParam("creation", date('Y-m-d H:i:s'));

                        $stmt->execute();
                        $url_id = $db->lastInsertId();

                        $urlObjDetail = array(
                            "keyword_id"=>$urlObjs[0]->id,
                            "url"=>$url,
                            "creation"=>date('Y-m-d H:i:s'),
                            "id"=>$url_id
                        );
                    }
                    $return[] = $urlObjDetail;

                }

                //fetch urls meta

                $stmt = $db->prepare($updateKeyWords);
                $stmt->bindParam("id", $urlObjs[0]->id);
                $stmt->execute();

            }
            else {

                $stmt = $db->prepare($getUrls);
                $stmt->bindParam("keyword_id", $keywordObj->id);
                $stmt->execute();

                $return = $stmt->fetchAll(PDO::FETCH_OBJ);

            }

        }
        else{

            echo "we are not tracking it !!! Call +91-9599075955 if you want results";

        }

        $db = null;

        echo '{"urls": ' . json_encode($return) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":"' . $e->getMessage() . '"}}';
    }


}

function getKeywordUrls($keyword,$type,$site){
    $typeMap = array('news'=> '&tbm=nws','video'=>'&tbm=vid','google'=>'','social'=>'');
    $urls = array();


        try {

            $keywordSr = $keyword .($site?'+'.$site:'');
            str_replace(' ','+',$keywordSr);
            $URL = "https://www.google.co.in/search?q=".$keywordSr."&ie=utf-8&oe=utf-8&gws_rd=cr".$typeMap[$type];

            $homepage = file_get_contents($URL);
            var_dump($homepage);die('page');
            $urls = explode('/url?q=',$homepage);
            for($i = 1; $i<count($urls);$i++) {
                $urls[] = explode('&amp;', $urls[$i])[0];
                //echo $url . "\n";

            }
            return $urls;



        }catch(Exception $e){
            return $urls;

        }
}