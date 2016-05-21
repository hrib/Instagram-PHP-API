<?php

require '../src/Instagram.php';
//use MetzWeb\Instagram\Instagram;

$instagram = new Instagram(array(
  'apiKey'      => 'Dcf2cd88',
  'apiSecret'   => 'YOUR_APP_SECRET',
  'apiCallback' => 'http://instafollow.elasticbeanstalk.com/' // must point to success.php
));
// set user's accesstoken (can be received after authentication)
$instagram->setAccessToken("xxx2105655638.cf2cd88.244f31b9283d43488b0852b6479d7398");
// follow user (snoopdogg)
$result = $instagram->modifyRelationship('follow', 3235184663);
// receive the list of users this user follows
//$follows = $instagram->getUserFollows();
// dump response object
echo '<pre>';
//print_r($follows);
echo '<pre>';
