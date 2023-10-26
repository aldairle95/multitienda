
<html> 
<body> 
<html>
<head>
<title>BUSCAR UN REGISTRO O PRODUCTO EN LA BASE DE DATOS POR CODIGO</title>
</head>
<body>
<br>
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
include ('conecta.php');
$conecta=conecta();
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
</body>
</html>
