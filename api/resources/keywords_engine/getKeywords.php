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
        $subString = "";
        $length = 0;
        $keywords = extractCommonWords($str);
        foreach($keywords as $k => $v){
            if($v > 1){
                if($subString == "")
                    $length = $v;

                if($v < $length){
                    $keywords[ltrim($subString,' ')] = substr_count(ltrim($subString,' '),$str);
                    $subString = $k;
                }
                elseif($v == $length){
                    $subString = $subString . " ". $k;
                }
            }
        }
        echo '{"keywords": ' . json_encode($keywords) . '}';

    } catch (Exception $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}



