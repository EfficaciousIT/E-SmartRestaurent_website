<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$address= $_POST['address'];
$number= $_POST['number'];
$message= $_POST['message'];




$to = "mailto:info@efficacious.co.in";
$subject = "e-smartrestaurant Contact Form";
$txt ="Name = ". $name . "\r\n Email = " . $email ."\r\n  Address = " . $address . " \r\n   Phone Number = " . $number . " \r\n Message =" . $message;
$headers = "From: mailto:noreply@yoursite.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    print "<p>Success</p>";
}
else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }

?>