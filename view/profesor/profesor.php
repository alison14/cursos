<h1 class="page-header" style="background:#1C77B3"><center>Profesores</center></h1>

<div class="well well-sm text-right">
    <a  class="btn btn-primary" href="?d=Profesor&e=Crud">Nuevo Profesor</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th style="width:120px;">Sexo</th>
            <th style="width:150px;">Licenciatura</th>
            <th style="width:120px;">Nacimiento</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->Nombre; ?></td>
                <td><?php echo $r->Apellido; ?></td>
                <td><?php echo $r->Correo; ?></td>
                <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
                <td><?php echo $r->Licenciatura; ?></td>
                <td><?php echo $r->FechaNacimiento; ?></td>
                <td>
                    <a class="btn btn-success" href="?d=Profesor&e=Crud&id=<?php echo $r->id; ?>">Editar</a>
                </td>
                <td>
                    <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?d=Profesor&e=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                </td>


            </tr>
        <?php endforeach; ?>
    </tbody>

</table> 

<p align="right">
   <a class="btn btn-primary" href="menu.html">Volver</a> 
</p>


