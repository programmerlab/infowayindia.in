<?php
//DB Connection
$localHost 	= 	"localhost";
$userName	=	"infowmmo_user";
$passWord	=	"user@123!";
$con 		= 	mysql_connect($localHost,$userName,$passWord);
$rs 		= 	mysql_select_db('infowmmo_api',$con);

// Method Name
$methodName = 
isset($_REQUEST['method_name'])?$_REQUEST['method_name']:'';

// Manipulation 
switch ($methodName ) {
	case 'registration':
		extract($_REQUEST); 
		//$response = insertQuery('users',$_GET);
		$user_count = checkUserExist($email);
		if($user_count>=1)
		{	
			$arr = array('response' => 
array('method_name'=>'registration','email_exist'=>'true',
				'msg'=>'email already 
exist','response_code' => 400));
			echo json_encode($arr);
			return false;
		}else{
			$response = 
insertQuery('users',$_REQUEST,'success');
		} 
		break;
	case 'login':
			
		extract($_REQUEST);	
		$email 		= mysql_real_escape_string($email);
		$password 	= mysql_real_escape_string($password); 

		$sql = "select * from users where email = '".$email."' 
AND $password= '".$password."'";

		$qryExc = mysql_query($sql);

		$data = mysql_fetch_assoc($qryExc);

		$c =  mysql_num_rows($qryExc);
		
		if($c>=1)
		{ 
			$arr = array('response' => 
array('method_name'=>$methodName,
			'response_msg'=>'success','response_code' => 
200,'data'=>$data));
			echo json_encode($arr);
		}
		else {
			$arr = array('response' => 
array('method_name'=>$methodName,
			'response_msg'=>'failed','response_code' => 
401));
			echo json_encode($arr);
		} 
		break;
	case 'darshan':
		
		extract($_REQUEST);	
		insertQuery('darshan',$_REQUEST,"success");
		break;
	case 'free_prasad':
		
		extract($_REQUEST);	
		insertQuery('free_prasad',$_REQUEST,"success"); 
		break;
	case 'saileela_membership':
		
		extract($_REQUEST);	
		insertQuery('saileela_membership',$_REQUEST,"success"); 
		break;
	case 'donation':
		
		extract($_REQUEST);	
		insertQuery('donation',$_REQUEST,"success"); 
		break;					
	
	default:
		$arr = array('response' => array('method'=>'Method does 
not exist','response_code' => 204));
		echo json_encode($arr);
		return false;
		break;
} 

// Method 

function insertQuery($tableName,$parameter,$success_msg="success")
{
	extract($parameter);
	$keyValue = '';
	$methodName = $parameter['method_name'];
	unset($parameter['method_name']);
	foreach ($parameter as $key => $value) {
		 
		 $keyValue .=  $key."="."'".$value."'".",";
	}
	$qryString =  rtrim($keyValue,','); 
	//echo $qryString; die;
	$insertQuery 	= "INSERT into $tableName set $qryString"; 
	//echo $insertQuery; die;
	$qryExc 		=  mysql_query($insertQuery);

	if($qryExc)
	{
		$data = array('data'=>$parameter);
		$arr = array('response' => 
array('method_name'=>$methodName,
		'response_msg'=>$success_msg,'response_code' => 
200,'data'=>$parameter));
		echo json_encode($arr);
		return false;
	}else
	{	
		$data = array('data'=>$parameter);
		$arr = array('response' => 
array('method_name'=>$methodName,
		'response_msg'=>'failed','response_code' => 
400,'data'=>$parameter));
		echo json_encode($arr);
		return false;
	} 
}

// User exist check method

function checkUserExist($email='')
{	 
	$sql 		= mysql_query("SELECT * from users where email 
='".$email."'");
	$user_count = mysql_num_rows($sql);
	return $user_count;  
}
