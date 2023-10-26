<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsitro</title>
    <link rel="stylesheet" href="/multitienda/View/css/bootstrap1.min.css">
    <link rel="stylesheet" href="/multitienda/View/css/style1.css">
    
</head>
<body>
<div class="container-fluid-4">
  <div class="row">
      <div class="col-lg-9">
          <section id="bg-color" class="section-padding" >
                <div class="container-fluid-datos">
                    <p>
                        <h4><b>Registro a Multitienda<b>
                            <div class="section-line">
                              <hr class="botm-line">
                            </div>
                        </h4>                        
                    </p>             
                </div>
            </section>
            <section id="bg-color" class="section-padding" >
                <div class="col-md-12 col-sm-12 col-lg-12">
                  <div class="col-md-12 col-sm-12 col-lg-12" style="padding-left:0px;">
                    
                    <div id="errormessage"></div>
                    <div class="contact-info">
                      <form action="enviar.php" method="post" role="form" class="contactForm">
                        <div class="form-group">
                          <input type="text" class="form-control" id="names" name="nombre"  placeholder="Nombre(s)" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" maxlength="15" minlength="4" required />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="lastname" name="apellido" placeholder="Apellido(s)" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" maxlength="20" minlength="4" required />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" id="email" name="correo" placeholder="Correo Electronico" data-rule="email" data-msg="Por favor introduzca una dirección de correo electrónico válida" required />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="identification" name="identificacion" placeholder="Numero de Identificación" data-rule="minlen:4" data-msg="Por favor ingrese al menos 10 caracteres" maxlength="15" minlength="6"/>
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="phone" name="telefono" placeholder="Celular / Telefono" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres" maxlength="12" minlength="10" required />
                          <div class="validation"></div>
                        </div>
                        <button type="submit" class="btn btn-banner" target="_blank">Enviar</button>
                        <button class="btn btn-banner" ><a href="/multitienda/">Regresar a Inicio</a></button>
                      </form>
                    </div>
                  </div>
                </div>
            </section>
      </div>
      <div class="col-lg-3">
        <br>
        <img src="/multitienda/view/img/tienda15.jpg" class="img-responsive content ">
      </div>
  </div>
  </div>
</body>
</html>