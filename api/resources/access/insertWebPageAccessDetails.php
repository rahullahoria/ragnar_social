<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/7/17
 * Time: 1:08 PM
 */

function insertWebPageAccessDetails(){
    $request = \Slim\Slim::getInstance()->request();


    $access = json_decode($request->getBody());
    if (is_null($access)){
        echo '{"error":{"text":"Invalid Json"}}';
        die();
    }

    $sqlUrlSelect = "SELECT id FROM `urls` WHERE `url` = :url;";

    $sqlInsertUrl = "INSERT INTO `urls`( `url`, `title`)
                      VALUES
                        (:url,:title);";
    $sqlUpdateAccess = "UPDATE `urls` SET `accesses`= accesses+1 WHERE `id` = :id";


    $sqlAccess = "INSERT INTO
            `accesses`(`user_id`, `social_network_id`, `url_id`, `ip`, `country`, `platform`)
            VALUES (:user_id,'1',:url_id,:ip,'IN',:platform)";

    $ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];


    try {
        $db = getDB();
        $stmt = $db->prepare($sqlUrlSelect);

        $stmt->bindParam("url", $access->url);


        $stmt->execute();
        $urls = $stmt->fetchAll(PDO::FETCH_OBJ);
        $urlId = 0;
        if(count($urls) != 1){
            $stmt = $db->prepare($sqlInsertUrl);


            $stmt->bindParam("url", $access->url);
            $stmt->bindParam("title", $access->title);

            $stmt->execute();

            $urlId = $db->lastInsertId();
        }
        else {

            $urlId = $urls[0]->id;
        }


        $stmt = $db->prepare($sqlUpdateAccess);
        $stmt->bindParam("id", $urlId);
        $stmt->execute();

        $stmt = $db->prepare($sqlAccess);

        $platform = getOS();
        $stmt->bindParam("user_id", $access->user_id);
        $stmt->bindParam("url_id", $urlId);
        $stmt->bindParam("ip", $ip);
        $stmt->bindParam("platform", $platform);

        $stmt->execute();

        $access->id = $db->lastInsertId();


        $db = null;

        echo '{"access": ' . json_encode($access) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":"' . $e->getMessage() . '"}}';
    }

}