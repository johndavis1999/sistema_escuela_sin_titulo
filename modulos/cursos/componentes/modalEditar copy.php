
<!--ventana para Update--->
<div class="modal fade" id="editChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Actualizar Información del curso
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="componentes/recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataCurso['id']; ?>">

            <div class="modal-body" id="cont_modal">
                <!--Llamar al label y selector de grado -->
                <div class="col-md-12 mt-2">
                    <label for="idgrado" class="form-label">Grado</label>
                    <select name="idgrado" require id="selGrado" class="form-control"> 
                      <option value="">----</option>
                      <?php
                          $sqlGrado   = ("SELECT * FROM grado ORDER BY id ASC ");
                          $queryGrado = mysqli_query($conexion, $sqlGrado);
                          while ($dataGrado = mysqli_fetch_array($queryGrado)) { 
                            if ($dataGrado['id'] == $dataCurso['idgrado']) {
                              echo "<opction value=' " . $dataGrado['id'] . "' selected>" . $dataGrado['nombre'] . "</option";
                            } else {
                              echo "<opction value=' " . $dataGrado['id'] . "'>" . $dataGrado['nombre'] . "</option";
                            }
                          } 
                        ?>
                    </select>
                </div>
                <!--Llamar al label y selector de paralelo -->
                <div class="col-md-12 mt-2">
                    <label for="idparalelo" class="form-label">Paralelo</label>
                    <select name="idparalelo" require id="selParalelo" class="form-control"> 
                      <option value="">----</option>
                      <?php
                          $sqlParalelo   = ("SELECT * FROM paralelo ORDER BY id DESC ");
                          $queryParalelo = mysqli_query($conexion, $sqlParalelo);
                          while ($dataCurso = mysqli_fetch_array($queryParalelo)) { ?>
                          <option value="<?php echo $dataCurso['id'] ?>">
                              <?php echo $dataCurso['nombre'] ?>
                          </option>
                      <?php } ?>
                  </select>
                </div>
                <!--Llamar al label y selector de docente -->
                <div class="col-md-12 mt-2">
                    <label for="iddocente" class="form-label">Docente</label>
                    <select name="iddocente" require id="selDocente" class="form-control"> 
                      <option value="">----</option>
                      <?php
                          $sqlDocente   = ("SELECT * FROM docente ORDER BY id DESC ");
                          $queryDocente = mysqli_query($conexion, $sqlDocente);
                          while ($dataCurso = mysqli_fetch_array($queryDocente)) { ?>
                          <option value="<?php echo $dataCurso['id'] ?>">
                              <?php echo $dataCurso['nombres'], ' ',$dataCurso['apellidos'] ?>
                          </option>
                      <?php } ?>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>
    </div>
  </div>
</div>
<!---fin ventana Update --->
