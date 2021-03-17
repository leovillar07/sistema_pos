<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Inventario | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="vistas/img/plantilla/icono-blanco.png">
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>

</head>

<body class="hold-transition login-page skin-blue sidebar-collapse sidebar-mini">

<?php if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") { ?>

  <div class="wrapper">

      <?php
      include "vistas/modulos/cabezote.php";
      include "vistas/modulos/menu.php";

      if (isset($_GET["ruta"])) {
          if (
              $_GET["ruta"] == "inicio" ||
              $_GET["ruta"] == "usuarios" ||
              $_GET["ruta"] == "categorias" ||
              $_GET["ruta"] == "productos" ||
              $_GET["ruta"] == "clientes" ||
              $_GET["ruta"] == "administrar-venta" ||
              $_GET["ruta"] == "crear-venta" ||
              $_GET["ruta"] == "reportes" ||
              $_GET["ruta"] == "salir"
          ) {
              include "modulos/" . $_GET["ruta"] . ".php";
          } else {
              include "modulos/404.php";
          }
      } else {
          include "modulos/inicio.php";
      }

      include "vistas/modulos/footer.php";
      ?>

  </div>

<?php } else {
    include "modulos/login.php";
} ?>

<script src="vistas/js/plantilla.js"></script>
</body>
</html>
