
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<h1 class="page-header">Productos </h1>
<div class="well well-sm text-right">
</div>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th style="width:180px;">Código Producto</th>
            <th style="width:120px;">codigo de barras</th>
            <th style="width:120px;">Nombre Producto</th>
            <th style="width:120px;">descripcion</th>
            <th style="width:120px;">precio unidad</th>
            <th style="width:120px;">fecha de elaboracion</th>
            <th style="width:120px;">fecha de vencimiento</th>
            <th style="width:120px;">imagen</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->codpro; ?></td>
            <td><?php echo $r->codbapro; ?></td>
            <td><?php echo $r->nompro; ?></td>
            <td><?php echo $r->despro; ?></td>
            <td><?php echo $r->prepro; ?></td>
             <td><?php echo $r->fecelapro; ?></td>
              <td><?php echo $r->fecvenpro; ?></td>
               <td><?php echo $r->fotpro; ?></td>
            <td>
                <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=pro
ducto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
