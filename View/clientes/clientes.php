<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<h1 class="page-header">clientes</h1>
<div class="well well-sm text-right">
    <a class="btn btn-warning" href="?c=clientes&a=Nuevo">Nuevo cliente</a>
    
</div>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th style="width:180px;">Codigo</th>
            <th style="width:120px;">Tipo de documento</th>
            <th style="width:120px;">Numero</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Apellidos</th>
            <th style="width:120px;">Direccion</th>
            <th style="width:120px;">N° celular</th>
            <th style="width:120px;">Correo</th>
            <th style="width:120px;">Fecha de Nacimiento</th>
            <th style="width:120px;">Genero</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->codclie; ?></td>
            <td><?php echo $r->tdoclie; ?></td>
            <td><?php echo $r->cedclie; ?></td>
            <td><?php echo $r->nomclie; ?></td>
            <td><?php echo $r->apeclie; ?></td>
            <td><?php echo $r->dirclie; ?></td>
            <td><?php echo $r->telclie; ?></td>
            <td><?php echo $r->emailclie; ?></td>
            <td><?php echo $r->fnaciclie; ?></td>
            <td><?php echo $r->genclie; ?></td>
            <td>
                <a href="?c=clientes&a=Crud&nit=<?php echo $r->codclie; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm(‘¿Seguro de eliminar este registro?’);" href="?c=clientes&a=Eliminar&nit=<?php echo $r->codclie; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
