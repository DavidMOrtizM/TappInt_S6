<?php
require_once 'modelos/NoticiasModelos.php';
class FormularioControlador
{

    public function form($formulario)
    {
        if ($formulario == "Agregar_Noticia") {
            $noticiacontrolador = new NoticiasModelos();
            $categoria = $_POST['categoria'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $noticiacontrolador->Crear_Noticia($categoria, $titulo, $texto);

        }


    }
}

?>