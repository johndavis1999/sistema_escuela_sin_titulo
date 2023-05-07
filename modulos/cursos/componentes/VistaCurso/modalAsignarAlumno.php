<div class="modal fade" id="asignateChildresnAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Seleccionar Alumno en el curso: <?php echo $idcurso?>
        
        </h6>
        <!-- Boton de cierre -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form name="form-data" action="asignarAlumno.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" id="cont_modal">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="idalumno" class="form-label">Alumno</label>
                        <select name="idalumno"  class="form-control" required>
                            <option value="">----</option>
                            <?php
                                $sqlAlumnos   = ("SELECT 
                                alumnos.nombres, 
                                alumnos.apellidos,
                                alumnos.id
                                FROM alumnos
                                ORDER BY alumnos.id DESC ");
                                $queryAlumnos = mysqli_query($conexion, $sqlAlumnos);
                                while ($dataAlumnos = mysqli_fetch_array($queryAlumnos)) { ?>
                                <option value="<?php echo $dataAlumnos['id'] ?>">
                                    <?php echo $dataAlumnos['nombres'], ' ',$dataAlumnos['apellidos'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>">
                </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            Asignar Alumno
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!---fin ventana registro --->