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
    $dato_noticia = json_decode(file_get_contents('modelos/noticias.json'), true);
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
      if ($noticia->getId() == $id) {
        return $noticia;
      }
    }
  }
  public function Crear_Noticia($categoria, $titulo, $texto)
  {
    $jsonString = file_get_contents('modelos/noticias.json');
    $noticias = json_decode($jsonString, true);

    $lastIndex = count($noticias) + 1;
    

    switch ($categoria) {
      case 'Nacionales':
        $categorias = "nacional";
        break;
      case 'Economicas':
        $categorias = "negocios";
        break;
      case 'Deportivas':
        $categorias = "deportes";
        break;
    }
    $noticia = array(
      "id" => $lastIndex . "",
      "titulo" => $titulo,
      "categoria" => $categorias,
      "foto" => "public/resources/images/sin_imagen.png",
      "texto" => $texto,
      "audio" => "",
      "video" => "",
      "fecha" => date("Y-m-d")
    );
    $noticias[] = $noticia;
    $newJsonString = json_encode($noticias, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    file_put_contents('noticias.json', $newJsonString);
    echo "<script>alert('La Noticia a sido guardada')</script>";
  }

}

?>