<?php

class CrearUsuarioControlador{

    public function crearUsuario()
    {

        require_once 'vistas/crear_usuario.php';
    }

    public function guardarUsuario()
    {
        $name = $this->input->post("name");
        $email= $this->input->post("email");
        $password = $this->input->post("password");

        $usuario = new CuentaUsuario($name, $email, $password);
        $usuario->guardar();


        

    }

    



}
?>