<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<link rel="stylesheet" type="text/css" href="\multitienda\sisadmin\libs\css\for.css">
<div id="contenedor">
    <div class="login-page">
        <div class="text-center">
       <h1>Bienvenido</h1>
       <p>Iniciar sesión </p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usario">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Contraseña</label>
            <input type="password" name= "password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
               <a> <button type="submit" class="btn btn-banner  pull-right">Entrar</button><a/>
                
        </div>
    </form>
    </div>
</div>
<?php include_once('layouts/footer.php'); ?>
