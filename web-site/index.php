<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 12/20/16
 * Time: 4:15 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ragnar</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="library/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="library/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="library/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="library/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="library/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="library/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="library/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="library/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="library/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="library/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="library/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="library/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="library/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="library/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="library/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="library/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="library/css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="library/css/superslides.css">
    <!-- Slick slider css file -->
    <link href="library/css/slick.css" rel="stylesheet">
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="library/css/animate.css">
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="library/css/elastic_grid.css">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>
    <!-- Default Theme css file -->
    <link id="orginal" href="library/css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- BEGAIN THEME STYLE SWITCHER -->
<!-- <div class="theme_style_switcher">
  <div class="style-switch-button">
    <i class="fa fa-slack"></i>
  </div>
  <h4>Theme Color</h4>
  <a id="default" href="#"></a>
  <a id="yellow" href="#"></a>
  <a id="red" href="#"></a>
  <a id="chocolate" href="#"></a>
  <a id="lime" href="#"></a>
  <a id="eucalyptus" href="#"></a>
  <a id="lynch" href="#"></a>
  <a id="riptide" href="#"></a>
  <a id="flamingo" href="#"></a>
  <a id="plum" href="#"></a>
</div> -->
<!-- END THEME STYLE SWITCHER -->

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->

                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="#"><span>Ragnar Social</span></a>

                    <!-- IMG BASED LOGO  -->
                    <a class="navbar-brand" href="#"><img height="30px" src="library/img/favicons/apple-icon-57x57.png" alt="Ragnar Social"></a>


                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#service">Services</a></li>
                        <!--<li><a href="#works">Works</a></li>-->
                        <li><a href="#team">Team</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <!--<li><a href="#blog">Blog</a></li>-->
                        <li><a href="#contact">Contacts</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->

    <!-- BEGIN SLIDER AREA-->
    <div class="slider_area">
        <!-- BEGIN SLIDER-->
        <div id="slides">
            <ul class="slides-container">

                <!-- THE FIRST SLIDE-->
                <li>
                    <!-- FIRST SLIDE OVERLAY -->
                    <div class="slider_overlay"></div>
                    <!-- FIRST SLIDE MAIN IMAGE -->
                    <img src="library/img/full-slider/full-slide7.jpg" alt="img">
                    <!-- FIRST SLIDE CAPTION-->
                    <div class="slider_caption">
                        <h2>Hi, We do Market research and advertising </h2>
                        <p>we are a group of experienced designers, developers and marketing heads</p>
                        <a href="#" class="slider_btn">Who We are</a>
                    </div>
                </li>

                <!-- THE SECOND SLIDE-->
                <li>
                    <!-- SECOND SLIDE OVERLAY -->
                    <div class="slider_overlay"></div>
                    <!-- SECOND SLIDE MAIN IMAGE -->
                    <img src="library/img/full-slider/full-slide2.jpg" alt="img">
                    <!-- SECOND SLIDE CAPTION-->
                    <div class="slider_caption">
                        <h2>Hi, Let's find new marketing Strategies</h2>
                        <p>we are a group of experienced designers, developers and marketing heads</p>
                        <a href="#" class="slider_btn">Who We are</a>
                    </div>
                </li>

                <!-- THE THIRD SLIDE-->
                <li>
                    <!-- THIRD SLIDE OVERLAY -->
                    <div class="slider_overlay"></div>
                    <!-- THIRD SLIDE MAIN IMAGE -->
                    <img src="library/img/full-slider/full-slide1.jpg" alt="img">
                    <!-- THIRD SLIDE CAPTION-->
                    <div class="slider_caption">
                        <h2>we'll change your Idea of Marketing</h2>
                        <p>we are a group of experienced designers, developers and marketing heads</p>
                        <a href="#" class="slider_btn">Who We are</a>
                    </div>
                </li>
            </ul>
            <!-- BEGAIN SLIDER NAVIGATION -->
            <nav class="slides-navigation">
                <!-- PREV IN THE SLIDE -->
                <a class="prev" href="/item1">
                    <span class="icon-wrap"></span>
                    <h3><strong>Prev</strong></h3>
                </a>
                <!-- NEXT IN THE SLIDE -->
                <a class="next" href="/item3">
                    <span class="icon-wrap"></span>
                    <h3><strong>Next</strong></h3>
                </a>
            </nav>
        </div>
        <!-- END SLIDER-->
    </div>
    <!-- END SLIDER AREA -->
