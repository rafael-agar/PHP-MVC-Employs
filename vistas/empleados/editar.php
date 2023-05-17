<div class="card">
    <div class="card-header">
        Editar Empleado
    </div>
    <div class="card-body">

        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">ID:</label>
              <input readonly type="text"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado" value="<?php echo $empleado->id; ?>">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input required type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del Empleado" value="<?php echo $empleado->nombre; ?>">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo: </label>
              <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="abc@mail.com" value="<?php echo $empleado->correo; ?>">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
</div>