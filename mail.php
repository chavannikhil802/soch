<?php
<?php 
error_log();
if(isset($_POST['name']) && isset($_POST['email'])){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$mailHeading = 'SochSolutions Contact Form';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Soch Solutions <info@sochsolutions.com>' . PHP_EOL .
'Reply-To: Soch Solutions <info@sochsolutions.com>' . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$to = 'chavannikhil802@gmail.com'; 

$messageSent = '<div>Name: '.$name .'</div>
                <div>Email Address: '.$email.' </div>
                <div>Contact Number: '.$contact.'</div>
                <div>Mail Subject : '.$subject.'</div>
                <div>Message : <br/> '.$message.'</div>';

if( $name != '' || $message != '' || $email != ''){
    mail($to,$subject,$messageSent,$headers);
    echo 'Email sent Successfully....';
} 
?>