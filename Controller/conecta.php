<?php
function conecta ()
{
	$db_host="localhost";
	//
	$db_user="root";
	//
	$db_pass="";
	//
	$db_name="multitienda";

	$conectar= mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	if (mysqli_connect_error()) 
	{
		echo "NO SE LOGRA CONECTAR A LA BASE DE DATOS:".mysqli_connect_error();
		# code...
	}

	else{
		echo "";
	}
	return $conectar;

}


?>
<!-- este archivo valida el permiso para conectar la base de datos con el  el servidor, el usuario, y la contarseña de estar bien los datos retorna la informacion de lo contrario dara error.  -->