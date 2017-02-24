<?php 
class apiClass{

    public function do_login($post){

      //  $sql	=	"SELECT * FROM delivery_boy WHERE username ='".$post['username']."' AND password = '".md5($post['password'])."'";
      $sql = "select * from users where email = '".$post['username']."'  AND password= '".$post['password']."'";
       //echo $sql;  
        $res	=	mysql_query($sql);
        $rowno	=	mysql_num_rows($res);

        if($rowno > 0){
            $row    = mysql_fetch_array($res);
            $status	=	array(  'status'	=>	true,
            'msg'           =>	'login successfully',
            'data'      =>      array(
                                'id'    =>   $row['id'],
                                'name'    =>   $row['name'],
                                 'email'    =>   $row['email'],
                                'phone'    =>   $row['phone'],
                                "address" => $row['address']
                                
                            )
            );
            echo json_encode($status);
        }
        else {
            $status	=	array('status'	=>	false,'msg'	=> 'Unable to verify your account, Please enter correct username and password');
            echo json_encode($status);
        }
    } // end of do_login

}


?>
