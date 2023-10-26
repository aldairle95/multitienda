<link rel="stylesheet" type="text/css" href="assets/css/style1.css">

<h1 class="page-header">
    Nuevo Registro
</h1>
<ol class="breadcrumb">
  <li><a href="?c=clientes">clientes</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
<form id="frm-producto" action="?c=clientes&a=Guardar" method="post" enctype="multipart/
form-data">
    <div class="form-group">
      <label>CODIGO DE CLIENTE</label>
       <input type="number" name="codclie" value="<?php echo $clie->codclie; ?>" class="-
form-control" placeholder="Ingrese Código cliente" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>TIPO DE DOCUMENTO</label>
        <input type="text" name="tdoclie" value="<?php echo $clie->tdoclie; ?>" class="form-control" place-
holder="Ingrese tipo de documento" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>NUMERO DE DOCUMENTO</label>
 <input type="text" name="cedclie" value="<?php echo $clie->cedclie; ?>" class="-
form-control" placeholder="Ingrese nombre de documento" data-validacion-tipo="requerido|min:100" 
/>
    </div>
    <div class="form-group">
        <label>NOMBRES</label>
        <input type="text" name="nomclie" value="<?php echo $clie->nomclie; ?>" class="form-con-
trol" placeholder="Ingrese el nombre" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>APELLIDOS</label>
        <input type="text" name="apeclie" value="<?php echo $clie->apeclie; ?>" class="form-con-
trol" placeholder="Ingrese los apellidos" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>DIRECCION</label>
        <input type="text" name="dirclie" value="<?php echo $clie->dirclie; ?>" class="form-con-
trol" placeholder="Ingrese la direccion" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>TELEFONO</label>
        <input type="text" name="telclie" value="<?php echo $clie->telclie; ?>" class="form-con-
trol" placeholder="Ingrese los apellidos" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>EMAIL</label>
        <input type="text" name="emailclie" value="<?php echo $clie->emailclie; ?>" class="form-con-
trol" placeholder="Ingrese el email" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>FECHA DE NACIMIENTO</label>
        <input type="date" name="fnaciclie" value="<?php echo $clie->fnaciclie; ?>" class="form-con-
trol" placeholder="Ingrese la fecha" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>GENERO</label>
        <input type="text" name="genclie" value="<?php echo $clie->genclie; ?>" class="form-con-
trol" placeholder="Ingrese el genero" data-validacion-tipo="requerido|min:240" />
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
