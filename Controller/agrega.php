<?php 
include ('conecta.php');
$conecta=conecta ();
$codclie=$_POST["codclie"];
$tdoclie=$_POST["tdoclie"];
$cedclie=$_POST["cedclie"];
$nomclie=$_POST["nomclie"];
$apeclie=$_POST["apeclie"];
$dirclie=$_POST["dirclie"];
$telclie=$_POST["telclie"];
$emailclie=$_POST["emailclie"];
$fnaciclie=$_POST["fnaciclie"];
$genclie=$_POST["genclie"];

$sentencia="INSERT INTO clientes (codclie,tdoclie,cedclie,nomclie,apeclie,dirclie,telclie,emailclie,fnaciclie,genclie) VALUES ('".$codclie."','".$tdoclie."','".$cedclie."','".$nomclie."','".$apeclie."','".$dirclie."','".$telclie."','".$emailclie."','".$fnaciclie."','".$genclie."')";

mysqli_query($conecta,$sentencia) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conecta));
	
	echo "REGISTRO EXITOSO";

	header('location:'.getenv('HTTP_REFERER'));


?>
<!-- esta funcion recibe los datos insertados en cada campo del formulario de registro los compara y luego los valida. con la variable sentencia le decimos que los ingrese directamente a la tabla llamada productos y luego la funcion mysqli_query  con la variable conecta de estar bien definidad las variables de los campos y luego valida con el archivo externo que esta llamando llamada conecta.php  -->