</header>
<!--=========== End HEADER SECTION ================-->


<!--=========== BEGIN ABOUT SECTION ================-->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about_area">
                    <!-- START ABOUT HEADING -->
                    <div class="heading">
                        <h2 class="wow fadeInLeftBig">About Us</h2>
                        <p>Maintaining Social Profile of a company is a costly process. Brands creating real values by invest most time in improving service quality and product development. Creating and maintaining Social Profile is always become complex. As the fail to maintain it, so taking out its leverage become impossible.</p>
                        <p>Ragnar Social Comes in place when brands want to create, maintain and take leverage of social profile over social network like Facebook, Twitter, Google Plus and Linkedin.</p>
                        <p>Fruit of social profile don’t come in a day, rather it comes with continuous engagement.</p>
                        <p><b>You Focus on important things of your business, Social profiling let Ragner to take care.</b></p>
                    </div>

                    <!-- START ABOUT CONTENT -->
                    <div class="about_content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about_featured">
                                    <div class="panel-group" id="accordion">
                                        <!-- START SINGLE FEATURED ITEAM #1-->
                                        <div class="panel panel-default wow fadeInLeft">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                        <span class="fa fa-check-square-o"></span>Social media posts can be used to drive targeted traffic
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    our desinger and devloper did alot while devloping this cerative tool. our designer inovvation and beautiful work make this tool more attractive . person belonging to this tool have alot of experince and  brillant imagination power. so all effort done by them makes a creative and clean desiging tool.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- START SINGLE FEATURED ITEAM #2 -->
                                        <div class="panel panel-default wow fadeInLeft">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                        <span class="fa fa-check-square-o"></span>Using social media for business boosts your site’s SEO
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    It is a long established fact that a responsive layout in today"s world is too nessassry because reader will be distracted by the readable content of a page when looking at its layout. The point of using responsive layout  is that , we dont knnow where and customer will open the page or on which device so, with responsive layout it has a more-or-less normal distribution of letters as making it look like readable Easily.
                                                </div>
                                            </div>
                                        </div>
                                        <!-- START SINGLE FEATURED ITEAM #3 -->
                                        <div class="panel panel-default wow fadeInLeft">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                        <span class="fa fa-check-square-o"></span>If you’re doing it right, social media will lead to real relationship building
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                                </div>
                                            </div>
                                        </div>
                                        <!-- START SINGLE FEATURED ITEAM #4 -->
                                        <div class="panel panel-default wow fadeInLeft">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                        <span class="fa fa-check-square-o"></span>Users are receptive to your messagesc
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="about_slider">
                                    <!-- BEGAIN FEATURED SLIDER -->
                                    <div class="featured_slider">
                                        <!-- SINGLE SLIDE IN THE SLIDER -->
                                        <div class="single_iteam">
                                            <a href="#"> <img src="library/img/feature_img1.jpg" alt="img"></a>
                                        </div>
                                        <!-- SINGLE SLIDE IN THE SLIDER -->
                                        <div class="single_iteam">
                                            <a href="#"> <img src="library/img/feature_img2.jpg" alt="img"></a>
                                        </div>
                                        <!-- SINGLE SLIDE IN THE SLIDER -->
                                        <div class="single_iteam">
                                            <a href="#"> <img src="library/img/feature_img3.jpg" alt="img"></a>
                                        </div>
                                        <!-- SINGLE SLIDE IN THE SLIDER -->
                                        <div class="single_iteam">
                                            <a href="#"> <img src="library/img/feature_img6.jpg" alt="img"></a>
                                        </div>
                                        <!-- SINGLE SLIDE IN THE SLIDER -->
                                        <div class="single_iteam">
                                            <a href="#"> <img src="library/img/feature_img5.jpg" alt="img"></a>
                                        </div>
                                    </div>
                                    <!-- END FEATURED SLIDER -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGAIN SKILLS  -->
   <?php /* <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="skills_area">
                <div class="slider_overlay"></div>
                <div class="container">
                    <div class="skills">
                        <div class="heading">
                            <h3 class="wow fadeInDown">Our Skills</h3>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <div id="myStat" data-dimension="150" data-text="85%" data-info="Design" data-width="10" data-fontsize="25" data-percent="85" data-fgcolor="#999" data-bgcolor="#fff"  ><span class="fa fa-task"></span></div>
                                <span class="fa fa-task"></span><h4>Design</h4>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <div id="myStathalf2" data-dimension="150" data-text="90%" data-info="" data-width="10" data-fontsize="25" data-percent="90" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="<span class='fa fa-task'></span>"></div>
                                <h4>HTML/CSS</h4>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <div id="myStat2" data-dimension="150" data-text="65%" data-info="" data-width="10" data-fontsize="25" data-percent="65" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                                <h4>jQuery</h4>
                            </div>
                        </div>
                        <!-- START SINGLE SKILL-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single_skill wow fadeInUp">
                                <div id="myStat3" data-dimension="150" data-text="75%" data-info="" data-width="10" data-fontsize="25" data-percent="75" data-fgcolor="#999" data-bgcolor="#fff"  data-icon="fa-task"></div>
                                <h4>WordPress</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> */ ?>
    <!-- END SKILLS  -->
