<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">  

  <title>tiendas1</title>

  <link rel="icon" href="img/icono.jpg">

  <!--=====================================
  VÍNCULOS CSS
  ======================================-->

 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  <!-- Hoja de estilo personalizada -->
  <link rel="stylesheet" href="/multitienda/view/css/tienda.css">
  <link rel="stylesheet" href="/multitienda/view/css/carousel.css">
  <link rel="stylesheet" href="/multitienda/view/css/bootstrap.min.css">
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
            <a class="nav-link " aria-current="page" href="#tiendas">TIENDAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/multitienda/View/paginas/nosotros.php">NOSOTROS</a>
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
            </li>
            <li>
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
        <img src="/proyecto2/view/img/tienda16.jpeg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>TIENDA LA 3</h1>
            <p><a class="btn btn-lg btn-primary" href="/multitienda/view/paginas/tiendas.php">ver</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/proyecto2/view/img/tienda15.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption">
            <h1>TIENDA DON PACHO</h1>
            <p><a class="btn btn-lg btn-primary" href="/multitienda/view/paginas/tiendas.php">ver</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="/proyecto2/view/img/tienda19.jpg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

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

  <!--=====================================
        section1
        ======================================-->
<section class=" articulos container-fluid p-0 bg-white" id="tiendas">
  
  <div class="grid-container">
      <div class="grid-item">
        <div class="tienda1">
          <h1>TIENDA LA 3 </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda1.png"></a>
          <p>"Tienda de barrio cra 1 con 2 b la plata Huila ,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/multitienda/view/paginas/productos.php">ver mas</a>
        </div>
         <div class="tienda2">
          <h1> TIENDA DON PACHO </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda2.png"></a>
          <p>"Tienda de barrio cra 7 con 4 b ,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/proyecto2/view/paginas/productos.php">ver mas</a>
        </div>
         <div class="tienda3">
          <h1>TIENDA LA ESQUINA </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda3.png"></a>
          <p>"la Tienda de barrio cra 5 con 2 b La plata Huila,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/multitienda/view/paginas/productos.php">ver mas</a>
        </div>
         <div class="tienda4">
          <h1>TIENDA LOS GEMELOS </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda4.png"></a>
          <p>"la Tienda de barrio cra 1 con 55 b La plata Huila,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/multitienda/view/paginas/productos.php">ver mas</a>
        </div>
        <div class="tienda4">
          <h1>TIENDA LOS GEMELOS </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda6.png"></a>
          <p>"la Tienda de barrio cra 10 con 5 b La plata Huila,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/multitienda/view/paginas/productos.php">ver mas</a>
        </div>
        <div class="tienda4">
          <h1>TIENDA LOS GEMELOS </h1>
          <a href="/multitienda/view/paginas/productos.php"><img src="/multitienda/view/img/tienda12.jpg"></a>
          <p>"la Tienda de barrio cra 11 con 4 b La plata Huila,te ofrece el mas completo surtido en viveres,rancho , productos de aseo y todo para la canasta familiar ,tienen variedad de productos a excelentes precios y con la mejor atencion. "</p><a href="/multitienda/view/paginas/productos.php">ver mas</a>
        </div>

        
      </div>
      </div>
      	<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">
        <div class="col">
        	<h1>NOVEDADES</h1>
          <div class="card shadow-sm">
            <div class="card-body">
              <p class="card-text">Aproximadamente el 65% de los alimentos que adquieren los colombianos aún se compran en tiendas de barrio,Veamos cómo la tienda de barrio se convierte en más que un simple comercio sino en un lugar agradable y cercano para los colombianos, esto reafirma la fuerza y la importancia de este formato de tienda en Colombia.
              En el territorio colombiano existen aproximadamente 500.000 tiendas de barrio, pero sobre la cifra no hay consenso porque muchas no están legalizadas. La mitad de los tenderos son mujeres, que en su mayoría son madres cabeza de familia y su edad promedio está por los 42 años.</p>
              <div class="d-flex justify-content-between align-items-center">  
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        	<h1>UBICACION</h1>
          <div class="card shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15945.403941881606!2d-75.90049823616334!3d2.3888584721450243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3ad2ac5e3b81b9%3A0xd8c3baaf8fdec314!2sLa%20Plata%2C%20Huila!5e0!3m2!1ses!2sco!4v1605894393119!5m2!1ses!2sco" width="100%" height="332" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
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
  <script src="/multitienda/view/css/bootstrap.bundle.min.js"></script>
</div>
</div>
</body>
</html>