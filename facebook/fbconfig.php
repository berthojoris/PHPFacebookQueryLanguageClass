<?php
//Facebook Application Configuration.
$facebook_appid='YOUR FACEBOOK APP ID';
$facebook_app_secret='YOUR FACEBOOK APP SECRET ID';

$facebook = new Facebook(array(
'appId'  => $facebook_appid,
'secret' => $facebook_app_secret,
));


?>