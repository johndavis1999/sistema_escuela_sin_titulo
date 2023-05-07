<!-- Modal para editar la información de un materia-->
<div class="modal fade" id="editChildresn<?php echo $dataMaterias['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
          Actualizar Información de la Materia
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulario para editar la información del materia -->
      <!-- Al ehacer submit ejecuta script de recib_Update-->
      <form method="POST" action="componentes/recib_UpdateMaterias.php">
        <input type="hidden" name="id" value="<?php echo $dataMaterias['id']; ?>">
        <!-- Cuerpo del modal -->
        <div class="modal-body" id="cont_modal">
          <!--Llamar al label y selector de Grado -->
          <div class="col-md-12 mt-2">
            <label for="codigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="codigo" value="<?php echo $dataMaterias['codigo']; ?>" pattern='[ A-Z a-z 0-9 Ñ ñ á é í ó ú Á É Í Ó Ú  - -]*$' autofocus required onkeyup="this.value = this.value.toUpperCase();">
          </div>
          <!--Llamar al label y selector de Paralelo -->
          <div class="col-md-12 mt-2">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $dataMaterias['nombre']; ?>" pattern='[0-9 A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú  - -]*$' required onkeyup="this.value = this.value.toUpperCase();">
          </div>
          <!--Llamar al label y selector de Docente -->
          <div class="col-md-12 mt-2">
            <label for="iddocente" class="form-label">Docente</label>
            <select name="iddocente" required class="form-control"> 
              <option value="">----</option>
              <?php
                $sqlDocente = "SELECT * FROM docente";
                $queryDocente = mysqli_query($conexion, $sqlDocente);
                while ($dataDocente = mysqli_fetch_assoc($queryDocente)) {
                  // Si el valor de la fila coincide con el valor del campo "Docente" del registro del materia, seleccionar la opción
                  if ($dataDocente['id'] == $dataMaterias['iddocente']) {
                      echo "<option value='" . $dataDocente['id'] . "' selected>" . $dataDocente['nombres'] . ' ' . $dataDocente['apellidos'] . "</option>";
                  } else {
                      echo "<option value='" . $dataDocente['id'] . "'>" . $dataDocente['nombres'] . ' ' . $dataDocente['apellidos'] . "</option>";
                  }
                }
              ?>
            </select>
          </div>
          <!--fin form -->
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
