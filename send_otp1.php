<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$email=$_SESSION['customer_login_user'];
$res=mysqli_query($conn,"select * from custlogin where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
    $otp=rand(11111,99999);
    mysqli_query($conn,"update custlogin set otp='$otp' where email ='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['customer_login_user'];
    smtp_mailer($email,'OTP Verification',$html); 
    echo "yes";
}
else{
    echo "not exist";
}
 
function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'SSL'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "rishishivhare244@gmail.com";    //Your SendGrid Username
    $mail->Password = "syhkxtrlyhdxqpjo"; //Your Sendgrid API KEY
    $mail->SetFrom("rishishivhare244@gmail.com");  //Your Registered Mail from Sendgrid
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
?>