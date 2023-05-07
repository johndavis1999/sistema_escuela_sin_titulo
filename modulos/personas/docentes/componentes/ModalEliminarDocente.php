<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataDocente['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <!-- Contenedor del modal -->
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!-- Encabezado del modal -->
        <div class="modal-header">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar el docente ?
            </h4>
        </div>
        <!-- Cuerpo del modal -->
        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo $dataDocente['nombres'], ' ', $dataDocente['apellidos']; ?>
          </strong>
        </div>
        <!-- Pie del modal -->
        <div class="modal-footer">
          <!-- Botón para cerrar el modal -->
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <!-- Botón para eliminar el docente -->
          <button type="submit" class="btn btn-danger btnBorrar" data-dismiss="modal" id="<?php echo $dataDocente['id']; ?>">Borrar</button>
        </div>
      </div>
    </div>
</div>
<!---fin ventana eliminar--->