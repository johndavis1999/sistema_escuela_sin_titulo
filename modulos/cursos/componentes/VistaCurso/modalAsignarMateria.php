<div class="modal fade" id="asignateChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Seleccionar Materia en el curso: <?php echo $idcurso?>
        
        </h6>
        <!-- Boton de cierre -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form name="form-data" action="asignarMateria.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" id="cont_modal">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="idmateria" class="form-label">Materia</label>
                        <select name="idmateria"  class="form-control" required>
                            <option value="">----</option>
                            <?php
                                $sqlMateria   = ("SELECT 
                                materias.codigo, 
                                materias.nombre, 
                                docente.nombres, 
                                docente.apellidos,
                                materias.id
                                FROM materias
                                left join docente on materias.iddocente=docente.id
                                ORDER BY materias.id DESC ");
                                $queryMateria = mysqli_query($conexion, $sqlMateria);
                                while ($dataMateria = mysqli_fetch_array($queryMateria)) { ?>
                                <option value="<?php echo $dataMateria['id'] ?>">
                                    <?php echo $dataMateria['codigo'], ' / ',$dataMateria['nombre'], ' / ',$dataMateria['nombres'], ' ',$dataMateria['apellidos'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>">
                </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            Asignar Materia
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!---fin ventana registro --->