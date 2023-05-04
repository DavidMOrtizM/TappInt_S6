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
        $jsonString = file_get_contents('usuarios.json');
        $usuarios = json_decode($jsonString, true);
    
        $lastIndex = count($usuarios) + 1;
    
        $usuarios = [
          "id" => $lastIndex . "",
          "name" => $this->$name,
          "email" => $this->$email,
          "password" => $this->$password
        ];
        $usuarios[] = $usuarios;
        $newJsonString = json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        file_put_contents('usuarios.json', $newJsonString);
        echo "<script>alert('El usuario ha sido guardado')</script>";

    }


}



>?