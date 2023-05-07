

  <!--este es el script para desplegar la sidebar y cerrarla lo copie y lo pege de un video xD-->
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  
  <link rel="stylesheet" href="style.css">
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-school bx-md'></i>
      <span class="logo_name">Sistema Chido</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-home'></i>
          <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-group'></i>
            <span class="link_name">Personas</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Personas</a></li>
          <li><a href="#">Docentes</a></li>
          <li><a href="#">Alumnos</a></li>
          <li><a href="#">Representantes</a></li>
          <li><a href="#">Todos</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-graduation' ></i>
          <span class="link_name">Cursos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Cursos</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-money' ></i>
            <span class="link_name">Cobros</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Cobros y Pagos</a></li>
          <li><a href="#">Mensualidades</a></li>
          <li><a href="#">Matrículas</a></li>
          <li><a href="#">Fidelizaciones</a></li>
          <li><a href="#">Pagos</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-bell'></i>
            <span class="link_name">Notificaciones</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Notificaciones</a></li>
          <li><a href="#">Cartera vencida</a></li>
          <li><a href="#">Cartera por vencer</a></li>
          <li><a href="#">Avisos a Estudiantes</a></li>
          <li><a href="#">Avisos a Docentes</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-error-alt' ></i>
          <span class="link_name">Informes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Informes</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-bar-chart-alt'></i>
          <span class="link_name">Reportes</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Reportes</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--Esta parte es la seccion en blanco  donde queria poner las tablas pero no me salió xD -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">SideBar</span>
    </div>
