<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataMaterias['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar la materia ?
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo "Codigo: ", $dataMaterias['codigo'], ' / Nombre: ', $dataMaterias['nombre'], ' / Tutor: ', $dataMaterias['docentenombre'], ' ', $dataMaterias['docenteapellido']; ?>
        
          </strong>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger btnBorrar" data-dismiss="modal" id="<?php echo $dataMaterias['id']; ?>">Borrar</button>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->