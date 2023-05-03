<?php
// controladores/InicioControlador.php

class InicioControlador {
    public function index() {
        // Cargando la vista de la página de inicio
//		$noticias = json_decode(file_get_contents('noticias.json'), true);

  //      $noticiasModelo = new NoticiasModelos();
   //     $resultado = $noticiasModelo->getAll();
     //   $noticias = $resultado['noticias'];
   //     $primeras_noticias = $resultado['primeras_noticias'];
   //     $noticias_por_categoria = $resultado['noticias_por_categoria'];
        
        include 'vistas/inicio.php';



        require_once 'vistas/inicio.php';
    }
}

?>