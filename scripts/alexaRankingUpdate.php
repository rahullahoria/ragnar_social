<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/13/17
 * Time: 2:44 PM
 */

//INSERT INTO `domain_dynamic_details`(`id`, `domain_id`, `alexa_ranking`, `creation`) VALUES ([value-1],[value-2],[value-3],[value-4])

$dbHandle = mysqli_connect("localhost","root","redhat@11111p","ragnar_social");

$domains = mysqli_query($dbHandle, "SELECT a.name,a.id FROM `domains` as a INNER JOIN domain_dynamic_details as b
                          WHERE a.`status` = 'white' and a.id = b.domain_id and DATA(b.creation) != CURDATE() ");

while ( $domain = mysqli_fetch_array($domains)) {
    $url="http://".$domain['name']."/";
    $xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
    $rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
    $web=(string)$xml->SD[0]->attributes()->HOST;
    echo $web." has Alexa Rank ".$rank."\n";

    $insertSql = "INSERT INTO `domain_dynamic_details`( `domain_id`, `alexa_ranking`, `creation`)
              VALUES ('".$domain['id']."','".$rank."','".date("Y-m-d H:i:s")."')";

    mysqli_query($dbHandle, $insertSql);
}