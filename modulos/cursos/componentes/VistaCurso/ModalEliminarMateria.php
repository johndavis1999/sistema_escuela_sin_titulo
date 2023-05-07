<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataListaMaterias['lista_materias_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar la materia asigada al curso ?
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            
            <p><?php echo "Codigo de materia: ", $dataListaMaterias['codigo']?></p>
            <p><?php echo "Nombre de materia: ", $dataListaMaterias['nombre']?></p>
            <p><?php echo "Docente: ", $dataListaMaterias['nombres'], " ", $dataListaMaterias['apellidos']?></p>
            
          </strong>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger btnBorrarMateria" data-dismiss="modal" id="<?php echo $dataListaMaterias['lista_materias_id']; ?>">Borrar</button>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->