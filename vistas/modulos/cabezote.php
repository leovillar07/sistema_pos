<header class="main-header">

  <!--Logotipo-->
  <a href="" class="logo">
    <span class="logo-mini">
      <img src="vistas/img/plantilla/icono-blanco.png" alt="Icono Blanco" class="img-responsive" style="padding: 10px;">
    </span>
    <span class="logo-lg">
      <img src="vistas/img/plantilla/logo-blanco-lineal.png" alt="Logo Blanco" class="img-responsive" style="padding: 10px 0;">
    </span>
  </a>

  <!--Barra de Navegacón-->
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle Navigation</span>
    </a>

    <!--Perfil de Usuario-->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">

          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <?php
              if ($_SESSION["foto"] != "") {
                  echo '<img src="'. $_SESSION['foto'] . '" alt="imagen usuario" class="user-image">';
              } else {
                  echo '<img src="vistas/img/usuarios/default/anonymous.png" alt="imagen usuario" class="user-image">';
              }

              ?>


            <span class="hidden-xs"> <?php echo $_SESSION["nombre"]; ?></span>
          </a>

          <ul class="dropdown-menu">
            <li class="user-body">
              <div class="pull-right">
                <a href="salir" class="btn btn-default btn-flat">Salir</a>
              </div>
            </li>
          </ul>

        </li>
      </ul>
    </div>

    <!--Dropdown Toggle-->


  </nav>

</header>
