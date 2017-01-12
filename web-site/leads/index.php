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
                with Regards <br>
                Ragnar Social Team <br>
                <a href='http://ragnarsocial.com'>RagnarSocial.com</a>";
    foreach($toArray as $to)
        sendMail($to, $subject, $message);

    header('Location: http://'.$post->link);

}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <title><?= $post->title ?>, <?= $post->company_name ?></title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <!-- for Google -->
    <meta name="description" content="<?=$post->description; ?>" />
    <meta name="keywords" content="<?=$metaDescription; ?>" />
    <meta name="author" content="<?= $post->company_name ?>" />
    <meta name="copyright" content="true" />
    <meta name="application-name" content="website" />

    <!-- for Facebook -->
    <meta property="og:title" content="<?=$post->title; ?>" />
    <meta name="og:author" content="<?= $post->company_name ?>" />
    <meta property="og:type" content="website"/>

    <meta name="p:domain_verify" content=""/>
    <meta property="og:image" content='http://api.file-dog.shatkonlabs.com/files/rahul/<?= $post->gen_img_id ?>' />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image:type" content="image/jpeg" />

    <meta property="og:description" content="<?=$post->description; ?>" />

    <!-- for Twitter -->
    <!-- <meta name="twitter:card" content="n/a" /> -->
    <meta name="twitter:site" content="@hireblueteam">
    <meta name="twitter:creator" content="@hireblueteam">
    <meta name="twitter:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <meta name="twitter:title" content="<?= $post->title ?>, <?= $post->company_name ?>" />
    <meta name="twitter:description" content="<?=$post->description; ?>" />
    <meta name="twitter:image" content="http://api.file-dog.shatkonlabs.com/files/rahul/<?= $post->gen_img_id ?>" />

    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body style='overflow-x: hidden ! important;
            background-image: url(http://api.file-dog.shatkonlabs.com/files/rahul/<?= $rawImg ?>);
            background-repeat: no-repeat;background-position: top;'>

    <div class="form1" >
        <div id="container_demo"  >
            <div id="wrapper" >
                <div id="login" class="animate form ">
                    <form  action="#" method="post" autocomplete="on">
                        <h1>Need More Info</h1>
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

                            Powered by: <a href="http://ragnarsocial.com">www.RagnarSocial.com</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div  class="text" >
        <img  src='http://api.file-dog.shatkonlabs.com/files/rahul/<?= $logo ?>'  style='max-height:80px;text-align: center;margin-bottom: 15px;'/>
        <h1 style=" color: white;
            font: bold 20px/30px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;"><?= $title ?></h1>
        <h2 style=" color: white;
            font: bold 16px/25px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;"><?= $description ?></h2>
        <br/>
        <h1 style=" color: white;
            font: bold 20px/30px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;">About <?= ucfirst($post->company_name) ?></h1>
        <h2 style=" color: white;
            font: bold 16px/25px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;"><?= $post->about ?></h2>
        <br/>
        <h1 style=" color: white;
            font: bold 20px/30px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            ;">Contact Us</h1>
        <h2 style=" color: white;
            font: bold 16px/25px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: rgb(0, 0, 0); /* fallback color */
            background: rgba(0, 0, 0, 0.7);
            text-align: left;

            ;"><a href="http://<?= $post->link ?>" style="color: white;margin-left: 10px;"><?= $post->link ?></a><br>
               <span style="margin-left: 10px;"> <?= $post->email ?></span><br>
                <span style="margin-left: 10px;"><?= $post->mobile ?></span>
        </h2>
    </div>    
</body>
</html>
