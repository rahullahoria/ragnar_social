<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/11/17
 * Time: 12:57 PM
 */

function getPost($orgId, $userId, $postId){

    $sql = "SELECT a.`title`, a.`description`, a.`link`, a.`raw_img_id`, a.`gen_img_id`,
            b.`name` as company_name, b.`address`, b.`email`, b.`mobile`, b.`logo_id`
            FROM posts as a INNER JOIN companies as b
              WHERE a.company_id = b.id and a.company_id=:c_id and a.id = :post_id and  a.user_id =:user_id  ";

    try {
        $db = getDB();
        $stmt = $db->prepare($sql);

        $stmt->bindParam("c_id", $orgId);
        $stmt->bindParam("user_id", $userId);
        $stmt->bindParam("post_id", $postId);

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}