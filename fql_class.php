<?php
/*
 * Facebook Query Language API Class
 *
 * @author     M Teguh A Suandi
 * @link       http://mtasuandi.wordpress.com
 * @license    http://creativecommons.org/licenses/by/3.0/
 *
 */

require_once('fql_request.php');

if(!class_exists('FacebookQueryLanguage'))
{
	class FacebookQueryLanguage{

		private function queryThread($access_token){
			
			return thread($access_token);
		}
		
		private function queryFacebookFQL($access_token, $query){
		
			return fql($access_token, $query);
		}
		
		public function getThread($access_token){
			
			$result = $this->queryThread($access_token);
			return $result;
			
		}
		public function getFacebookFQL($access_token, $query){
			
			$result = $this->queryFacebookFQL($access_token, $query);
			return $result;
		}
	}
}
