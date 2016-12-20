<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 3:11 PM
 */

function getPosts($orgId, $userId){
    global $app;
    $type = $app->request()->get('type');

    if(isset($type)) {
        if ($type == "published") {
            getPublishedPost($orgId, $userId);
        }
        else {
            getPostsByStatus($orgId, $userId, $type);
        }

    }
    else{
        echo '{"error":{"text": "please give filter like \'?type=[not-approved|published|rejected]\'"}}';
    }

}