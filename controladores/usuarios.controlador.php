<?php

class UsuarioControlador
{

    public function ctrIngresoUsuario()
    {
        if (isset($_POST["ingUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {

                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];
                $respuesta = UsuarioModelo::MdlMostrarUsuarios($tabla, $item, $valor);

                if ($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]) {
                    $_SESSION["iniciarSesion"] = "ok";
                    echo "<script>window.location='inicio'</script>";
                } else {
                    echo "<div class='alert alert-danger'>Usuario o Contraseña Erronea</div>";
                }
            }
        }
    }

    public function ctrCrearUsuario()
    {
        if (isset($_POST["nuevoNombre"]) && isset($_POST["nuevoUsuario"]) && isset($_POST["nuevoPassword"])) {

            if (!preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"])) $this->nombreError();
            if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"])) $this->UsuarioError();
            if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])) $this->passwordError();

            $tabla = "usuarios";

            $datos = array(
                "nombre" => $_POST["nuevoNombre"],
                "usuario" => $_POST["nuevoUsuario"],
                "password" => $_POST["nuevoPassword"],
                "perfil" => $_POST["nuevoPerfil"]
            );

            $respuesta = UsuarioModelo::mdlCrearUsuario($tabla, $datos);

            if ($respuesta == "ok") {
                $this->creacionExitosa();
            } else {
                $this->creacionErronea();
            }
        }
    }

    public function nombreError()
    {
        echo
        "<script>
          swal({
            type: 'error',
            title: '¡El Nombre no puede ir vacio o llevar caracteres especiales!',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false 
          }).then((result)=>{
            if (result.value){
              window.location = 'usuarios';
              }
            })
        </script>";
    }

    public function usuarioError()
    {
        echo
        "<script>
          swal({
            type: 'error',
            title: '¡El usuario no puede ir vacio o llevar caracteres especiales!',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false 
          }).then((result)=>{
            if (result.value){
              window.location = 'usuarios';
              }
            })
        </script>";
    }

    public function passwordError()
    {
        echo
        "<script>
          swal({
            type: 'error',
            title: '¡La contraseña no puede ir vacia o llevar caracteres especiales!',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false 
          }).then((result)=>{
            if (result.value){
              window.location = 'usuarios';
              }
            })
        </script>";
    }

    public function creacionExitosa()
    {
        echo
        "<script>
          swal({
            type: 'success',
            title: '¡Usuario Creado!',
            text: 'Usuario Creado exitosamente',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false 
          }).then((result)=>{
            if (result.value){
              window.location = 'usuarios';
              }
            })
        </script>";
    }

    public function creacionErronea()
    {
        echo
        "<script>
          swal({
            type: 'error',
            title: '¡Hubo un error al guardar el usuario, intente mas tarde!',
            showConfirmButton: true,
            confirmButtonText: 'Cerrar',
            closeOnConfirm: false 
          }).then((result)=>{
            if (result.value){
              window.location = 'usuarios';
              }
            })
        </script>";
    }
}

