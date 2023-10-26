<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/proyecto2/view/css\for.css">
	<title>FORMULARIO DE REGISTRO</title>
</head>
<div id="contenedor">
<body>
<form action="agrega.php" method="POST">
	<section class="form-register">
		<h2>FORMULARIO DE REGISTRO<br>MULTITIENDA </h2>
		 <input class="controls" type="int" name="codclie" placeholder="codigo de  cliente">
		 <select name="tdoclie" class="controls" placeholder="TIPO DE DOCUMENTO">
			<option value="cc">CC</option>
		    <option value="ti">TI</option>
		    <option value="rc">RC</option>
		    <option value="pas">PAS</option>
		</select>
		<input class="controls" type="tex" name="cedclie" placeholder="ingrese numero de documento">
		<input class="controls" type="tex" name="nomclie"  placeholder="ingrese sus nombres">
		<input class="controls" type="tex" name="apeclie"  placeholder="ingrese sus apellidos">
		<input class="controls" type="tex" name="dirclie"  placeholder="ingrese su direccion">
		<input class="controls" type="tex" name="telclie"  placeholder="n° telefono">
		<input class="controls" type="email" name="emailclie" id="correo" placeholder="ingrese su correo">
		<input class="controls" type="date" name="fnaciclie"  placeholder="fecha de nacimiento">
	   <select name="genclie" class="controls" placeholder="genero">
		    <option value="masculino">MASCULINO</option>
		    <option value="femenino">FEMENINO</option>
		</select>
			
		<p><a href="#"> estoy de acuerdo con terminos y condiciones</a></p>
		<p><a href="#">¿ya tengo cuenta?</a></p><br>
		<a href="/proyecto2/index.php"></a>
		<input type="submit" class="controls" value="enviar"/>
		<a href="/proyecto2/controller/consulta.php">consulta</a>
	</section>			
</form>

</div>
</body>
</html>