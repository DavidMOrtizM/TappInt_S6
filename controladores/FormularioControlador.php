<?php
require_once 'modelos/NoticiasModelos.php';
require_once 'modelos/ClaseComentario.php';
require_once 'modelos/ClaseUsuario.php';
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
            
            $mensaje = $_POST['message'];
            $usuario = $_POST['usuario'];
            $noticia = $_POST['noticia'];
            echo "<script>alert('". $mensaje . $usuario . $noticia    ."')</script>";
            $comentario = new Comentario();
            $comentario->insertar_comentario($mensaje, $usuario, $noticia);
        }
        if ($formulario == "Crear_Usuario") {
            $usuario = new Usuario();
            $username = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $usuario->Crear_Usuario($username, $password, $email);
        }
        if ($formulario == "Autenticar") {
            $usuario = new Usuario();
            $email = $_POST['email'];
            $password = $_POST['password'];
            $usuario->autenticar( $password, $email);
        }




    }
}

?>