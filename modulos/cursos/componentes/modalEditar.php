<!-- Modal para editar la información de un Curso-->
<div class="modal fade" id="editChildresn<?php echo $dataCurso['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
          Actualizar Información del Curso
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Formulario para editar la información del curso -->
      <!-- Al ehacer submit ejecuta script de recib_Update-->
      <form method="POST" action="componentes/recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCurso['id']; ?>">
        <!-- Cuerpo del modal -->
        <div class="modal-body" id="cont_modal">
          <!--Llamar al label y selector de Grado -->
          <div class="col-md-12 mt-2">
            <label for="idgrado" class="form-label">Grado</label>
            <select name="idgrado" required class="form-control"> 
              <option value="">----</option>
              <?php
                $sqlGrado = "SELECT * FROM grado";
                $queryGrado = mysqli_query($conexion, $sqlGrado);
                while ($dataGrado = mysqli_fetch_assoc($queryGrado)) {
                  // Si el valor de la fila coincide con el valor del campo "Grado" del registro del curso, seleccionar la opción
                  if ($dataGrado['id'] == $dataCurso['idgrado']) {
                      echo "<option value='" . $dataGrado['id'] . "' selected>" . $dataGrado['nombre'] . "</option>";
                  } else {
                      echo "<option value='" . $dataGrado['id'] . "'>" . $dataGrado['nombre'] . "</option>";
                  }
                }
              ?>
            </select>
          </div>
          <!--Llamar al label y selector de Paralelo -->
          <div class="col-md-12 mt-2">
            <label for="idparalelo" class="form-label">Paralelo</label>
            <select name="idparalelo" required class="form-control"> 
              <option value="">----</option>
              <?php
                $sqlParalelo = "SELECT * FROM paralelo";
                $queryParalelo = mysqli_query($conexion, $sqlParalelo);
                while ($dataParalelo = mysqli_fetch_assoc($queryParalelo)) {
                  // Si el valor de la fila coincide con el valor del campo "Paralelo" del registro del curso, seleccionar la opción
                  if ($dataParalelo['id'] == $dataCurso['idparalelo']) {
                      echo "<option value='" . $dataParalelo['id'] . "' selected>" . $dataParalelo['nombre'] . "</option>";
                  } else {
                      echo "<option value='" . $dataParalelo['id'] . "'>" . $dataParalelo['nombre'] . "</option>";
                  }
                }
              ?>
            </select>
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
                  // Si el valor de la fila coincide con el valor del campo "Docente" del registro del curso, seleccionar la opción
                  if ($dataDocente['id'] == $dataCurso['iddocente']) {
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
