<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/9/17
 * Time: 2:56 PM
 */

function insert(){

    $request = \Slim\Slim::getInstance()->request();


    $domain = json_decode($request->getBody());
    if (is_null($domain)){
        echo '$domain';
        die();
    }


    $sql = "INSERT INTO `domains`(`name`, `keywords`)
            VALUES (:name,:keywords);";

    $sqlGetDomain = "SELECT * FROM domains WHERE name = :name";

    try {
        $db = getDB();

        $stmt = $db->prepare($sqlGetDomain);


        $stmt->bindParam("name", $domain->name);

        $stmt->execute();
        $domains = $stmt->fetchAll(PDO::FETCH_OBJ);

        if(count($domain) == 0) {
            $stmt = $db->prepare($sql);
            //$service_provider->status = "new";

            $stmt->bindParam("name", $domain->name);
            $stmt->bindParam("keywords", $domain->keywords);

            $stmt->execute();

            $domain->id = $db->lastInsertId();

        }else{
            $domain->id=$domains[0]->id;
        }

        $db = null;
        echo '{"domains": ' . json_encode($domain) . '}';
    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}