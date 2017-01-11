<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 1/11/17
 * Time: 11:57 AM
 */
//?p=1-1-12-f
function httpGet($url){
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false);

    $output=curl_exec($ch);

    curl_close($ch);
    return $output;
}
function sendMail($to, $subject, $message){

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <leads@ragnarsocial.com>' . "\r\n";
    //$headers .= 'Cc: myboss@example.com' . "\r\n";

    mail($to, $subject, $message, $headers);
}

$inputs = explode('-',$_GET['p']);
$url = "http://api.ragnar.shatkonlabs.com/org/".$inputs[0]."/user/".$inputs[1]."/post/".$inputs[2]."?source=".$inputs[3];
$post = json_decode(httpGet($url))->posts[0];
//var_dump($post);die();
$title = $post->title;
$description = $post->description;
$rawImg = $post->raw_img_id;
$logo = $post->logo_id;

if($_POST['lead']){


    $toArray = array('rahul_lahoria@yahoo.com',$post->email);
    $subject = "Ragnar Social Got a lead for You";
    $message = "Name: ". $_POST['username']. "<br>".
                "Email Id: ". $_POST['email'] . "<br>".
                "Mobile: ". $_POST['mobile'] . "<br>".
                "for: ". $post->title . "<br>".
                "Happy to Server you.<br><br>
                Ragnar Social Team <br>
                <a href='http://ragnarsocial.com'>RagnarSocial.com</a>";
    foreach($toArray as $to)
        sendMail($to, $subject, $message);

}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body style='overflow-x: hidden ! important;
            background-image: url(http://api.file-dog.shatkonlabs.com/files/rahul/<?= $rawImg ?>);
            background-size:cover;background-repeat: no-repeat;
            background-position: top;'>
<div >
<div style="width: 100%;margin-top: 30px">

    <div  style="margin-left:40px;width:500px;text-align: center;float: left;">
        <img  src='http://api.file-dog.shatkonlabs.com/files/rahul/<?= $logo ?>' height='100px' width='100px' style='text-align: center'/>
        <h1 style=" color: white;
            font: bold 24px/45px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;"><?= $description ?></h1>

    </div>
    <div style="width:500px;float: right;text-align: center;" >
        <div id="container_demo"  >

            <div id="wrapper" >
                <div id="login" class="animate form ">
                    <form  action="#" method="post" autocomplete="on">
                        <h1>Let get <?= $title ?></h1>
                        <p>
                            <label for="username" class="uname" >Name</label>
                            <input id="username" name="username" required="required" type="text" placeholder="Eg. Rahul Lahoria"/>
                        </p>
                        <p>
                            <label for="email" class="uname" >email</label>
                            <input id="email" name="email" required="required" type="email" placeholder="Eg. mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="mobile" class="uname" >Mobile</label>
                            <input id="mobile" name="mobile" required="required" type="text" placeholder="Eg. 9599075955"/>
                        </p>
                        <p class="login button">
                            <input type="submit" name="lead" value="Get In Touch" />
                        </p>
                        <p class="change_link">
                            Our Web
                            <a href="http://<?= $post->link ?>" class="to_register"><?= $post->link ?></a><br>
                            Powered by: <a href="http://ragnarsocial.com">www.RagnarSocial.com</a>
                        </p>

                    </form>
                </div>



            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
