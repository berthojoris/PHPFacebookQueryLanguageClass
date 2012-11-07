<?php
/*
 * Facebook Query Language API Class
 *
 * @author     M Teguh A Suandi
 * @link       http://mtasuandi.wordpress.com
 * @license    http://creativecommons.org/licenses/by/3.0/
 *
 */

require_once('facebook/facebook.php');
require_once('facebook/fbconfig.php');
require_once('fql_class.php');

$user = $facebook->getUser();
if($user){
	try{
		$user_profile = $facebook->api('/me');
		$access_token = $facebook->getAccessToken();
	}
	catch(FacebookApiException $e){
		error_log($e);
		$user = null;
	}
}

$obj = new FacebookQueryLanguage();
/*
try{
	$thread = $obj->getThread($access_token);
}catch(Exception $e){

	echo $e->getMessage();
}
*/
try{
	$query   = "SELECT message_id, thread_id, author_id, body, created_time, attachment, viewer_id FROM message WHERE thread_id = xxxyourthreadmessageidxxx";
	$message = $obj->getFacebookMessage($access_token, $query);
}catch(Exception $e){

	echo $e->getMessage();
}