<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 3:18 PM
 */

function updatePostStatus($orgId, $userId, $postId){

    $request = \Slim\Slim::getInstance()->request();


    $post = json_decode($request->getBody());
    if (is_null($post)){
        echo '{"error":{"text":"Invalid Json"}}';
        die();
    }

    $sql = "UPDATE
                 posts
                  SET
                   user_id =:user_id,
                   status = :status,
                   text_message = :message,
                   scheduled = :scheduled
                         WHERE id=:post_id and company_id = :org_id";

    //var_dump($sql);die();


    if(!isset($post->message)){
        $post->message = "";
    }
    if(!isset($post->scheduled)){
        $post->scheduled = null;
    }else
        $post->scheduled = strtotime($post->scheduled);
    try {
        $db = getDB();
        $stmt = $db->prepare($sql);
        //$service_provider->status = "new";

        $stmt->bindParam("user_id", $userId);
        $stmt->bindParam("status", $post->status);
        $stmt->bindParam("message", $post->message);
        $stmt->bindParam("scheduled", $post->scheduled);
        $stmt->bindParam("post_id", $postId);
        $stmt->bindParam("org_id", $orgId);

        $stmt->execute();


        $db = null;
        echo '{"posts": ' . json_encode($post) . '}';
    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }

}