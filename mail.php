<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comment'];
$to = "ayo.haropis@haropisglobal.com.ng";
$subject = "New Mail From haropisglobal website";
$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@haropisglobal.com.ng" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
    ?>