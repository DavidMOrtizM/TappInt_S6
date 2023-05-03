<?php
class Noticia
{

    // Atributos
    private $id;
    private $titulo;
    private $categoria;
    private $foto;
    private $texto;
    private $audio;
    private $video;
    private $fecha;

    // Constructor
    public function __construct($id, $titulo, $categoria, $foto, $texto, $audio, $video, $fecha)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->foto = $foto;
        $this->texto = $texto;
        $this->audio = $audio;
        $this->video = $video;
        $this->fecha = $fecha;
    }

    // Métodos get
    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function getAudio()
    {
        return $this->audio;
    }

    public function getVideo()
    {
        return $this->video;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    // Métodos set
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
    }

    public function setAudio($audio)
    {
        $this->audio = $audio;
    }

    public function setVideo($video)
    {
        $this->video = $video;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}
?>