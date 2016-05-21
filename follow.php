<?php

require '/src/Instagram.php';
//use MetzWeb\Instagram\Instagram;

$instagram = new Instagram(array(
  'apiKey'      => 'YOUR_APP_KEY',
  'apiSecret'   => 'YOUR_APP_SECRET',
  'apiCallback' => 'YOUR_APP_CALLBACK' // must point to success.php
));
// set user's accesstoken (can be received after authentication)
$instagram->setAccessToken("2105655638.cf2cd88.244f31b9283d43488b0852b6479d7398");
// follow user (snoopdogg)
$result = $instagram->modifyRelationship('follow', 1574083);
// receive the list of users this user follows
$follows = $instagram->getUserFollows();
// dump response object
echo '<pre>';
print_r($follows);
echo '<pre>';
