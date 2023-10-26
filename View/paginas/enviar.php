<?php  

include ('conexion.php');
$conecta = conexion();
// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$identificacion = $_POST['identificacion'];
$telefono = $_POST['telefono'];

if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
   isset($_POST['apellido']) && !empty($_POST['apellido']) &&
   isset($_POST['correo']) && !empty($_POST['correo']) &&
   isset($_POST['identificacion']) && !empty($_POST['identificacion']) &&
   isset($_POST['telefono']) && !empty($_POST['telefono']) )
   {
    $nuevo_Registro="INSERT INTO registro (nombre,apellido,correo,identificacion,telefono) 
    VALUES ('".$nombre."','".$apellido."','".$correo."','".$identificacion."','".$telefono."')";
    
    mysqli_query($conecta,$nuevo_Registro) or die ("NO SE LOGRA INSERTAR REGISTRO");
	
	echo "REGISTRO EXITOSO";
    
   }else{
       echo "Error al enviar los datos";
   }


// Datos para el correo
$destinatario = "digimultistore@gmail.com";
$asunto = "Registro de usuario desde nuestra web";

$carta = "De: $nombre ";
$carta .= "$apellido \n";
$carta .= "Correo: $correo \n";
$carta .= "Identificacion: $identificacion \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:gracias-mensaje.html');

?>

