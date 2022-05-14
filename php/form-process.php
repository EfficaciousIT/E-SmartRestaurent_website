<html>

<body>

<?php



$errorMSG = "";

$email = "";

$name = "";

$number = "";

$address = "";





$message = "";



// NAME

if (empty($_POST["name"])) {

    $errorMSG = "Name is required ";

} else {

    $name = $_POST["name"];

}



// NUMBER

if (empty($_POST["number"])) {

    $errorMSG = "Number is required ";

} else {

    $number = $_POST["number"];

}



// ADDRESS

if (empty($_POST["address"])) {

    $errorMSG .= "Address is required ";

} else {

    $address = $_POST["address"];

}



// EMAIL

if (empty($_POST["email"])) {

    $errorMSG .= "Email is required ";

} else {

    $email = $_POST["email"];

}





// MESSAGE

if (empty($_POST["message"])) {

    $errorMSG .= "Message is required ";

} else {

    $message = $_POST["message"];

}





$EmailTo = "shubham.efficacious@gmail.com";

$Subject = "New Message Received";



// prepare email body text

$Body = "";

$Body .= "Name: ";

$Body .= $name;

$Body .= "\n";

$Body .= "Number: ";

$Body .= $number;

$Body .= "\n";

$Body .= "Email: ";

$Body .= $email;

// $Body .= "\n";

// $Body .= "guest: ";

// $Body .= $guest;

// $Body .= "\n";

// $Body .= "event: ";

// $Body .= $event;

$Body .= "\n";

$Body .= "Message: ";

$Body .= $message;

$Body .= "\n";



// // send email

$success = mail($EmailTo, $Subject, $Body, "From:".$email);



// // redirect to success page

if ($success && $errorMSG == ""){

   echo "success";

   echo '<script type="text/JavaScript"> 

     prompt("GeeksForGeeks");

     </script>';

}

else{

    if($errorMSG == ""){

        echo "Something went wrong :(

";

        echo '<script type="text/JavaScript"> 

     prompt("GeeksForGeeks");

     </script>';

    }

    else {

        echo $errorMSG;

    }

}



    $to = "shubham.efficacious@gmail.com";

    $from = $_REQUEST['email'];

    $name = $_REQUEST['name'];

    $address = $_REQUEST['address'];

    $number = $_REQUEST['number'];

    $cmessage = $_REQUEST['message'];



    $headers = "From: $from";

	$headers = "From: " . $from . "\r\n";

	$headers .= "Reply-To: ". $from . "\r\n";

	$headers .= "MIME-Version: 1.0\r\n";

	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



    $subject = "You have a message from $name.";



    $logo = 'images/LOGO_1.png';

    $link = 'http://e-smartrestaurant.com/';



	
	$body .= "<table style='width: 100%;'>";

	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";

	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";

	$body .= "</td></tr></thead><tbody><tr>";

	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";

	$body .= "<td style='border:none;'><strong>Mobile Number:</strong> {$number}</td>";

	$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";

	$body .= "<td style='border:none;'><strong>Address:</strong> {$address}</td>";

	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";

	$body .= "</tr>";

	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";

	$body .= "<tr><td></td></tr>";

	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";

	$body .= "</tbody></table>";




    $send = mail($to, $subject, $body, $headers);



    // send return thank you mail



    $rto = $_REQUEST['email'];

    $rfrom = "shubham.efficacious@gmail.com";

    $rname = "E-smart Restaurant";

    $rcmessage = "Greetings from team Efficacious!



	Thank you for showing interest in our product and someone from our team will connect with you shortly to understand the requirement and provide solution accordingly.";



    $rheaders = "From: $from";

	$rheaders = "From: " . $from . "\r\n";

	$rheaders .= "Reply-To: ". $from . "\r\n";

	$rheaders .= "MIME-Version: 1.0\r\n";

	$rheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



    $rsubject = "Thank you for contact us, E-smart Restaurant !!";



    $rlogo = 'images/LOGO_1.png';

    $rlink = 'http://e-smartrestaurant.com/';



   
	$rbody .= "<table style='width: 100%;'>";

	$rbody .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";

	$rbody .= "<a href='{$rlink}'><img src='{$rlogo}' alt=''></a><br><br>";

	$rbody .= "</td></tr></thead><tbody><tr>";

	$rbody .= "<td style='border:none;'><strong>Name:</strong> {$rname}</td>";

	$rbody .= "</tr>";

	$rbody .= "<tr><td style='border:none;'><strong>Subject:</strong> {$rcsubject}</td></tr>";

	$rbody .= "<tr><td></td></tr>";

	$rbody .= "<tr><td colspan='2' style='border:none;'>{$rcmessage}</td></tr>";

	$rbody .= "</tbody></table>";




    $sendRetaurnMail = mail($rto, $rsubject, $rbody, $rheaders);



?>

</body>

</html>