
<div class="card">
    <div class="card-header">
        Agregar Empleados
    </div>
    <div class="card-body">
       <form action="" method="post">
            <div class="mb-3">
             <label for="nombre" class="form-label">ID Empleado</label>
             <input readonly type="text" class="form-control" value="<?php echo $empleado->id?>" name="id" id="id" aria-describedby="helpId" >
           </div>

           <div class="mb-3">
             <label for="nombre" class="form-label">Nombre</label>
             <input required type="text"class="form-control" value="<?php echo $empleado->nombre?>" name="nombre" id="nombre" aria-describedby="helpId" >
           </div>
           <div class="mb-3">
             <label for="email" class="form-label">Correo</label>
             <input required type="email" class="form-control" value="<?php echo $empleado->correo?>" name="correo" id="correo" aria-describedby="emailHelpId">
           </div>
           <input  class="btn btn-success" type="submit" value="Editar Empleado">
           <a class="btn btn-primary" href="?controlador=empleados&accion=inicio">Cancelar</a>
       </form>
    </div>
    
</div>