<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/25/16
 * Time: 8:52 PM
 */

//INSERT INTO `post_requests`(`id`, `user_id`, `title`, `message`, `status`, `created`, `last_updated`)
// VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

function postCreateRequest($orgId, $userId){

    $request = \Slim\Slim::getInstance()->request();


    $post = json_decode($request->getBody());
    if (is_null($post)){
        echo '{"error":{"text":"Invalid Json"}}';
        die();
    }

    $sql = "INSERT INTO `post_requests`(`user_id`, `title`, `message`, `status`, `created`)
            VALUES (:user_id,:title,:message,'open',:creation)";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);


        $stmt->bindParam("user_id", $userId);
        $stmt->bindParam("title", $post->title);
        $stmt->bindParam("message", $post->message);
        $stmt->bindParam("creation", date('Y-m-d H:i:s'));

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}