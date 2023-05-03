<?php
// controladores/NoticiasControlador.php

class NoticiasControlador {
    public function index() {
        // Cargando las noticias desde el archivo JSON
        $noticias_json = json_decode(file_get_contents('noticias.json'));
        $noticias = json_decode($noticias_json, true);
        // Cargando la vista de la página de noticias
        require_once 'vista/noticias.php';
    }

    public function verNoticia($id) {
        // Cargando la noticia específica desde el archivo JSON
        $noticias_json = json_decode(file_get_contents('noticias.json'));
        $noticias = json_decode($noticias_json, true);
        $noticia = null;
        foreach ($noticias as $n) {
            if ($n->id == $id) {
                $noticia = $n;
                break;
            }
        }
        // Cargando la vista de la página de la noticia
        require_once 'vista/noticia.php';
    }
}
?>