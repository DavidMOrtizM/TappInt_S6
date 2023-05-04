<?php
class Usuario {
    private $username;
    private $password;
    private $logged_in;
    private $session_map;
  
    function __construct() {
      $this->username = '';
      $this->password = '';
      $this->logged_in = false;
      $this->session_map = array();
    }
  
    function autenticar($username, $password) {
      $usuarios = $this->obtener_usuarios();
      foreach ($usuarios as $usuario) {
        if ($usuario->username === $username && $usuario->password === $password) {
          $this->username = $username;
          $this->password = $password;
          $this->logged_in = true;
          return true;
        }
      }
      return false;
    }
  
    function registrar($username, $password) {
      if ($this->usuario_existe($username)) {
        // El usuario ya existe, no se puede registrar
        return false;
      } else {
        // El usuario no existe, se puede registrar
        // Aquí iría la lógica para insertar el nuevo usuario en la base de datos
        $this->username = $username;
        $this->password = $password;
        $this->logged_in = true;
        return true;
      }
    }
  
    function guardar_sesion($key, $value) {
      // Aquí se guarda la sesión en el mapa de sesiones
      $this->session_map[$key] = $value;
    }

    function cerrar_sesion() {
        $this->username = '';
        $this->password = '';
        $this->logged_in = false;
        $this->session_map = array();
      }
  
    function recuperar_sesion($key) {
      // Aquí se recupera la sesión del mapa de sesiones
      if (isset($this->session_map[$key])) {
        return $this->session_map[$key];
      } else {
        return null;
      }
    }
  
    function usuario_existe($username) {
      $usuarios = $this->obtener_usuarios();
      foreach ($usuarios as $usuario) {
        if ($usuario->username === $username) {
          return true;
        }
      }
      return false;
    }

  
    function obtener_usuarios() {
      $usuarios_json = file_get_contents("modelos/usuarios.json");
      $usuarios = json_decode($usuarios_json);
      return $usuarios;
    }
  }


?>