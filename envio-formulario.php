<?php
$nombre_usuario=$_POST['nombre'];
$correo_usuario=$_POST['correo'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="lujy64@gmail.com";

$asunto="Consulta enviada desde www.marialujanvaira.com";

$mensaje="Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Email es: ".$correo_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: $correo_usuario";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL LOTES.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>