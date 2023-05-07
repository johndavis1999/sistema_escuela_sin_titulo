<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataListaAlumnos['lista_alumnos_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="text-align: center">
            <h4 class="modal-title">
                ¿Realmente deseas eliminar al Alumno asigado al curso?
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            
            <p><?php echo "Alumno: ", $dataListaAlumnos['nombresAlumno'], " ", $dataListaAlumnos['apellidosAlumno'];?></p>
          </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger btnBorrarAlumno" data-dismiss="modal" id="<?php echo $dataListaAlumnos['lista_alumnos_id']; ?>">Borrar</button>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->