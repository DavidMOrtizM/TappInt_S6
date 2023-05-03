<?php
require_once 'controladores/CategoriasControlador.php';


class MenuControlador
{

    public function ruta($menu)
    {
        $categoriascontrolador = new CategoriasControlador();

        switch ($menu) {
            case 'inicio':
                
//                header('Location: index.php?action=inicio');
                include 'vistas/inicio.php';
//               include 'vistas/inicio.php';
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
        }
    }
}
?>