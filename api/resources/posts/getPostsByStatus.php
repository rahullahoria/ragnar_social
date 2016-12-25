<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 3:16 PM
 */

function getPostsByStatus($orgId, $userId, $type){

    $sql = "SELECT * FROM posts WHERE company_id=:c_id and user_id =:user_id and status = :status ";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);

        $stmt->bindParam("c_id", $orgId);
        $stmt->bindParam("user_id", $userId);
        $stmt->bindParam("status", $type);

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}