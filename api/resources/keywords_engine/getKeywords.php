<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/21/17
 * Time: 2:15 PM
 */

function getKeywords(){

    global $app;
    $str = $app->request()->get('str');


    try {

        $keywords = extractCommonWords($str);
        echo '{"keywords": ' . json_encode($keywords) . '}';

    } catch (Exception $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

