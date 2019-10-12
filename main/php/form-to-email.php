<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//validate
if(empty($name) || empty($visitor_email)){
    echo "Name and Email are mandatory!";
    exit;
}

$email_from = "NaserSalameh97@gmail.com";
$email_subject = "New Form Submission";
$email_body =
"You have received a message from the user $name. \n".
"email address: $visitor_email\n".
"Here is the message: \n $message".

$to = "NaserSalameh97@gmail.com";
$headers = "From: $email_from \r\n";

//send
mail($to, $email_subject,$email_body,$headers);}
else{
echo "error, you need to submit the form!";
}
?>