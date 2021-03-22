<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarioModelo.modelo.php";

class UsuariosAjax
{
    public $idUsuario;

    public function ajaxEditarUsuario()
    {
        $item = "id";
        $valor = $this->idUsuario;

        $respuesta = UsuarioControlador::ctrMostrarUsuarios($item, $valor);
        echo json_encode($respuesta);
    }

    public $activarUsuario;
    public $activarId;


    public function ajaxActivarUsuario()
    {

        $tabla = "usuarios";

        $item1 = "estado";
        $valor1 = $this->activarUsuario;

        $item2 = "id";
        $valor2 = $this->activarId;

        UsuarioModelo::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

    }
}


if (isset($_POST["idUsuario"])) {
    $editar = new UsuariosAjax();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();
}

if (isset($_POST["activarUsuario"])) {

    $activarUsuario = new UsuariosAjax();
    $activarUsuario->activarUsuario = $_POST["activarUsuario"];
    $activarUsuario->activarId = $_POST["activarId"];
    $activarUsuario->ajaxActivarUsuario();

}
