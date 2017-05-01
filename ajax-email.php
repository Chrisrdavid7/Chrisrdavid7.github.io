<?php

/* SETTINGS */
$yourEmail = "chrisdavid@encorejets.com";
$emailSubject = "New Message from Contact Form";

if($_POST){

  /* DATA FROM HTML FORM */
  $tripType = $_POST['tripType'];
  $depart = $_POST['depart'];
  $arrive = $_POST['arrive'];
  $numberOfPassenger = $_POST['#numberOfPassenger'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $emailSubject = $emailSubject . " by " . $name;

  $headers = "From: $name <$email>\r\n" .
             "Reply-To: $name <$email>\r\n" . 
             "Subject: $emailSubject\r\n" .
             "Content-type: text/plain; charset=UTF-8\r\n" .
             "MIME-Version: 1.0\r\n" . 
             "X-Mailer: PHP/" . phpversion() . "\r\n";
 
  /* PREVENT EMAIL INJECTION */
  if ( preg_match("/[\r\n]/", $name) || preg_match("/[\r\n]/", $email) ) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die("500 Internal Server Error");
  }

  /* SEND EMAIL */
  mail($yourEmail, $emailSubject, $message, $tripType, $depart, $arrive, $numberOfPassenger, $phone, $headers);
}
?>

