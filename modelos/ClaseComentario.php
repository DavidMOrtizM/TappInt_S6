<?php
require_once 'ClaseDatos.php';
class Comentario extends Datos
{
    private int $id_comentario;
    private ?string $mensaje = null;
    private int $id_usuario;
    private int $id_noticia;

    public function getId_comentario(): int
    {
        return $this->id_comentario;
    }


    public function setId_comentario(int $id_comentario): self
    {
        $this->id_comentario = $id_comentario;
        return $this;
    }


    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }


    public function setMensaje(?string $mensaje): self
    {
        $this->mensaje = $mensaje;
        return $this;
    }


    public function getId_usuario(): int
    {
        return $this->id_usuario;
    }


    public function setId_usuario(int $id_usuario): self
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }


    public function getId_noticia(): int
    {
        return $this->id_noticia;
    }


    public function setId_noticia(int $id_noticia): self
    {
        $this->id_noticia = $id_noticia;
        return $this;
    }


    public function __construct()
    {
        $this->conectar();
    }
    public function __destruct()
    {
        $this->desconectar();
    }
    public function listar_comentarios()
    {

    }

    public function insertar_comentario($mensaje, $id_usuario, $id_noticia)
    {
        echo "<script>alert('". $mensaje . $id_usuario . $id_noticia    ."')</script>";
        $this->ejecutarsinrespuesta("insertar_comentario", array($mensaje, $id_usuario, $id_noticia));
        
    }







}
?>