</section>
<!--=========== END ABOUT SECTION ================-->

<!--=========== BEGIN SERVICE SECTION ================-->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- BEGAIN SERVICE HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Our Services</h2>
                    <p> RAGNAR helps you  to improve your company’s performance. We deliver real business results through a people-centered approach to technology and providing the right way according to todays needs.we provide numerous service like email campaning, sms campaning , location tracking , area filtring , person filtering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- BEGAIN SERVICE  -->
                <div class="service_area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInLeft">
                                <div class="service_iconarea">
                                    <span class="fa fa-line-chart service_icon"></span>
                                </div>
                                <h3 class="service_title">Planning & Strategy</h3>
                                <p> The work breakdown structures has been  evolved and are much more .</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInRight">
                                <div class="service_iconarea">
                                    <span class="fa fa-suitcase service_icon"></span>
                                </div>
                                <h3 class="service_title">Corporate Branding</h3>
                                <p>We giving 100% ROI guarantee for awesome result.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInLeft">
                                <div class="service_iconarea">
                                    <span class="fa fa-eraser service_icon"></span>
                                </div>
                                <h3 class="service_title">Targeted SMS Marketing</h3>
                                <p>We Choose vicely who need your product and service.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInRight">
                                <div class="service_iconarea">
                                    <span class="fa fa-paper-plane service_icon"></span>
                                </div>
                                <h3 class="service_title">SEO,SMM and Internet marketing</h3>
                                <p>We council your needs.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInLeft">
                                <div class="service_iconarea">
                                    <span class="fa fa-envelope-o service_icon"></span>
                                </div>
                                <h3 class="service_title">Email Marketing</h3>
                                <p>Email marketing is directly marketing a commercial message to a group of people using email.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- BEGAIN SINGLE SERVICE -->
                            <div class="single_service wow fadeInRight">
                                <div class="service_iconarea">
                                    <span class="fa fa-support service_icon"></span>
                                </div>
                                <h3 class="service_title">Premium Customer SUpport</h3>
                                <p>Search our Knowledge base and Community for information from our team of product experts and powerful Act! .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END SERVICE SECTION ================-->

