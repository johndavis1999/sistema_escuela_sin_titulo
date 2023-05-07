<!-- Modal creacion de Materia -->
<div class="modal fade" id="createChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Crear Materia
        </h6>
        <!-- Boton de cierre -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form name="form-data" action="componentes/recibMaterias.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body" id="cont_modal">
                <div class="row">
                    <div class="col-md-12 mt-2">
                        <label for="codigo" class="form-label">Codigo (max 6 caracteres):</label>
                        <input type="text" class="form-control" name="codigo" pattern='[0-9 A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú - -]{6}' autofocus required onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="nombre" class="form-label">Nombre (max 20 caracteres):</label>
                        <input type="text" class="form-control" name="nombre" pattern='[0-9 A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú - -]*$' autofocus required onkeyup="this.value = this.value.toUpperCase();">
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
                            Registrar Materia
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!---fin ventana registro --->