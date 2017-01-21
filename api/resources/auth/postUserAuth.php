<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 6/22/16
 * Time: 2:13 PM
 */


function userAuth(){

    $request = \Slim\Slim::getInstance()->request();

    $user = json_decode($request->getBody());


    $sql = "SELECT a.`id`, a.`name`, a.`email`, a.`type`, a.`company_id`, a.`phone`, a.`md5_id`, a.`profession`, b.name, b.address as company_address, b.email as company_email, b.mobile as company_mobile, b.logo_id, b.about  FROM `users` as a inner join companies as b WHERE a.company_id = b.id and a.phone = :mobile and a.password = :password";


    try {
        $db = getDB();
        $stmt = $db->prepare($sql);

        $stmt->bindParam("mobile", $user->mobile);
        $stmt->bindParam("password", $user->password);


        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);

        $db = null;

        if(count($users) == 1)
            echo '{"user": ' . json_encode($users[0]) . '}';
        else
            echo '{"auth": "false"}';


    } catch (PDOException $e) {
        //error_log($e->getMessage(), 3, '/var/tmp/php.log');
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}


