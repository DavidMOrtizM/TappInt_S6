<?php

class CuentaUsuario{

    public $name;
    public $email;
    private $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function guardar() {
        
  {
    $jsonString = file_get_contents('usuarios.json');
    $usuarios = json_decode($jsonString, true);

    $lastIndex = count($usuarios) + 1;
    echo "<script>alert('" . $lastIndex . "')</script>";


    }









    }


}



>?