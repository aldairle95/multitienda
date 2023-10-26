<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<h1 class="page-header">
    Nuevo Registro
</h1>
<ol class="breadcrumb">
  <li><a href="?c=clientes">Clientes</a></li>
  <li class="active">Nuevo cliente</li>
</ol>
<form id="frm-proveedor" action="?c=clientes&a=Guardar" method="post" enctype="multipart/
form-data">
    <div class="form-group">
      <label>codigo</label>
      <input type="text" name="codclie" value="<?php echo $pvd->codclie; ?>" class="form-control" place-
holder="Ingrese Nit Proveedor" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>Tipo de documento</label>
        <input type="text" name="tdoclie" value="<?php echo $pvd->tdoclie; ?>" class="form-control" 
placeholder="Ingrese Razón Social" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Numero de documento</label>
        <input type="text" name="cedclie" value="<?php echo $pvd->cedclie; ?>" class="form-control" place-
holder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nomclie" value="<?php echo $pvd->nomclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="apeclie" value="<?php echo $pvd->apeclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="dirclie" value="<?php echo $pvd->dirclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telclie" value="<?php echo $pvd->telclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="emailclie" value="<?php echo $pvd->emailclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="text" name="fnaciclie" value="<?php echo $pvd->fnaciclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <div class="form-group">
        <label>Genero</label>
        <input type="text" name="genclie" value="<?php echo $pvd->genclie; ?>" class="form-control" place-
holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>
