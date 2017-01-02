<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/2/17
 * Time: 7:37 PM
 */

function getPublishedPost($orgId, $userId){

    $sql = "SELECT a.`id`, a.`post_id`, a.`social_network_id`, a.`impressions`, a.`likes`, a.`shares`, a.`publish_id`,
    a.`publish_datatime`
          FROM posts as a INNER JOIN post_tracks as b WHERE a.id = b.post_id and a.company_id=:c_id and a.user_id =:user_id
             ";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);

        $stmt->bindParam("c_id", $orgId);
        $stmt->bindParam("user_id", $userId);

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}