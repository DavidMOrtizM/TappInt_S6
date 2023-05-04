<?php
require_once 'controladores/CategoriasControlador.php';
require_once 'controladores/NoticiasControlador.php';
require_once 'controladores/ContactoControlador.php';


class MenuControlador
{

    public function ruta($menu)
    {
        $categoriascontrolador = new CategoriasControlador();
        $noticiacontrolador = new NoticiasControlador();
        $contactocontrolador = new ContactoControlador();
        $crear_usuariocontrolador = new CrearUsuariocontrolador();

        switch ($menu) {
            case 'inicio':
                include 'vistas/inicio.php';
                break;
            case 'Nacionales':
                $categoriascontrolador->categoria('Nacionales');
                break;
            case 'Economicas':
                $categoriascontrolador->categoria('Economicas');
                break;
            case 'Deportivas':
                $categoriascontrolador->categoria('Deportivas');
                break;
            case 'noticia':
                $noticiacontrolador->Id();
                break;
            case 'contacto':
                $contactocontrolador->Contacto();
                break;
            case 'crear_usuario':
                    $crear_usuariocontrolador->crearUsuario();
                    break;
        }
    }
}
?>