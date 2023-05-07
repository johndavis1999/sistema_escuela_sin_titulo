<!-- Modal creacion de Alumno -->
<div class="modal fade" id="createChildresn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <!-- Contenedor del modal -->
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Encabezado del modal -->
      <div class="modal-header" style="!important;">
        <h6 class="modal-title" style="text-align: center;">
            Crear Alumno
        </h6>
        <!-- Boton de cierre -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="form-data" action="componentes/recibAlumnos.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body" id="cont_modal">
            <!-- Contenedor para los campos de entrada del formulario -->
            <div class="row">
                <!-- Campo nombres -->
                <div class="col-md-12">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres" pattern='[A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú]*$' required autofocus  >
                </div>
                <!-- Campos apellidos -->
                <div class="col-md-12">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" pattern='[A-Z a-z Ñ ñ á é í ó ú Á É Í Ó Ú]*$' required>
                </div>
                <!-- Selector de sexo extrayendo sexos registrados en base -->
                <div class="col-md-12">
                <label for="idsexo" class="form-label">Sexo</label>
                    <select name="idsexo"  class="form-control" required>
                        <option value="">----</option>
                        <?php 
                            //Llama archivo de conexion
                            include('../../../config/conexion.php');
                            //Crea query para obtener datos de la tabla sexo por id para posteriormente en los option llamar el nombre de cada id
                            $sqlSexo = ("SELECT * FROM sexo ORDER BY id ASC");
                            $querySexo = mysqli_query($conexion, $sqlSexo);
                            while($dataSexo = mysqli_fetch_array($querySexo)) { ?>
                        <option value="<?php echo $dataSexo['id'] ?>">
                            <?php echo $dataSexo['nombre'] ?>
                        </option>
                        <?php }?>
                    </select>
                </div>
                <!-- Campo es_extranjero -->
                <div class="col-md-12">
                    <label for="es_extranjero" class="form-label">Es extranjero: </label>
                    <input type="checkbox"  name="es_extranjero" value="1">
                </div>
                <!-- Campo identificacion -->
                <div class="col-md-12">
                    <label for="identificacion" class="form-label">Identificacion</label>
                    <!-- Se fuerza validacion con pattern para poder ingresar caracteres numericos del 0 al 9 y un rango de 10 y 13-->
                    <input type="text" class="form-control" name="identificacion" id="identificacion"  pattern = "[0-9]{10,13}"  required>
                </div>
                <!-- Script js para realizar la validacion correspondiente a cuando es extranjero -->
                <!-- Si se marca el check es_extranjero habilita una validacion correspondiente a pasaporte, los cuales pueden llevar numeros y letras -->
                <!-- En caso de no marcar el check permite ingresar caracteres numericos del 0 al 9 y un rango de 10 y 13 -->
                <script>
                function updateIdentificationInputValidation() {
                    // Obtener el estado del checkbox "es_extranjero"
                    const isForeigner = document.querySelector('input[name="es_extranjero"]').checked;

                    // Obtener el elemento input de identificación
                    const identificationInput = document.querySelector('input[name="identificacion"]');

                    if (isForeigner) {
                    // Si el checkbox está habilitado, establecer el patrón para aceptar números y letras
                    identificationInput.pattern = '^[A-Z a-z 0-9]*$';
                    } else {
                    // Si el checkbox no está habilitado, establecer el patrón para aceptar solo números
                    identificationInput.pattern = '[0-9]{10,13}';
                    }
                }
                // Ejecutar la función cuando se haga clic en el checkbox "es_extranjero"
                document.querySelector('input[name="es_extranjero"]').addEventListener('click', updateIdentificationInputValidation);
                </script>
                <!-- Campo direccion -->
                <div class="col-md-12">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" required>
                </div>
                <!-- Campo de fecha -->
                <div class="col-md-12">
                    <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" required>
                </div>
                <!-- Campo celular, incluye validacion patter que permite ingresar caracteres numericos del 0 al 9, 
                y tambien valida que la longitud minima y maxima, siendo la minima 5 para el caso de telefono convencional 
                que se puede registrar con 5 caracteres y para el caso de celulares o numeros que inluyan el codigo del pais 
                se permite ingresar hasta 13 digitos: ejemplo 5930961102453 -->
                <div class="col-md-12">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="celular" pattern = "[0-9]{5,13}" required>
                </div>
                <!-- Campo correo validado con input type mail -->
                <div class="col-md-12">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" required>
                </div>
                <!-- Selector de representante extrayendo representantes registrados en base -->
                <div class="col-md-12">
                <label for="idrepresentante" class="form-label">Representante</label>
                    <select name="idrepresentante"  class="form-control" required>
                        <option value="">----</option>
                        <?php 
                            //Llama archivo de conexion
                            include('../../../config/conexion.php');
                            //Crea query para obtener datos de la tabla sexo por id para posteriormente en los option llamar el nombre de cada id
                            $sqlRepresentante = ("SELECT * FROM representante ORDER BY id ASC");
                            $queryRepresentante = mysqli_query($conexion, $sqlRepresentante);
                            while($dataRepresentante = mysqli_fetch_array($queryRepresentante)) { 
                        ?>
                        <option value="<?php echo $dataRepresentante['id'] ?>">
                            <?php echo $dataRepresentante['nombres'], ' ', $dataRepresentante['apellidos'] ?>
                        </option>

                        <?php 
                            }
                        ?>
                    </select>
                </div>
                <!-- Selector de Curso extrayendo Curso registrados en base -->
                <div class="col-md-12">
                <label for="idcurso" class="form-label">Curso</label>
                    <select name="idcurso"  class="form-control" required>
                        <option value="">----</option>
                        <?php 
                            //Llama archivo de conexion
                            include('../../../config/conexion.php');
                            //Crea query para obtener datos de la tabla sexo por id para posteriormente en los option llamar el nombre de cada id
                            $sqlCurso = ("SELECT * FROM curso ORDER BY id ASC");
                            $queryCurso = mysqli_query($conexion, $sqlCurso);
                            while($dataCurso = mysqli_fetch_array($queryCurso)) { 
                        ?>
                        <option value="<?php echo $dataCurso['id'] ?>">
                            <?php echo $dataCurso['idgrado'], '/', $dataCurso['paralelo']?>
                        </option>
                        <?php }?>
                    </select>
                </div>
                </div>
                <div class="row justify-content-start text-center mt-5">
                    <!-- Boton de envio -->
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            Registrar Alumno
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
<!---fin ventana registro --->
