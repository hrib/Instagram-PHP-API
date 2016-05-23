<?php

require '../src/Instagram.php';
require '../src/InstagramException.php';
//use MetzWeb\Instagram\Instagram;

$instagram = new Instagram(array(
    'apiKey' => getenv('INS_APP_XMASS_ID'),
    'apiSecret' => getenv('INS_APP_XMASS_SEC'),
    'apiCallback' => 'zzzzzzzzzzzzzzzzzzzzhttp://hrinstagram.herokuapp.com/example/success.php' // must point to success.php
));

//$loginUrl = $instagram->getLoginUrl(array('basic','relationships'));


// set user's accesstoken (can be received after authentication)

$token = getenv('INS_APP_TOKEN');
$id_to_get_followers = '327771661';
$instagram->setAccessToken($token);
// follow user (snoopdogg)
$result = $instagram->getUserFollower($id_to_get_followers, 10);
var_dump($result);
// receive the list of users this user follows
//$follows = $instagram->getUserFollows();
// dump response object
echo '<pre>';
//print_r($follows);
echo '<pre>';
