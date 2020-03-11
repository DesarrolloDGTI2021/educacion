<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$nombre=$_POST['nombre'];
$correo_destino = "desarrollo@salamanca.gob.mx";
// $correo_destino = "educacion@salamanca.gob.mx";
$correo_origen =$_POST['correo_origen'];
$asunto    = "NUEVO CORREO DE LA PAGINA DE DIRECCION DE EDUCACION";
$asunto_mensaje = $_POST['asunto'];;
$mensaje_usuario   = $_POST['mensaje'];
// $mensaje = " De: ".$nombre."\n"."Correo: ".$correo_origen. PHP_EOL"\r\r\n"."Mensaje: ".$mensaje_usuario;
$mensaje = '
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Fillon soutient à fond le retour d\'un Grand Prix de France</title>
</head>
<body>
<p><span><h3 style="text-align:center;">NUEVO CORREO DE LA PAGINA DE DIRECCION DE EDUCACION</h3></span><br><span style="font-weight:bold;">De:&nbsp; </span>'.$nombre.'<br>
<span style="font-weight:bold;">Correo:</span>&nbsp; '.$correo_origen.' <br>
<span style="font-weight:bold;">Asunto:</span>&nbsp; '.$asunto_mensaje.' <br><br> <span style="font-weight:bold;">Mensaje:</span> '.$mensaje_usuario.'</p>
   </body>
</html>
';
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: '.$correo_origen.'' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$enviar = mail($correo_destino, $asunto, $mensaje, $cabeceras);
// // var_dump($enviar);
// if ($enviar) {
//   echo "mensaje enviado";
// }
// else {
//   echo "mensaje no enviado";
// }
?>
