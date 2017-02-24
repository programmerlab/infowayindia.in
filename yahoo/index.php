<?php
// **** POTENTIAL CONFIGURATION STARTS HERE ****

// MODIFY: Insert your own consumer key and secret here!
$consumer_data = array();
$consumer_data['test']['key']    = 'dj0yJmk9RWNKck1FQnVNaTRTJmQ9WVdrOVJ6QnFNV2xJTjJrbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1iNA--';
$consumer_data['test']['secret'] = 'c45dc247aab72bf15d49a0d00d894ce556810a1f';
  
require("lib/OAuth/OAuth.php");  	
   
$cc_key  = "dj0yJmk9RWNKck1FQnVNaTRTJmQ9WVdrOVJ6QnFNV2xJTjJrbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1iNA--";  
$cc_secret = "c45dc247aab72bf15d49a0d00d894ce556810a1f";  

$arr  = array('nfl','nba','mlb');

 
foreach ($arr as $key => $game) {
	# code...


$url = "http://fantasysports.yahooapis.com/fantasy/v2/game/".$game;  
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

$a[] = $results->fantasy_content->game[0];  

}
?>
<table border="1" style="border: 1px solid black">
	<tr>
	<b><td>Game name</td>
	<td>Game code</td>
	<td>Game url</td>
	<td>Game season</td>
	<td>Game game_key</td>
	<td>Game game_id</td>
	<td>Game url</td> </b>
</tr>
	<?php

foreach ($a as $key => $gm) {
	# code...

?> 

<tr>
	<td><?php echo $gm->name; ?> </td>
	<td><?php echo $gm->code; ?> </td>
	<td><?php echo $gm->url; ?></td>
	<td><?php echo $gm->season; ?></td>
	<td><?php echo $gm->game_key; ?></td>
	<td><?php echo $gm->game_id; ?></td>
	<td><?php echo $gm->url; ?></td>
</tr>
<?php } ?>
</table>
<style type="text/css">
table, th, td {
   border: 1px solid black;
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
table {

    width: 100%;
}

th {
    height: 50px;
}
th, td {
    padding: 15px;
    text-align: left;
}
</style>