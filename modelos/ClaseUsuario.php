<?php
session_start(); 

class Usuario
{
  private $username;
  private $password;
  private $email;
  private $logged_in;
  private $session_map;

  public function __construct() {

}
  public function getUsername()
  {
    return $this->username;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function isLoggedIn()
  {
    return $this->logged_in;
  }

  public function setLoggedIn($logged_in)
  {
    $this->logged_in = $logged_in;
  }

  public function getSessionMap()
  {
    return $this->session_map;
  }

  public function setSessionMap($session_map)
  {
    $this->session_map = $session_map;
  }




  function autenticar($password, $email)
  {
    
 //   $usuarios => $this.obtener_usuarios();
    $usuarios = json_decode(file_get_contents('modelos/usuarios.json'), true);
    foreach ($usuarios as $usuario) {
      if ($usuario['email'] === $email && $usuario['password'] === $password) {
        $_SESSION['usuario'] = $usuario['email'] ;
        echo "<script>alert('Bienvenido')</script>";
      }else {
        echo "<script>alert('Correo o Clave Erroneo')</script>";
      }
    }
  }

  function Crear_Usuario($username, $password, $email)
  {
    if ($this->usuario_existe($email)) {
      echo "<script>alert('El correo electronico ya existe')</script>";
      return false;
    } else {
      // El usuario no existe, se puede registrar
      // Aquí iría la lógica para insertar el nuevo usuario en la base de datos
      $jsonString = file_get_contents('modelos/usuarios.json');
      $usuarios = json_decode($jsonString, true);

      $lastIndex = count($usuarios) + 1;
      

      $usuario = [
          "id" => $lastIndex . "",
          "username" => $username,
          "email" => $email,
          "password" => $password,
      ];
      $usuarios[] = $usuario;
      $newJsonString = json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
      file_put_contents('modelos/usuarios.json', $newJsonString);
      echo "<script>alert('Usuario registrado')</script>";
      return true;
    }
  }
  private function usuario_existe($username)
  {
    $usuarios = $this->obtener_usuarios();
    foreach ($usuarios as $usuario) {
      if ($usuario->username === $username) {
        return true;
      }
    }
    return false;
  }

  private function  obtener_usuarios()
  {
    $usuarios = json_decode(file_get_contents('modelos/usuarios.json'), true);
    return $usuarios;
  }
}


?>