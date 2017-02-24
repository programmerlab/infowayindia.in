<?php 
		date_default_timezone_set("Asia/Calcutta");
		@session_start();
		//@$connection = mysql_connect('localhost', 'root', 'password', 'buxaah');
		@$connection = mysql_connect('localhost', 'infowmmo_user', 'user@123!', 'infowmmo_api');
		if (!$connection) {
			die('Could not connect: ' . mysql_error());
		}else{
                           mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $connection);
			mysql_select_db('infowmmo_api');
		}
		
?>
