<?php

header('Content-Type: text/html; charset=UTF-8');
iconv('ISO-8859-1','UTF-8//TRANSLIT','cádéñá cón tíldés');
iconv('UTF-8','ISO-8859-1//TRANSLIT','cádéñá cón tíldés');
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
// require 'PHPMailerAutoload.php';
require 'vendor/autoload.php';
$mail = new PHPMailer;
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
// $mail->Host = "smtp.gmail.com";
$mail->Host = "mocha3030.mochahost.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPSecure = 'tls';
//use SMTP authentication
$mail->SMTPAuth = true;
//SMTP port
// $mail->Port = 587;
$mail->Port = 465;

// $name = $_POST["name"]; //nombre_usuario
// $email = $_POST["email"]; //correo_usuario
// $subject = $_POST["subject"]; //subject
// $message_email = $_POST["message"]; //mensaje

$correo_usuario = "contacto@salamancamunicipio.com";
$email_usuario = "contacto@salamancamunicipio.com";
// $correo_usuario = "xxxxxxxxxx";
$contrasena = ".SalamanC4.";
// $contrasena = "xxxxxxxxxx";

$nombre_usuario = "Usuario pagina Direccion de Educación";
$destinatario = "desarrollo@salamanca.gob.mx"; //correo de direccion de educacion
$nombre_destinatario = "Direccion de Educación";
// $nombre_destinatario1 = html_entity_decode($nombre_destinatario, ENT_QUOTES | ENT_HTML401, "UTF-8");
// $nombre_usuario1 = html_entity_decode($nombre_usuario, ENT_QUOTES | ENT_HTML401, "UTF-8");
$subject = 'Nuevo Correo pagina Direccion de Educación';
// $subject1 = html_entity_decode($subject, ENT_QUOTES | ENT_HTML401, "UTF-8");
$mensaje = ' De: '.$nombre_usuario.'<br> Correo: '.$email_usuario. ' <br> Ejemplo de mensaje';

//Provide username and password
$mail->Username = $correo_usuario;
$mail->Password = $contrasena;

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);
var_dump($mail);
$mail->From = $email_usuario; // correo del usuario que envia el correo, no de quien se usa para la autenticacion
$mail->FromName = $nombre_usuario;
/* Set the mail sender. */
// $mail->setFrom($correo_usuario, $nombre_usuario);
/* Add a recipient. */
// $mail->addAddress('palpatine@empire.com', 'Emperor');
$mail->addAddress($destinatario, $nombre_destinatario);
$mail->Subject = $subject;
$mail->msgHTML($mensaje);  // $message is gotten from the form
// htmlentities($mail);
if (!$mail->send()) {
    echo "Lamentamos mucho informarle que su mensaje no pudo ser enviado, intente de nuevo por favor.". $mail->ErrorInfo;
//     "We are extremely sorry to inform you that your message
// could not be delivered,please try again."
}else {
  echo "Su mensaje fue enviado correctamente, gracias por contactarnos." ;
    // echo "Your message was successfully delivered,you would be contacted shortly.". $mail->ErrorInfo;
      }

?>
