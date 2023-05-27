<?php
//get data from form  
$name = $_POST['name'];
$number = $_POST['number'];
$email= $_POST['email'];
$address = $_POST['address'];
$message= $_POST['message'];
$to = "bmheinig@gmail.com";
$subject = "Quote From website";
$txt ="Name = ". $name . "\r\n Number = " . $number . "\r\n  Email = " . $email . "\r\n Address = " . $address . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
//redirect
header("Location:thankyou.html");
?>