<!--=========== BEGAIN WORKS SECTION ================-->
<section id="works">
    <!-- BEGAIN MILESTONE WORSK SECTION -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="counter_section">
                <!-- SKILLS COUNTER OVERLAY -->
                <div class="slider_overlay"></div>
                <div class="container">
                    <div class="counter_area">
                        <div class="heading">
                            <h3 class="wow fadeInLeft">Some Milestone Works</h3>
                        </div>
                        <!-- START SINGLE COUNTER-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="counter wow fadeInUp">
                                <i class="fa fa-users fa-2x"></i>
                                <h2 class="timer count-title" id="count-number" data-to="940" data-speed="1500">400</h2>
                                <p class="count-text ">Clients</p>
                            </div>
                        </div>
                        <!-- START SINGLE COUNTER-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="counter wow fadeInUp">
                                <i class="fa fa-tasks fa-2x"></i>
                                <h2 class="timer count-title" id="count-number2" data-to="1750" data-speed="1500">300</h2>
                                <p class="count-text ">Projects</p>
                            </div>
                        </div>
                        <!-- START SINGLE COUNTER-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="counter wow fadeInUp">
                                <i class="fa fa-coffee fa-2x"></i>
                                <h2 class="timer count-title" id="count-number3" data-to="300" data-speed="1500">200</h2>
                                <p class="count-text ">Cup Of Coffee</p>
                            </div>
                        </div>
                        <!-- START SINGLE COUNTER-->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="counter wow fadeInUp">
                                <i class="fa fa-bullhorn fa-2x"></i>
                                <h2 class="timer count-title" id="count-number4" data-to="875" data-speed="1500">100</h2>
                                <p class="count-text ">Subscribers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MILESTONE WORSK SECTION -->

    <!-- BEGAIN FORTFOLIO WORSK SECTION -->
   <!-- <div class="row">
        <div class="portfolio_area">
            <!-/- BEGAIN PORTFOLIO HEADER -/->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="container">
                        <div class="heading">
                            <h2 class="wow fadeInLeftBig">Latest Works</h2>
                            <p>there </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-/- END PORTFOLIO HEADER -/->

            </!-- BEGAIN PORTFOLIO GALLERY -/->
            <div class="row">
                <div class="portfolio_gallery">
                    <div id="elastic_grid_demo"></div>
                </div>
            </div>
            <!-- END PORTFOLIO GALLERY -/->
        </div>
    </div>-->
    <!-- END FORTFOLIO WORSK SECTION -->
</section>
<!--=========== END WORKS SECTION ================-->

<!--=========== BEGAIN TEAM SECTION ================-->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- BEGAIN ABOUT HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Our Team</h2>
                </div>
                <div class="team_area">
                    <!-- BEGAIN TEAM SLIDER -->
                    <div class="team_slider">
                        <!-- BEGAIN SINGLE TEAM SLIDE#1 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/rahul.jpg" alt="img">
                                </div>
                                <h5 class="">Rahul Lahoria</h5>
                                <span>Founder & CEO</span>
                                <p>Rahul Lahoria is the Founder of Shatkon Labs and a true clue programmer.
                                    Rahul holds a Masters Degree in IT from Indian Institute of Technology, Kharagpur.</p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#2 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_2.jpg" alt="img">
                                </div>
                                <h5>Rajnish Kumar</h5>
                                <span>Lead Developer</span>
                                <p>Rajnish Kumar, the Lead Developer holds a Masters degree in Computer Science Engineering.
                                    Everywhere Rajnish look, he’s faced with a marketplace saturated with generic website companies full of slang and empty stipulation.
                                </p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_3.jpg" alt="img">
                                </div>
                                <h5>Vikas Nagar</h5>
                                <span>Marketing Head</span>
                                <p>Vikas Nagar have specialization in marketing and have Masters in Business Administration from NIPER, Mohali. His quest to become an entrepreneur to solve the difficulties faced by the people lends him as a Cofounder of Sharkon Labs.</p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#3 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_4.jpg" alt="img">
                                </div>
                                <h5>Rutwik Kishan Rao</h5>
                                <span>Co-founder & Legal advisor</span>
                                <p>Rutwik Kishan Rao is a Mechanical Engineer turned Lawyer who specialises in Intellectual Property Laws.
                                    This IIT KGP alumni has a passion about Technology and it’s social and legal implications .
                                </p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#4 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_5.jpg" alt="img">
                                </div>
                                <h5>Neelam Dubey</h5>
                                <span>Designer</span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#5 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_6.jpg" alt="img">
                                </div>
                                <h5>Aditi Lahoria</h5>
                                <span>Software Developer</span>
                                <p>Aditi is software developer and holds  Masters degree in Iformation Technology.
                                    She love to do her work with passion and also intersted in R&D section. </p>
                                <div class="team_social">
                                    <a href="https://www.facebook.com/ad9871" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="https://plus.google.com/u/0/100105296713869676759/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    <a href="https://www.linkedin.com/in/aditi-lahoria-342700114?trk=nav_responsive_tab_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#6 -->
                        <div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_7.jpg" alt="img">
                                </div>
                                <h5>Anil Kumar</h5>
                                <span>Designer</span>
                                <p>Anil Kumar is the Designer. A Bio-techonology Engineer by qualification,
                                    he has great love for designing and an appreciation for all things artistic.
                                </p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE TEAM SLIDE#7 -->
                        <!--<div class="col-lg-3 col-md-3 col-sm-4">
                            <div class="single_team wow fadeInUp">
                                <div class="team_img">
                                    <img src="library/img/team_3.jpg" alt="img">
                                </div>
                                <h5>Vikas Kumar</h5>
                                <span>COO & CME</span>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                                <div class="team_social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END TEAM SECTION ================-->


