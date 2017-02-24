<?php

require_once("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

//print_r($mail);  
 

if($_POST)
	{
	$mail->IsSMTP();
	$mail->Host = "localhost"; // Burada mail için kullandığınız sunucu adını yazmalısınız. Genellikle mail.alanadi.com şeklindedir.
	$mail->SMTPAuth = true;
	$mail->Username = "info@infowayindia.in"; // Alan adınıza ait eposta hesabınızı yazınız Örn. info@alanadi.com
	$mail->Password = "info@123!"; // Bu eposta hesabınıza ait şifreniz
	$mail->From = "info@infowayindia.in";  // Epostanızın gönderileceği adres. Yukarıdaki eposta adresi ile aynı olmalıdır.
	$mail->FromName = 'Admin'; // Bu alanı değiştirmeyiniz.
	$mail->Port = 25;



	$name =  isset($_POST['name'])?$_POST['name']:'User';
	$email = $_POST['email'];
	$phone = '8103154545'; 
	$message = 'This is test mail';  
	$toemail = $email; // Your Email Address
	$toname = 'LLoveFootball'; // Your Name


	$mail->SetFrom('Kundan Roy' , 'info@llovefootball.com');
	$mail->AddReplyTo( $email , $name );
	$mail->AddAddress( $toemail , $toname );
	$mail->Subject = $message; 

	 
	$body = '<form id="form1" name="form1" method="post" action="">
				<table width="200" border="1">
				  <tr>
				    <td style="color:green">Name</td>
				    <td style="color:green">kundan</td>
				  </tr>
				  <tr>
				    <td>'.$name.'</td>
				    <td>'.$email.'</td>
				  </tr>
				</table> 
			</form>';

	$mail->MsgHTML( $body );
	$sendEmail = $mail->Send();



	if( $sendEmail == true)
	{
		echo  "Email sent successfully !";
	}else{
		echo "Email not sent";
	}
}
?>

<form id="form1" name="form1" method="post" action="">
<table width="187" border="1">
  <tr>
    <td width="4">&nbsp; </td>
    <td width="167"><label>Name
        <input type="text" name="name" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>Email
        <input type="text" name="email" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label> 
        <input type="submit" name="Submit" value="Submit" />
    </label></td>
  </tr>
   
</table>

</form>