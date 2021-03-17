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
}
