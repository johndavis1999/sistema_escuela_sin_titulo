<!-- Modal creacion de curso -->
<div class="modal fade" id="createChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Crear Curso
        </h6>
        <!-- Boton de cierre -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form name="form-data" action="componentes/recibCurso.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" id="cont_modal">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="idgrado" class="form-label">Grado</label>
                        <select name="idgrado"  class="form-control" required>
                            <option value="">----</option>
                            <?php
                                $sqlGrado   = ("SELECT * FROM grado ORDER BY id DESC ");
                                $queryGrado = mysqli_query($conexion, $sqlGrado);
                                while ($dataGrado = mysqli_fetch_array($queryGrado)) { ?>
                                <option value="<?php echo $dataGrado['id'] ?>">
                                    <?php echo $dataGrado['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="idparalelo" class="form-label">Paralelo</label>
                        <select name="idparalelo"  class="form-control" required>
                            <option value="">----</option>
                            <?php
                                $sqlParalelo   = ("SELECT * FROM paralelo ORDER BY id DESC ");
                                $queryParalelo = mysqli_query($conexion, $sqlParalelo);
                                while ($dataParalelo = mysqli_fetch_array($queryParalelo)) { ?>
                                <option value="<?php echo $dataParalelo['id'] ?>">
                                    <?php echo $dataParalelo['nombre'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="iddocente" class="form-label">Docente</label>
                        <select name="iddocente"  class="form-control" required>
                            <option value="">----</option>
                            <?php
                                $sqlDocente   = ("SELECT * FROM docente ORDER BY id DESC ");
                                $queryDocente = mysqli_query($conexion, $sqlDocente);
                                while ($dataDocente = mysqli_fetch_array($queryDocente)) { ?>
                                <option value="<?php echo $dataDocente['id'] ?>">
                                    <?php echo $dataDocente['nombres'], ' ',$dataDocente['apellidos'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            Registrar Curso
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!---fin ventana registro --->