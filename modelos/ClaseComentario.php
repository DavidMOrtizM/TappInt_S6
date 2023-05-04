<?php
class Comentario
{
    private $id;
    private $nombre;
    private $correo;
    private $asunto;
    private $mensaje;
    private $fecha;

    public function __construct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    }
    public function getFecha()
    {
        $date = DateTime::createFromFormat('Y-m-d', $this->fecha);
        $nuevaFecha = $date->format('d-m-Y');
        return $nuevaFecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function Crear_Comentario($nombre, $correo, $asunto, $mensaje)
    {
        $jsonString = file_get_contents('modelos/comentarios.json');
        $comentarios = json_decode($jsonString, true);

        $lastIndex = count($comentarios) + 1;
        

        $comentario = array(
            "id" => $lastIndex . "",
            "nombre" => $nombre,
            "correo" => $correo,
            "asunto" => $asunto,
            "mensaje" => $mensaje,
            "fecha" => date("Y-m-d")
        );
        $comentarios[] = $comentario;
        $newJsonString = json_encode($comentarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        file_put_contents('modelos/comentarios.json', $newJsonString);
        echo "<script>alert('Su comentario ha sido enviado')</script>";
    }
}
?>