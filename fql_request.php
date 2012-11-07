<?php
/*
 * Facebook Query Language API Class
 *
 * @author     M Teguh A Suandi
 * @link       http://mtasuandi.wordpress.com
 * @license    http://creativecommons.org/licenses/by/3.0/
 *
 */
 
function thread($access_token){
	$fql 		= 'https://graph.facebook.com/fql?q=';
	$q 			= "SELECT thread_id FROM thread WHERE folder_id = 0";
	
	$request	= $fql.urlencode($q).'&access_token='.$access_token;
	
	$ch = curl_init();
    
	curl_setopt($ch, CURLOPT_URL,$request);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    
	$json_response = curl_exec($ch);
	curl_close($ch);
	
	$result = json_decode($json_response,true);
	return $result;
}

function message($access_token, $query){
	$fql 		= 'https://graph.facebook.com/fql?q=';
	$q 			= $query;
	
	$request	= $fql.urlencode($q).'&access_token='.$access_token;
	
	$ch = curl_init();
    
	curl_setopt($ch, CURLOPT_URL,$request);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    
	$json_response = curl_exec($ch);
	curl_close($ch);
	
	$result = json_decode($json_response,true);
	return $result;
}