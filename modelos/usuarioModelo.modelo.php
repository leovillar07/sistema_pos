<?php

require_once "modelos/conexion.php";


class UsuarioModelo
{

    static public function MdlMostrarUsuarios($tabla, $item, $valor)
    {
        $stmt = Conexion::conectar()->prepare("select * from $tabla where $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function mdlCrearUsuario($tabla, $datos)
    {


        $stmt = Conexion::conectar()->prepare("insert into $tabla (nombre, usuario, password, perfil) values (:nombre, :usuario, :password, :perfil)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

    }
}