<!--=========== BEGAIN PRICING SECTION ================-->
<section id="pricing">
    <div class="container">
        <div class="row col-lg-12 col-md-12">
            <!-- START ABOUT HEADING -->
            <div class="heading">
                <h2 class="wow fadeInLeftBig">Our Pricing</h2>
                <p>-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------.</p>
            </div>
        </div>
        <div class="row col-lg-12 col-md-12">
            <div class="pricing_area">
                <div class="row">
                    <!-- BEGAIN BASIC PRICE TABLE -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_price wow fadeInUp">
                            <h3>Basic</h3>
                            <div class="price">
                                <h3><s>10k ₹ </s></h3>
                                <h4> 7K ₹ </h4>
                                <span>per Month</span>
                            </div>
                            <ul class="price_features">
                                <li>Targeted <strong>Campaning</strong></li>
                                <li><strong>Customizable</strong> Feature</li>
                                <li>Minimum <strong>0 clicks</strong></li>
                                <!--<li>Email / SMS Campaning</li>
                                <li>15 paise per SMS</li>
                                <li>Minimum <strong>50000 SMS</strong></li>-->
                            </ul>
                            <a href="#" class="price_btn">Select Plan</a>
                        </div>
                    </div>
                    <!-- BEGAIN STANDARD PRICE TABLE -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_price wow fadeInUp">
                            <h3>Standard</h3>
                            <div class="price">
                                <h3><s>30K ₹</s></h3>
                                <h4>18K ₹</h4>
                                <span>per Month</span>
                            </div>
                            <ul class="price_features">
                                <li>Targeted <strong>Campaning</strong></li>
                                <li><strong>Customizable</strong> Feature</li>
                                <li>Minimum <strong>200 clicks</strong></li>
                                <!--<li>Email / SMS Campaning</li>
                                <li>15 paise per SMS</li>
                                <li>Minimum <strong>30000 SMS</strong></li>-->
                            </ul>
                            <a href="#" class="price_btn">Select Plan</a>
                        </div>
                    </div>
                    <!-- BEGAIN BUSINESS PRICE TABLE -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_price business_price wow fadeInUp">
                            <h3>Business</h3>
                            <div class="price">
                                <h3><s>30K ₹</s></h3>
                                <h4>25K ₹</h4>
                                <span>per Month</span>
                            </div>
                            <ul class="price_features">
                                <li>Targeted <strong>Campaning</strong></li>
                                <li><strong>Customizable</strong> Feature</li>
                                <li>Minimum <strong>500 clicks</strong></li>
                                <li>Email / SMS Campaning</li>
                                <li>15 paise per SMS</li>
                                <li>Minimum <strong>20000 SMS</strong></li>
                            </ul>
                            <a href="#" class="price_btn">Select Plan</a>
                        </div>
                    </div>
                    <!-- BEGAIN DELUX PRICE TABLE -->
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_price wow fadeInUp">
                            <h3>Delux</h3>
                            <div class="price">
                                <h3><s>60K ₹</s></h3>
                                <h4>50K ₹</h4>
                                <span>per month</span>
                            </div>
                            <ul class="price_features">
                                <li>Targeted <strong>Campaning</strong></li>
                                <li><strong>Customizable</strong> Feature</li>
                                <li>Minimum <strong>1000 clicks</strong></li>
                                <li>Email / SMS Campaning</li>
                                <li>15 paise per SMS</li>
                                <li>Minimum <strong>10000 SMS</strong></li>
                            </ul>
                            <a href="#" class="price_btn">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END PRICING SECTION ================-->

