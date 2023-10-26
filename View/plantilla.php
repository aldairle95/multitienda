
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Multitienda</title>
	<link rel="icon" href="img/icono.jpg">

	<!--=====================================
	VÍNCULOS CSS
	======================================-->

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Hoja de estilo personalizada -->
  <link rel="stylesheet" href="/multitienda/View/css/nuevo.css">
	<link rel="stylesheet" href="/multitienda/View/css/carousel.css">
	<link rel="stylesheet" href="/multitienda/View/css/bootstrap.min.css">
	<link href="/multitienda/View/css/css.css" rel="stylesheet">
	<link href="/multitienda/View/css/css_003.css" rel="stylesheet">
	<link href="/multitienda/View/css/css_002.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/multitienda/View/css/A.css"> -->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .bg-red1 {
        background-color:#cc0000;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>
<body>
<div class="container-fluid p-0"> 
<!--=====================================
HEADER
======================================-->

<header class="container-fluid p-0 bg-white">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-red1">
    <div class="container-fluid">
      
      <div class="log d-none d-lg-block  d-md-block ">
        <div class="logo d-block d-sm-block">
		      <img src="/multitienda/View/img/logotipo.png">
			  </div>
		  </div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/multitienda/index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="View/paginas/tiendas.php">TIENDAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="View/paginas/nosotros.php">NOSOTROS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#piepagina">CONTACTOS</a>
          </li>
        </ul>

        <div class="d-flex d-none d-lg-block">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="fa fa-facebook" class="nav-link active" aria-current="page" href="https://www.facebook.com/Multitienda-100315098956350"></a>
            </li>
            <li class="nav-item">
              <a class="fa fa-whatsapp" class="nav-link active" aria-current="page" href="https://api.whatsapp.com/send?phone=0573208797813"></a>
            </li>
            <li class="nav-item">
              <a class="fa fa-google" class="nav-link active" aria-current="page" href="/multitienda/View/paginas/suscripcion.php"></a>
            </li>
            <li class="nav-item">
              <a class="fa fa-instagram" class="nav-link active" aria-current="page" href="https://www.instagram.com/multi_tiena_e/?hl=es"></a>
            </li>
          </ul>
        </div>

        <div class="d-flex1">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li>
              <a href="/multitienda/view/paginas/registro.php"><button type="button"  class="btn btn-light" >REGISTRO</button></a>
            </li>
            <li>
              <a href="/multitienda/sisadmin/index.php"><button type="button"  class="btn btn-light">ACCEDER</button></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
</header>

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
        <img src="/multitienda/View/img/tienda16.jpeg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>TIENDA LA 3</h1>
            <p><a class="btn btn-lg btn-primary" href="/multitienda/View/paginas/tiendas.php">ver</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/multitienda/View/img/tienda15.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption">
            <h1>TIENDA DON PACHO</h1>
            <p><a class="btn btn-lg btn-primary" href="/multitienda/View/paginas/tiendas.php">ver</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="/multitienda/View/img/tienda19.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>TIENDA LOS GEMELOS</h1>
            <p><a class="btn btn-lg btn-primary" href="/multitienda/View/paginas/tiendas.php">ver</a></p>
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

	<!--=====================================
				section1
				======================================-->
<section class=" articulos container-fluid p-0 bg-white">
	 <div class="album py-5 bg-light">
    <div class="container">
      <h1 class="text-center">LOS PRODUCTOS MAS VENDIDOS <span class="text-muted"></span></h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
             <img src="/multitienda/View/img/cf/azucar.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="570" height="800"  role="img" aria-label="Placeholder:multitienda" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">AZUCAR</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="/multitienda/View/img/cf/aceite.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="570" height="800"  role="img" aria-label="Placeholder:multitienda" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">ACEITE</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <img src="/multitienda/View/img/ot/advil.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="570" height="800"  role="img" aria-label="Placeholder:multitienda" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">ANALGESICOS</small>
              </div>
            </div>
          </div>
        </div>   
        </div>
      </div>
    </div>
	<div class="grid-container">
			<div class="grid-item">
				<h1>TIENDAS DE BARRIO </h1>
				<img src="/multitienda/View/img/trabajo1.png">
				<p>Aproximadamente el 65% de los alimentos que adquieren los colombianos aún se compran en tiendas de barrio. Las más de 500.000 que existen en todo el territorio nacional reafirman la fuerza y la importancia de este formato de tienda en Colombia. Veamos cómo la tienda de barrio se convierte en más que un simple comercio sino en un lugar agradable y cercano para los colombianos.</p>
				<div class="video">
					<iframe width="" height="" src="https://www.youtube.com/embed/ZgW0q3FNDSY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
				

			<div class="informa">
				
				
					<div class="info">
						<h1>QUIENES SOMOS</h1>
						<p> la aplicacion web tiene como objetivo, que las tiendas de barrio puedan promocionar sus productos a través de estantes virtuales, con la ubicación geográfica, publicidad  y se podrá utilizar en los sistemas operativos multiplataforma.
						</p>
					</div>	
							<div class="ubi">
								<h1>UBICACIÓN</h1>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.403941881606!2d-75.90049823616334!3d2.3888584721450243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ad2ac5e3b81b9%3A0xd8c3baaf8fdec314!2sLa%20Plata%2C%20Huila!5e0!3m2!1ses!2sco!4v1605894393119!5m2!1ses!2sco" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
				
			</div>
	</section>
	
  <footer>
    <div class="piepagina" id="piepagina">

      <div class="info1 ">
        <img src="/multitienda/view/img/unidad1.png">
      </div>

      <div class="info2">
        <h4>información de contacto</h4>
        <a >correo electronico: multi_tienda@gmail.com</a><br>
        <a >celular:3134556898</a><br>	
        <a >carrera 8 n° 6-23 la plata HUILA</a><br/>
        <br/>
      </div>

      <div class="info3">
        <div class="reds d-none d-lg-block">
          <h4>Siguenos en nuestras redes sociales</h4>
        </div>
      
        <div class="f">
          <a href="https://www.facebook.com/Multitienda-100315098956350" class="fa fa-facebook"></a>
          <a href="https://api.whatsapp.com/send?phone=0573208797813" class="fa fa-whatsapp"></a>
          <a href="https://www.instagram.com/multi_tiena_e/?hl=es" class="fa fa-instagram"></a>
        </div>
      </div>

    </div>
  </footer>

  <script src="/multitienda/View/css/bootstrap.bundle.min.js"></script>
</div>
</div>
</body>
</html>