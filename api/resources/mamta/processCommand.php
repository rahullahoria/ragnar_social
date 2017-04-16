<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 4/16/17
 * Time: 12:06 AM
 */

function processCommand($command){


$url = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=".urlencode($command);

    $reply = "";
$response = json_decode(httpGet($url));
$pages = $response->query->pages;
    foreach($pages as $value){
        $reply  = htmlspecialchars($value->extract);
        break;
    }
    echo '{"reply": "'.$reply.'"}';
}