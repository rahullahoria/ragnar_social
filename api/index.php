<?php

require_once "header.php";

include 'db.php';
require 'Slim/Slim.php';


//pages resource
require_once "resources/pages/getPages.php";

//posts resource
require_once "resources/posts/getPosts.php";
require_once "resources/posts/getPostsByStatus.php";
require_once "resources/posts/updatePostStatus.php";


//app
require_once "app.php";



?>