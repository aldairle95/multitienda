<link rel="stylesheet" type="text/css" href="assets/css/style1.css">

<h1 class="page-header">
    Nuevo Registro
</h1>
<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>
<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/
form-data">
    <div class="form-group">
      <label>CODIGO DE PRODUCTO</label>
       <input type="number" name="codpro" value="<?php echo $prod->codpro; ?>" class="-
form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>CODIGO DE BARRAS</label>
        <input type="number" name="codbapro" value="<?php echo $prod->codbapro; ?>" class="form-control" place-
holder="Ingrese codigo de barras" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>NOMBRE DEL PRODUCTO</label>
        <input type="text" name="nompro" value="<?php echo $prod->nompro; ?>" class="form-control" place-
holder="Ingrese codigo de barras" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>DESCRIPCION</label>
        <input type="text" name="despro" value="<?php echo $prod->despro; ?>" class="form-con-
trol" placeholder="Ingrese precio unitario" data-validacion-tipo="requerido|min:20" />
    </div>
    <div class="form-group">
        <label>PRECIO UNIDAD</label>
        <input type="text" name="prepro" value="<?php echo $prod->prepro; ?>" class="form-con-
trol" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>FECHA DE ELABORACION</label>
        <input type="date" name="fecelapro" value="<?php echo $prod->fecelapro; ?>" class="form-con-
trol" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>FECHA DE VENCIMIENTO</label>
        <input type="date" name="fecvenpro" value="<?php echo $prod->fecvenpro; ?>" class="form-con-
trol" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
    </div>
    <div class="form-group">
        <label>IMAGEN</label>
        <input type="file" name="fotpro" value="<?php echo $prod->fotpro; ?>" class="form-con-
trol" placeholder="Ingrese descripción producto" data-validacion-tipo="requerido|min:240" />
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
