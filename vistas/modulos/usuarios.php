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

          <tr>
            <td>1</td>
            <td>Leonardo Villar</td>
            <td>leorvr</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" alt="Foto usuario" class="img-thumbnail"
                     style="width: 30px;"></td>
            <td>Administrador</td>
            <td>
              <button class="btn btn-success btn-xs">Habilitado</button>
            </td>
            <td>15-03-2021</td>
            <td class="text-center btn-group">
              <button class="btn btn-sm btn-warning" style="width: 40px;"><i class="fa fa-edit"></i></button>
              <button class="btn btn-sm btn-danger" style="width: 40px;"><i class=" fa fa-trash
              "></i></button>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td>Alisson Martinez</td>
            <td>ali19</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" alt="Foto usuario" class="img-thumbnail"
                     style="width: 30px;"></td>
            <td>Docente</td>
            <td>
              <button class="btn btn-success btn-xs">Habilitado</button>
            </td>
            <td>16-03-2021</td>
            <td class="text-center btn-group">
              <button class="btn btn-sm btn-warning" style="width: 40px;"><i class="fa fa-edit"></i></button>
              <button class="btn btn-sm btn-danger" style="width: 40px;"><i class=" fa fa-trash
              "></i></button>
            </td>
          </tr>

          </tbody>
        </table>

      </div>

      <div class="box-footer">
        Footer
      </div>

    </div>

  </section>
</div>


<?php

include "vistas/modales/usuario/agregarUsuario.modal.php";