<?php /*
<!--=========== BEGAIN BLOG SECTION ================-->
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- START BLOG HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Latest News From Blog</h2>
                    <p> latestly we collabrate with the collap.com and blueteam , Ragnar provide them there services and help them to increment in there bussiness .</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <!-- BEGAIN BLOG CONTENT -->
                <div class="blog_content">

                    <!-- BEGAIN BLOG SLIDER -->
                    <div class="blog_slider">
                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/blog_img1.jpg" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>

                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/blog_img2.jpg" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/favicons/android-icon-192x192.png" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/blog_img4.jpg" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/blog_img1.jpg" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>
                        <!-- BEGAIN SINGLE BLOG -->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single_post wow fadeInUp">
                                <div class="blog_img">
                                    <img src="library/img/blog_img2.jpg" alt="img">
                                </div>
                                <h3>Sed ut perspiciatis unde omnis</h3>
                                <div class="post_commentbox">
                                    <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                                    <span><i class="fa fa-calendar"></i>6:49 AM</span>
                                    <a href="#"><i class="fa fa-tags"></i>Technology</a>
                                </div>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                                <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END BLOG SECTION ================-->

*/ ?>
<!--=========== BEGAIN TESTIMONIAL SECTION ================-->
<?php /*<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class=" col-lg-7 col-md-7 col-sm-6">
                <!-- START BLOG HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Satisfied Customers</h2>
                    <p>BLUETEAM is our best client to which we provide our services. we have done TEN THOUSAND email campaning for blueteam or they probably get positive response from there customer related to blueteam brand.</p>
                </div>
            </div>
            <div class=" col-lg-5 col-md-5 col-sm-6">
                <div class="testimonial_customer">
                    <!-- BEGAIN TESTIMONIAL SLIDER -->
                    <ul class="testimonial_slider">
                        <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                        <!--    <li>
                            <div class="media testi_media">
                              <a class="media-left testi_img" href="#">
                                <img src="library/img/team-1.jpg" alt="img">
                              </a>
                              <div class="media-body">
                                <h4 class="media-heading">Alin Brown</h4>
                                <span>CEO</span>
                              </div>
                            </div>
                            <div class="testi_content">
                              <p>Message of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                            </div>
                          </li>-->
                        <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
                        <li>
                            <div class="media testi_media">
                                <a class="media-left testi_img" href="#">
                                    <img src="library/img/team_2.jpg" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Rajnish Panwar</h4>
                                    <span>CEO</span>
                                </div>
                            </div>
                            <div class="testi_content">
                                <p>RAGNAR is an awesome campaning engine which help us alot in incrementing our bussiness.</p>
                            </div>
                        </li>
                        <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#3 -->
                        <li>
                            <div class="media testi_media">
                                <a class="media-left testi_img" href="#">
                                    <img src="library/img/team_1.jpg" alt="img">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Rahul Lahoria</h4>
                                    <span>CEO,shatkon labs pvt ltd.</span>
                                </div>
                            </div>
                            <div class="testi_content">
                                <p>RAGNAR is an awesome campaning engine which help us alot in incrementing our bussiness.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> */?>
<!--=========== END TESTIMONIAL SECTION ================-->


<!--=========== BEGAIN CLIENTS SECTION ================-->
<?php /*<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- START BLOG HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Our Best Clients</h2>
                    <p>BLUETEAM is our best client to which we provide our services. we have done TEN THOUSAND email campaning for blueteam or they probably get positive response from there customer related to blueteam brand. </p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="clients_content">
                    <div class="row">
                        <!-- BEGAIN CLIENTS SLIDER -->
                        <div class="clients_slider">
                            <!-- BEGAIN SINGLE CLIENT SLIDE#1 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/themeforest.png" alt="clients Brand">
                                </div>
                            </div>
                            <!--    <!-- BEGAIN SINGLE CLIENT SLIDE#2 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/audiojungle.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#3 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/codecanyon.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#4 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/envato-studio.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#5 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/themeforest.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#6 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/audiojungle.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#7 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/codecanyon.png" alt="clients Brand">
                                </div>
                            </div>
                            <!-- BEGAIN SINGLE CLIENT SLIDE#8 -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="single_client">
                                    <img src="library/img/envato-studio.png" alt="clients Brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> */?>
