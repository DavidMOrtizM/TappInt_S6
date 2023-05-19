<?php

require_once 'ClaseDatos.php';
class Comentario extends Datos
{
    private string $mensaje;
    private string $usuario;
    private int $id_noticia;

    public function __construct()
    {
        $this->conectar();
    }
    public function __destruct()
    {
        $this->desconectar();
    }
    public function listar_comentarios($id_noticia)
    {
    $result_set = $this->ejecutarconrespuesta("comentarios_y_usuarios_de_noticia", array($id_noticia));

    $comentarios = array();
    foreach ($result_set as $row) {
        $comentario = new Comentario();
        $comentario->setMensaje($row['Mensaje']);
        $comentario->setUsuario($row['UsurName']);
        array_push($comentarios, $comentario);
    }

    return $comentarios;
        
    }

    public function insertar_comentario($mensaje, $id_usuario, $id_noticia)
    {
        $this->ejecutarsinrespuesta("insertar_comentarios", array($mensaje, $id_usuario, $id_noticia));
    }


	/**
	 * @return 
	 */
	public function getUsuario(): string {
		return $this->usuario;
	}
	
	/**
	 * @param  $usuario 
	 * @return self
	 */
	public function setUsuario(string $usuario): self {
		$this->usuario = $usuario;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getMensaje(): string {
		return $this->mensaje;
	}
	
	/**
	 * @param  $mensaje 
	 * @return self
	 */
	public function setMensaje(string $mensaje): self {
		$this->mensaje = $mensaje;
		return $this;
	}
}
?>