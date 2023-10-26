<?php  
$usu=$_POST['usu'];
$contra=$_POST['contra'];
if ($usu=="aldair"&&$contra=="12345") {
	header("Location:/proyecto2/sisadmin/index.php");

}
else { echo "las credenciales son falsas";
     header("Location:/proyecto2/valida.php");
}


?>