<?php
  $page_title = 'Sistema Simple de Inventario';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

<head>
    <link rel="stylesheet" href="/multitienda/view/css/bootstrap.min.css">
    <link rel="stylesheet" href="/multitienda/view/css/style.css">
	  <link rel="stylesheet" href="/multitienda/view/css/carousel.css">
</head>

<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>¡Bienvenido!</h1>
      </div>

      <!--=====================================
				BANNER
				======================================-->
	<div class=" banner container-fluid  bg-white d-none d-sm-none d-md-block">
	
  <div class="grid-container d-none d-lg-block">

    <!-- LOGO -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/multitienda/view/img/tienda16.jpeg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>TIENDA LA 3</h1>
          <p><a class="btn btn-lg btn-primary" href="/multitienda/view/paginas/tiendas.php">ver</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/multitienda/view/img/tienda15.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

      <div class="container">
        <div class="carousel-caption">
          <h1>TIENDA DON PACHO</h1>
          <p><a class="btn btn-lg btn-primary" href="/multitienda/view/paginas/tiendas.php">ver</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
     <img src="/multitienda/view/img/tienda19.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

      <div class="container">
        <div class="carousel-caption text-end">
          <h1>TIENDA LOS GEMELOS</h1>
          <p><a class="btn btn-lg btn-primary" href="/multitienda/view/paginas/tiendas.php">ver</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</div>

<script src="/multitienda/view/css/bootstrap.bundle.min.js"></script>

    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
