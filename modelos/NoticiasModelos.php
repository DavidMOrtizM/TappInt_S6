<?php
// modelos/modelos/NoticiasModelos.php
require_once 'ClaseNoticia.php';

class NoticiasModelos
{

  private $noticiasObj = array();
  public function getNoticias()
  {
    return $this->noticiasObj;
  }

  public function setNoticias($noticiasObj)
  {
    $this->noticiasObj = $noticiasObj;
  }

  public function __construct()
  {
    $dato_noticia = json_decode(file_get_contents('noticias.json'), true);
    usort($dato_noticia, function ($a, $b) {
      $fechaA = strtotime($a['fecha']);
      $fechaB = strtotime($b['fecha']);

      return $fechaB - $fechaA;
    });
    foreach ($dato_noticia as $noticia) {
      $noticiaObj = new Noticia(
        $noticia['id'],
        $noticia['titulo'],
        $noticia['categoria'],
        $noticia['foto'],
        $noticia['texto'],
        $noticia['audio'],
        $noticia['video'],
        $noticia['fecha']
      );
      array_push($this->noticiasObj, $noticiaObj); // Agregar la noticia como objeto al arreglo
    }
  }

  public function Lista_Noticias()
  {
    return $this->noticiasObj;
  }

  public function Lista_Primera_Noticias()
  {
    return $this->noticiasObj[0];

  }
  public function dos_Primeras_Noticias()
  {
    $noticiaCombinada = array();
    array_push($noticiaCombinada, $this->noticiasObj[1]);
    array_push($noticiaCombinada, $this->noticiasObj[2]);
    return $noticiaCombinada;
  }

  public function Lista_Categoria($categoria)
  {
    $noticiasFiltradas = array();
    foreach ($this->noticiasObj as $noticia) {
      if ($noticia->getCategoria() === $categoria) {
        array_push($noticiasFiltradas, $noticia);
      }
    }
    return $noticiasFiltradas;
  }

  public function NoticiaId($id)
  {
    foreach ($this->noticiasObj as $noticia) {
      if ($noticia->getId()== $id) {
          return $noticia;
      }
  }
  }
}

?>