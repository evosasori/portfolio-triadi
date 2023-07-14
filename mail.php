<?php
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$to = "blackiik594@gmail.com";
$subject = "Mail From coba cade";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@C:/Users/DILA/Desktop/portfolio-bootdtrap5/mail.html" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("C:/Users/DILA/Desktop/portfolio-bootdtrap5/index.html");
?>