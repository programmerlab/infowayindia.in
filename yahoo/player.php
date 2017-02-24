<?php
// **** POTENTIAL CONFIGURATION STARTS HERE ****

// MODIFY: Insert your own consumer key and secret here!
$consumer_data = array();
$consumer_data['test']['key']    = 'dj0yJmk9RWNKck1FQnVNaTRTJmQ9WVdrOVJ6QnFNV2xJTjJrbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1iNA--';
$consumer_data['test']['secret'] = 'c45dc247aab72bf15d49a0d00d894ce556810a1f';
  
require("lib/OAuth/OAuth.php");  	
   
$cc_key  = "dj0yJmk9RWNKck1FQnVNaTRTJmQ9WVdrOVJ6QnFNV2xJTjJrbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1iNA--";  
$cc_secret = "c45dc247aab72bf15d49a0d00d894ce556810a1f";  

$game_name  = array('mlb','nba','nfl');
 
foreach ($game_name as $key => $game) { 


$url = "http://fantasysports.yahooapis.com/fantasy/v2/games;game_keys=".$game."/players;player_keys";  
$args = array();  
$args["q"] = "yahoo";  
$args["format"] = "json";  
   
	$consumer = new OAuthConsumer($cc_key, $cc_secret);  
	$request = OAuthRequest::from_consumer_and_token($consumer, NULL,"GET", $url, $args);  
	$request->sign_request(new OAuthSignatureMethod_HMAC_SHA1(), $consumer, NULL);  
	$url = sprintf("%s?%s", $url, OAuthUtil::build_http_query($args));  
	$ch = curl_init();  
	$headers = array($request->to_header());  
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);  
	$rsp = curl_exec($ch);  
	$results = json_decode($rsp);  
	$arr = [];
	$team[] = $results->fantasy_content->games; 
} 
$results = [];
 foreach ($team as $key => $tm) { 
 	 
 	foreach ($tm as $key => $value) {
 		# code...
 	
 	 if(isset($value->game[0])){
 	 	foreach ($value->game[0] as $key_name => $name) {
 			$arr[$key_name] = $name;
 		} 
 	 } 
    if(isset($value->game[1]->players)){
 	  foreach ($value->game[1]->players as $key => $player) { 
  	  	if(isset($player->player[0])){ 
 	  	 foreach ($player->player[0] as $key2 => $plyr) {
 	  	 	 if(isset($plyr->player_key)){
 	  	 	 	$arr1['player_key'] = $plyr->player_key;
 	  	 	 }

 	  	 	  if(isset($plyr->player_id)){
 	  	 	 	$arr1['player_id'] = $plyr->player_id;
 	  	 	 }

 	  	 	  if(isset($plyr->name)){
 	  	 	 	$arr1['player_name'] = $plyr->name->full;
 	  	 	 }

 	  	 	  if(isset($plyr->editorial_team_full_name)){
 	  	 	 	$arr1['team_full_name'] = $plyr->editorial_team_full_name;
 	  	 	 }
 	  	 }
 	  	}
 	  	$arr['player'][] = $arr1; 
 	  }
 	}
	
	$results[$arr['code']] = $arr;

 }
 }
 echo "<pre>";
 print_r($results); die;
?> 