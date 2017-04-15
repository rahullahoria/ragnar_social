<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 4/16/17
 * Time: 12:06 AM
 */

function processCommand($command){


$url = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=".urlencode($command);

var_dump($url,httpGet($url));

}