<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 3:16 PM
 */

function getPostsByStatus($orgId, $userId, $type){

    $sql = "SELECT * FROM posts WHERE company_id=:c_id and gen_img_id != 0 and  user_id =:user_id and status = :status and id NOT IN (select post_id from post_tracks where 1) limit 0,20";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);

        $stmt->bindParam("c_id", $orgId);
        $stmt->bindParam("user_id", $userId);
        $stmt->bindParam("status", $type);

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

        foreach($posts as $key => $value) {
            $value->title = htmlspecialchars($value->title);

            $value->description = htmlspecialchars($value->description);


        }


        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}