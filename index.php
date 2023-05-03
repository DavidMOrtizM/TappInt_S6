<!-- index_uno.php! -->
<?php

// Cargando los archivos de la aplicación
require_once 'modelos/NoticiasModelos.php';
require_once 'controladores/InicioControlador.php';
require_once 'controladores/CategoriasControlador.php';
require_once 'controladores/NoticiasControlador.php';
require_once 'controladores/MenuControlador.php';


//include 'vistas/inicio.php';
// Instanciando los controladores
$iniciocontrolador = new InicioControlador();
$noticiascontrolador = new NoticiasControlador();
$categoriascontrolador = new CategoriasControlador();
$menucontrolador = new MenuControlador();



// Obteniendo la acción solicitada
$action = $_GET['action'] ?? 'inicio';
$menucontrolador->ruta($action);


// Redirigiendo al controlador y acción correspondiente
//switch ($action) {
//    case 'inicio':
//        $iniciocontrolador->index();
//        break;
//    case 'categoria':
//        $categoriascontrolador->categoria($_GET['categoria']);
//        break;
//    case 'noticias':
//        $noticiascontrolador->index();
//        break;
//    case 'ver-noticia':
//        $noticiascontrolador->verNoticia($_GET['id']);
//        break;
//    default:
//        echo 'Página no encontrada';
//       break;
//}
?>