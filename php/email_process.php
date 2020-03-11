<?php
// ini_set("SMTP","localhost");
// ini_set("smtp_port",25);
// ini_set("sendmail_from","silvak165@gmail.com");
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
// phpinfo();

// $name = $_POST["name"];
// $email = $_POST["email"];
// $subject = $_POST["subject"];
// $message_email = $_POST["message"];

$name = "hehehe";
$email = "desarrollo@salamanca.gob.mx";
$subject = "ejemplo mensaje";
$message_email = "sdfjshfsf";

$emailTo = "garc1a.urib3@gmail.com";
$Subject = $subject;

////
$from = $email;
$to = $emailTo;
$subject = $Subject;
$message = $message_email;
$headers = "From:" . $from;
$email = mail($to,$subject,$message_email, $headers);
if ($email) {
  echo "El correo se ha enviado.";
}else {
  echo "No se pudo enviar el correo";
}


////
//
// // prepare email body text
// $Body .= "Name: ";
// $Body .= $name;
// $Body .= "\n";
//
// $Body .= "Email: ";
// $Body .= $email;
// $Body .= "\n";
//
// $Body .= "Message: ";
// $Body .= $message;
// $Body .= "\n";
//
// // send email
// $success = mail($EmailTo, $Subject, $Body, "From: ".$email);
//
// // redirect to success page
// if ($success){
//    echo "success";
// }else{
//     echo "invalid";
// }
//
// $correo = "garc1a.urib3@gmail.com";
// $correo2 = "silvak165@gmail.com";
// $asunto = "Envio e-mails";
// $cuerpo = "Por fin FUNCIONO!!!!";
// mail($correo,$asunto,$cuerpo, "FROM: ".$correo2);

?>
