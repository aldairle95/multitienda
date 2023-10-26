<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include ('conecta.php');
$conecta=conecta();
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conecta, $sql);
$row = mysqli_fetch_object($result);
?>
<form action="" method="POST">
	<input type="text" value="<?php echo $row->cedclie;?>" name="cedclie">
	<input type="text" value="<?php echo $row->nomclie;?>" name="nomclie">
	<input type="submit" name="submit">
</form>
<table border="1" >
<tr>
<td>codigo</td>
<td>tipo de documento</td>
<td>numero</td>
<td>nombre </td>
<td>apellido</td>
<td>direccion</td>
<td>telefono</td>
<td>email</td>
<td>fecha de nacimiento</td>
<td>genero</td>


</tr>
<?php 
$sql="SELECT * from clientes";
$result=mysqli_query($conecta,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo "".$mostrar['codclie']; ?></td>	
<td><?php echo "".$mostrar['tdoclie']; ?></td>
<td><?php echo "".$mostrar['cedclie']; ?></td>
<td><?php echo "".$mostrar['nomclie']; ?></td>
<td><?php echo "".$mostrar['apeclie'];?></td>
<td><?php echo "".$mostrar['dirclie'];?></td>
<td><?php echo "".$mostrar['telclie'];?></td>
<td><?php echo "".$mostrar['emailclie'];?></td>
<td><?php echo "".$mostrar['fnaciclie'];?></td>
<td><?php echo "".$mostrar['genclie'];?></td>


</tr>
<?php 
}
 ?>
 <a href="/proyecto2/controller/editar.php">editar</a>
</table>
<?php
	
	if(isset($_POST['submit'])){
		$tdoclie=$_POST["tdoclie"];
		$cedclie=$_POST["cedclie"];
		$nomclie=$_POST["nomclie"];
		$apeclie=$_POST["apeclie"];
		$dirclie=$_POST["dirclie"];
		$telclie=$_POST["telclie"];
		$emailclie=$_POST["emailclie"];
		$fnaciclie=$_POST["fnaciclie"];
		$genclie=$_POST["genclie"];
		$tbl = "clientes";
		$inserta="UPDATE $tbl SET nompro= '".$nombre."', despro='".$descripcion."' WHERE idpro='".$id."' ";
		mysqli_query($conecta,$inserta) or die ("NO SE LOGRA INSERTAR REGISTRO". mysqli_error($conecta));
		echo "REGISTRO ACTUALIZADO CON EXITO";
		header("Location: index.html");

	}
?>
</div>
</body>
</html>
<!-- la instruccion que me permite modificar los datos es $inserta="UPDATE $tbl SET nompro= '".$nombre."', despro='".$descripcion."' WHERE idpro='".$id."' "; la cual recibe los datos insertados desde las variables nombre y descripcion insertados en la interfaz buscar.php -->