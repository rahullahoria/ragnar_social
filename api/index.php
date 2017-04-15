<?php

require_once "header.php";

include 'db.php';
require 'Slim/Slim.php';
require_once 'lib/extractKeywords.php';
require_once 'lib/getOS_Brow.php';
require_once "includes/sms.php";


//pages resource
require_once "resources/pages/getPages.php";

//posts resource
require_once "resources/posts/getPosts.php";
require_once "resources/posts/getPost.php";
require_once "resources/posts/getPostsByStatus.php";
require_once "resources/posts/updatePostStatus.php";
require_once "resources/posts/getPublishedPost.php";

require_once "resources/posts/PostCreateRequest.php";

require_once "resources/access/insertWebPageAccessDetails.php";

require_once "resources/domains/get.php";
require_once "resources/domains/insert.php";

require_once "resources/auth/postUserAuth.php";

require_once "resources/keywords_engine/getKeywords.php";
require_once "resources/shatkonSherlock/searchKeyword.php";

require_once "resources/mamta/processCommand.php";


//app
require_once "app.php";



?>