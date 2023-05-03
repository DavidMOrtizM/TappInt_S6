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
        $noticia['ID'],
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
    $dosNoticias = array_slice($this->noticiasObj, 1, 3);
    $noticiaCombinada = new stdClass();
    $noticiaCombinada->noticia1 = $dosNoticias[0];
    $noticiaCombinada->noticia2 = $dosNoticias[1];
    return $noticiaCombinada;
  }


  public function Lista_Categoria($filtrar_categoria)
  {
    $dato_noticia = json_decode(file_get_contents('noticias.json'), true);
    usort($dato_noticia, function ($a, $b) {
      $fechaA = strtotime($a['fecha']);
      $fechaB = strtotime($b['fecha']);

      return $fechaB - $fechaA;
    });

    $noticias_filtradas = array();
    $categoria = $filtrar_categoria;
    foreach ($dato_noticia as $noticia) {
      if ($noticia["categoria"] === $categoria) {
        $noticiaObj = new Noticia(
          $noticia['ID'],
          $noticia['titulo'],
          $noticia['categoria'],
          $noticia['foto'],
          $noticia['texto'],
          $noticia['audio'],
          $noticia['video'],
          $noticia['fecha']
        );
        array_push($noticias_filtradas, $noticiaObj);
      }
    }
    return $noticias_filtradas;
  }
}

?>