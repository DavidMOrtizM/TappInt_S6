<?php
require_once 'modelos/NoticiasModelos.php';
require_once 'modelos/ClaseComentario.php';
class FormularioControlador
{

    public function form($formulario)
    {
        if ($formulario == "Agregar_Noticia") {
            $noticiamodelo = new NoticiasModelos();
            $categoria = $_POST['categoria'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $noticiamodelo->Crear_Noticia($categoria, $titulo, $texto);

        }

        if ($formulario == "Agregar_Comentario") {
            $comentario = new Comentario();
            $nombre = $_POST['name'];
            $correo = $_POST['email'];
            $asunto = $_POST['subject'];
            $mensaje = $_POST['message'];
            $comentario->Crear_Comentario($nombre, $correo, $asunto, $mensaje);
        }




    }
}

?>