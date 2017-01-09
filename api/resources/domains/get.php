<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/9/17
 * Time: 2:57 PM
 */

function get(){

    global $app;
    $status = $app->request()->get('status');

    $sql = "SELECT * FROM domains WHERE status = :status";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);


        $stmt->bindParam("status", $status);

        $stmt->execute();
        $domains = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        echo '{"domains": ' . json_encode($domains) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}