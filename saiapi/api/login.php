<?php 
       include '../includes/conf.php';
       include '../class/api_class.php';

        $cmnApiobj	=	new apiClass();

        $data = file_get_contents("php://input");
        $inputs =   json_decode($data);

        $post['username']   =   $inputs->username;
        $post['password']   =   $inputs->password;
        
        $cmnApiobj->do_login($post);
        //print_r($inputs);
?>