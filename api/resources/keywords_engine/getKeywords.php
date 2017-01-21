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

                if($subString == "")
                    $length = $v;

                if($v < $length){
                    $keywords[ltrim($subString,' ')] = substr_count($str,ltrim($subString,' '));
                    $subString = $k;
                }
                elseif($v == $length){
                    $subString = $subString . " ". $k;
                }
            if($v == 1) break;
        }
        echo '{"keywords": ' . json_encode($keywords) . ',"string":"'.$str.'"}';

    } catch (Exception $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}



