<h1 class="page-header" style="background:#1C77B3"><center>Cursos</center></h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?t=Cursos&i=Crud">Nuevo curso</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;"></th>

        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td>
                <a class="btn btn-success" href="?t=Cursos&i=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?t=Cursos&i=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<p align="right">
   <a class="btn btn-primary" href="menu.html">Volver</a> 
</p>
 