<!--=========== END CLIENTS SECTION ================-->

<!--=========== BEGAIN CONTACT SECTION ================-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- START CONTACT HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Contact Us</h2>
                    <p>Thank you for your interest in RAGNAR’s services. Please provide the following information about your business needs to help us serve you better. This information will enable us to route your request to the appropriate person. You should receive a response within 48 hours. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- BEGAIN CONTACT CONTENT -->
            <div class="contact_content">
                <!-- BEGAIN CONTACT FORM -->
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="contact_form">

                        <!-- FOR CONTACT FORM MESSAGE -->
                        <div id="form-messages"></div>

                        <form>
                            <input class="form-control" type="text" placeholder="Name">
                            <input class="form-control" type="email" placeholder="Email">
                            <input class="form-control" type="text" placeholder="Subject">
                            <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <input class="submit_btn" type="submit" value="Send">
                        </form>
                    </div>
                </div>
                <!-- BEGAIN CONTACT MAP -->
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <!--<div class="contact_map">
                        <!-- BEGAIN GOOGLE MAP --/>
                        <div id="map_canvas"></div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END CONTACT SECTION ================-->

<!--=========== BEGAIN CONTACT FEATURE SECTION ================-->
<section id="contactFeature">
    <!-- SKILLS COUNTER OVERLAY -->
    <div class="slider_overlay"></div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="container">
                <div class="contact_feature">
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-phone"></i>
                            <h4>Call Us</h4>
                            <p>9599075355</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-envelope-o"></i>
                            <h4>Email Address</h4>
                            <p>customercare@blueteam.in</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-map-marker"></i>
                            <h4>Office Location</h4>
                            <p>77-P, Sector-40, Gurgaon (Haryana)</p>
                        </div>
                    </div>
                    <!-- BEGAIN CALL US FEATURE -->
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="single_contact_feaured wow fadeInUp">
                            <i class="fa fa-clock-o"></i>
                            <h4>Working Hours</h4>
                            <p>24 X 7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== END CONTACT FEATURE SECTION ================-->

<!--=========== BEGAIN SUBSCRIBE SECTION ================-->
<section id="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- START SUBSCRIBE HEADING -->
                <div class="heading">
                    <h2 class="wow fadeInLeftBig">Subscribe Us</h2>
                    <p>This is absolutely an awesome campaning engine for our viewers who would like to get our latest content updates via E-mail. If you really enjoy what we post on our website, then we really insist you to subscribe us now! yes, right now!. </p>
                </div>
                <!-- BEGAIN SUBSCRIVE FORM -->
                <form class="subscribe_form">
                    <div class="subscrive_group wow fadeInUp">
                        <input class="form-control subscribe_mail" type="email" placeholder="Enter your email address">
                        <input class="subscr_btn" type="submit" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--=========== END SUBSCRIBE SECTION ================-->

<!--=========== BEGAIN FOOTER ================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer_left">
                    <p>Copyright &copy; 2015 <a href="http://shatkonlabs.com" target="_blank">Shatkon Labs Pvt. Ltd.</a>. All Rights Reserved</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer_right">
                    <ul class="social_nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=========== END FOOTER ================-->

<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="library/js/jquery.ui.map.js"></script>
<!-- For smooth animatin  -->
<script src="library/js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="library/js/bootstrap.min.js"></script>
<!-- superslides slider -->
<script src="library/js/jquery.superslides.min.js" type="text/javascript"></script>
<!-- slick slider -->
<script src="library/js/slick.min.js"></script>
<!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<!-- for portfolio filter gallery -->
<script src="library/js/modernizr.custom.js"></script>
<script src="library/js/classie.js"></script>
<script src="library/js/elastic_grid.min.js"></script>
<!--<script src="library/js/portfolio_slider.js"></script>-->

<!-- Custom js-->
<script src="library/js/custom.js"></script>
</body>
</html>

