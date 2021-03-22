<div class="content-wrapper">

  <section class="content-header">
    <h1>Usuarios <small>Panel de Usuarios</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Usuarios</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">
      <div class="box-header with-border border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>

      </div>
      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive text-center tablas" style="width: 100%">
          <thead class="bg-black">
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Foto</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Ultimo Login</th>
            <th>Acciones</th>
          </tr>
          </thead>

          <tbody>

          <?php

          $item = null;
          $valor = null;

          $usuarios = UsuarioControlador::ctrMostrarUsuarios($item, $valor);

          foreach ($usuarios as $key => $usuario) {
            echo "
              <tr>
                <td>" . ($key + 1) . "</td>
                <td>" . $usuario['nombre'] . "</td>
                <td>" . $usuario['usuario'] . "</td>";

            if ($usuario["foto"] != "") {
              echo '<td><img src="' . $usuario['foto'] . '" alt="imagen usuario" class="user-image" style="width: 40px"></td>';
            } else {
              echo '<td><img src="vistas/img/usuarios/default/anonymous.png" alt="imagen usuario" class="user-image"></td>';
            }

            echo "
                <td>" . $usuario['perfil'] . "</td>";

            if ($usuario["estado"] != 0) {
              echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="' . $usuario["id"] . '" estadoUsuario="0">Activado</button></td>';
            } else {
              echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="' . $usuario["id"] . '" estadoUsuario="1">Desactivado</button></td>';
            }
            echo "<td>" . $usuario['fecha'] . "</td>
                <td>
                    <div class='btn-group'>
                      <button class='btn btn-warning btnEditarUsuario' idUsuario= '" . $usuario["id"] . "' data-toggle='modal' data-target='#modalEditarUsuario'><i class='fa fa-pencil'></i></button>
                      <button class='btn btn-danger btnEliminarUsuario' idUsuario='" . $usuario["id"] . "' fotoUsuario='" . $usuario["foto"] . "' usuario='" . $usuario["usuario"] . "'><i class='fa fa-trash'></i></button>
                    </div>  
                  </td>
              </tr>";
          }
          ?>

          </tbody>
        </table>

      </div>

    </div>

  </section>
</div>

<?php

include "vistas/modales/usuario/agregarUsuario.modal.php";
include "vistas/modales/usuario/editarUsuario.modal.php";
