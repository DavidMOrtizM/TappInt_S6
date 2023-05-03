<?php
// controladores/NoticiasControlador.php

class NoticiasControlador
{
    public function index()
    {
        // Cargando las noticias desde el archivo JSON
//        $noticias_json = json_decode(file_get_contents('noticias.json'));
//        $noticias = json_decode($noticias_json, true);
        // Cargando la vista de la página de noticias
//        require_once 'vista/noticias.php';
    }

    public function Id()
    {

        require_once 'vistas/noticia.php';
    }
}
?>