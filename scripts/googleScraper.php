<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 3/10/17
 * Time: 7:55 AM
 */


$dbHandle = mysqli_connect("localhost","root","redhat@11111p","shatkon_sherlock");

$keywords = mysqli_query($dbHandle, "SELECT * FROM `keywords`
                          WHERE last_updated >= now() - INTERVAL 1 DAY limit 0,10");

$i = 1;
$count = $keywords->num_rows;

$type = array('news'=> '&tbm=nws','video'=>'&tbm=vid','google'=>'','social'=>'');

while ( $keyword = mysqli_fetch_array($keywords)) {
    echo $i."/".$count." ".$keyword['keyword']."\n";
    $i++;
    try {

        $keywordSr = $keyword['keyword'] .($keyword['site']?'+'.$keyword['site']:'');
        str_replace(' ','+',$keywordSr);
        echo $keywordSr."\n";
        $type = $keyword['type'];
        $URL = "https://www.google.co.in/search?q=".$keywordSr."&ie=utf-8&oe=utf-8&gws_rd=cr".$typeMap[$type];
        $homepage = file_get_contents($URL);
        $urls = explode('/url?q=',$homepage);
        for($i = 1; $i<count($urls);$i++) {
            $url = explode('&amp;', $urls[$i])[0];
            echo $url . "\n";

            $dubcheckSql = "select id from urls where url ='".$url."'";

            $old =  mysqli_query($dbHandle, $dubcheckSql);
            if($old->num_rows) {
                $oldId = mysqli_fetch_array($old)['id'];
                $insertUrlSql = "update urls set count = count +1 where id =  ".$oldId;
            }
            else
                $insertUrlSql = "INSERT INTO `urls`(`keyword_id`, `url`, `count`, `creation`)
                          VALUES ('".$keyword['id']."','".$url."',1,'".date("Y-m-d H:i:s")."')";

            mysqli_query($dbHandle, $insertUrlSql);


        }

        $updateKeyWords = "update keywords set last_updated = now() where id = ".$keyword['id'];

        mysqli_query($dbHandle, $updateKeyWords);


    }catch(Exception $e){

    }
    sleep(rand(10,50));
}

mysqli_close($dbHandle);


