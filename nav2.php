<style>
    :root {
        --fondo-form: #AAAAAA;
        --dark: #000000;
        --white: white;
        --xl: 40px;
        --lg: 24px;
        --md: 20px;
        --sm: 15px;
    }
    .navbar {
        background-color: var(--fondo-form);
        color: red;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav list">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Nombre escuela</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link por definir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Nombre De usuario</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Opciones</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>