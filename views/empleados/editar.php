<div class="card">
   <div class="card-header">
      Editar empleado
   </div>
   <div class="card-body">
      <form action="" method="post">

         <div class="mb-3">
            <label for="" class="form-label">ID:</label>
            <input readonly type="text" class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id"
               aria-describedby="helpId" placeholder="ID empleado">
         </div>

         <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input required type="text" value="<?php echo $empleado->nombre; ?>" class="form-control" name="nombre"
               id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
         </div>

         <div class="mb-3">
            <label required for="correo" class="form-label">Correo:</label>
            <input type="email" value="<?php echo $empleado->correo; ?>" class="form-control" name="correo" id="correo"
               aria-describedby="emailHelpId" placeholder="Correo del empleado">
         </div>

         <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
         <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>
      </form>
   </div>
</div>