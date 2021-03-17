<!--Modal Agregar Usuario-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background: #3c8dbc; color: white;">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Usuario</h4>

        </div>

        <div class="modal-body">
          <div class="box-body">

            <!--Nombre-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" aria-label="Nuevo Nombre"
                       required>
              </div>
            </div>

            <!--Usuario-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario"
                       aria-label="Nuevo Usuario"
                       required>
              </div>
            </div>

            <!--Password-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña"
                       aria-label="Nuevo Password" required>
              </div>
            </div>

            <!--Perfil-->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <select class="form-control input-lg" name="nuevoPerfil" aria-label="nuevoPerfil">
                  <option value="">Seleccionar Perfil</option>
                  <option value="Administrador">Administrador</option>
                  <option value="Especial">Especial</option>
                  <option value="Vendedor">Vendedor</option>
                </select>
              </div>
            </div>

            <!--Foto-->
            <div class="form-group">
              <div class="panel">Subir Foto</div>
              <input type="file" id="nuevaFoto" name="nuevaFoto">
              <p class="help-block">Peso Máximo de la Foto: 5MB</p>
              <img src="vistas/img/usuarios/default/anonymous.png" alt="Foto Usuario" class="img-thumbnail" width="100px">
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </div>

          <?php
          $crearUsuario = new UsuarioControlador();
          $crearUsuario->ctrCrearUsuario();
          ?>

      </form>

    </div>

  </div>
</div>
