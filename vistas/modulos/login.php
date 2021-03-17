<div id="back"></div>

<div class="login-box">

  <div class="login-logo">

    <img src="vistas/img/plantilla/logo-blanco-bloque.png" class="img-responsive" style="padding:30px 100px 0 100px" alt="Logo Blanco">

  </div>

  <div class="login-box-body">

    <h3 class="text-center margin-bottom">INGRESAR AL SISTEMA</h3>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" aria-label="usuario" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" aria-label="contraseña" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">
        <div class="col-xs-12 text-center">
          <button type="submit" class="btn btn-primary btn-block margin-bottom">Ingresar</button>
        </div>
      </div>

        <?php
        $login = new UsuarioControlador();
        $login->ctrIngresoUsuario();
        ?>

    </form>

  </div>

</div>
