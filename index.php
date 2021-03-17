<?php

require_once "controladores/plantilla.Controlador.php";

require_once "controladores/categorias.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/ventas.controlador.php";

require_once "modelos/categoria.modelo.php";
require_once "modelos/cliente.modelo.php";
require_once "modelos/producto.modelo.php";
require_once "modelos/usuarioModelo.modelo.php";
require_once "modelos/venta.modelo.php";

$plantilla = new PlantillaControlador();
$plantilla->ctrPlantilla();
