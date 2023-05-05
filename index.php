<!-- index_uno.php! -->
<?php

// Cargando los archivos de la aplicación
require_once 'modelos/NoticiasModelos.php';
require_once 'controladores/CategoriasControlador.php';
require_once 'controladores/NoticiasControlador.php';
require_once 'controladores/MenuControlador.php';
require_once 'controladores/FormularioControlador.php';
require_once 'controladores/UsuarioControlador.php';

//include 'vistas/inicio.php';
// Instanciando los controladores
$noticiascontrolador = new NoticiasControlador();
$categoriascontrolador = new CategoriasControlador();
$menucontrolador = new MenuControlador();
$formulariocontrolador = new FormularioControlador();
$UsuarioControlador = new UsuarioControlador();


// Obteniendo la acción solicitada
$action = $_GET['action'] ?? 'inicio';
$menucontrolador->ruta($action);
$formulario = key($_POST);
$formulariocontrolador->form($formulario);


?>