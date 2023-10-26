<?php
$destinatario='digitalemprende076@gmail.com';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

$header="enviado desde la pagina de multitienda";
$mensajecompleto= $mensaje."\nAtentamente:".$nombre;

mail($destinatario,$asunto,$mensaje,$header);
echo "<script>alert('correo enviado exitosamnete')</script>";
echo "<script> setTimeout(\"location.href='index.php'\",1000)</script>";
?>