<?php
/**
 * Created by PhpStorm.
 * User: spider-ninja
 * Date: 6/4/16
 * Time: 1:12 PM
 */

\Slim\Slim::registerAutoloader();

global $app;

if(!isset($app))
    $app = new \Slim\Slim();

$app->response->headers->set('Access-Control-Allow-Credentials',  'true');

$app->response->headers->set('Content-Type', 'application/json');

/* Starting routes */
/*
$app->get('/files/:username/:fileId','getFile');
$app->post('/files/:username', 'saveFile');*/

$app->get('/org/:orgId/user/:userId/posts','getPosts');
$app->post('/org/:orgId/user/:userId/posts','postCreateRequest');
$app->post('/org/:orgId/user/:userId/post/:postId','updatePostStatus');
$app->get('/org/:orgId/user/:userId/pages','getPages');
/* Ending Routes */

$app->run();