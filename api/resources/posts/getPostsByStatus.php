<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 3:16 PM
 */

function getPostsByStatus($orgId, $userId, $type){

    $sql = "SELECT a.id, a.`title`, a.`description`, a.`link`, a.`raw_img_id`, a.`gen_img_id, a.creation, `b.website
              FROM posts as a INNER JOIN  companies as b WHERE a.company_id = b.id
              AND  a.company_id=:c_id and a.gen_img_id != 0 and  a.user_id =:user_id and a.status = :status
                  and a.id NOT IN (select post_id from post_tracks where 1)";

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
            if(substr_count($value->link, "blueteam")){
                $value->link = $value->website;
            }


        }


        $db = null;

        echo '{"posts": ' . json_encode($posts) . '}';

    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }


}