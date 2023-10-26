
<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
<h1 class="page-header">clientes </h1>
<div class="well well-sm text-right">
</div>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th style="width:180px;">Código del cliente</th>
            <th style="width:120px;">tipo de documento</th>
            <th style="width:120px;">Numero de documento</th>
            <th style="width:120px;">nombre</th>
            <th style="width:120px;">apellido</th>
            <th style="width:120px;">direccion</th>
            <th style="width:120px;">telefono</th>
            <th style="width:120px;">email</th>
            <th style="width:120px;">fecha de nacimiento</th>
            <th style="width:120px;">genero</th>
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
                <a href="?c=clientes&a=Crud&codclie=<?php echo $r->codclie; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=clientes&a=Eliminar&codclie=<?php echo $r->codclie; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
