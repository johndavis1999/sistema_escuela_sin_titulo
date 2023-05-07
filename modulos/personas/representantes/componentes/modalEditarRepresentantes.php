<!-- Modal para editar la información de un Representante-->
<div class="modal fade" id="editChildresn<?php echo $dataRepresentante['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
          Actualizar Información del Representante
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulario para editar la información del Representante -->
      <!-- Al ehacer submit ejecuta script de recib_Update-->
      <form method="POST" action="componentes/recibUpdateRepresentantes.php">
        <!-- Campo oculto para enviar el ID del Representante -->
        <input type="hidden" name="id" value="<?php echo $dataRepresentante['id']; ?>">
        <!-- Cuerpo del modal -->
        <div class="modal-body" id="cont_modal">
          <!-- Campo para los nombres del Representante -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres del Representante:</label>
            <input type="text" name="nombres" class="form-control" value="<?php echo $dataRepresentante['nombres']; ?>" required="true" pattern='[A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú]*$' autofocus>
          </div> 
          <!-- Campo para los apellidos del Representante -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellidos del Representante:</label>
            <input type="text" name="apellidos" class="form-control" value="<?php echo $dataRepresentante['apellidos']; ?>" required="true" pattern='[A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú]*$'>
          </div> 
          <!--Llamar al label y selector de sexo -->
          <div class="col-md-12 mt-2">
            <label for="idsexo" class="form-label">Sexo</label>
            <select name="idsexo" required class="form-control"> 
              <option value="">----</option>
              <?php
                $sql = "SELECT * FROM sexo";
                $result = mysqli_query($conexion, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                  // Si el valor de la fila coincide con el valor del campo "sexo" del registro del Representante, seleccionar la opción
                  if ($row['id'] == $dataRepresentante['idsexo']) {
                      echo "<option value='" . $row['id'] . "' selected>" . $row['nombre'] . "</option>";
                  } else {
                      echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                  }
                }
              ?>
            </select>
          </div>
          <!-- Llama campo es_extranjero -->
          <div class="col-md-12">
            <label for="es_extranjero" class="form-label">Es extranjero: </label>
            <input type="checkbox" name="es_extranjero" id="es_extranjero" value="1" <?php echo $dataRepresentante['es_extranjero'] == 1 ? 'checked' : ''; ?>>
          </div>
          <!-- Llamar campo identificacion -->
          <!-- Deuda tecnica FALTA VALIDAR CARACTERES - 
          NO SE PUDO REPLICAR VALIDACION DE PANTALLA DE REGISTRO -->
          <div class="col-md-12">
              <label for="identificacion" class="form-label">Identificacion</label>
              <!-- Se fuerza validacion con pattern para poder ingresar caracteres numericos del 0 al 9 y un rango de 10 y 13-->
              <input type="text" class="form-control" name="identificacion" id="identificacion" value="<?php echo $dataRepresentante['identificacion']; ?>" required>
          </div>
          <!-- Campo direccion -->
          <div class="col-md-12">
              <label for="direccion" class="form-label">Direccion</label>
              <input type="text" class="form-control" name="direccion" value="<?php echo $dataRepresentante['direccion']; ?>" required>
          </div>
          <!-- Campo de fecha -->
          <div class="col-md-12">
              <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $dataRepresentante['fecha_nacimiento']; ?>" required>
          </div>
          <!-- Campo de celular -->
          <div class="col-md-12">
              <label for="celular" class="form-label">Celular</label>
              <input type="text" class="form-control" name="celular" value="<?php echo $dataRepresentante['celular']; ?>" required>
          </div>
          <!-- Campo correo validado con input type mail -->
          <div class="col-md-12">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" name="correo" value="<?php echo $dataRepresentante['correo']; ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <!--Cerrar modal -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <!--Guardar cambios -->
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
       </form>
    </div>
  </div>
</div>
<!---fin ventana Update --->
