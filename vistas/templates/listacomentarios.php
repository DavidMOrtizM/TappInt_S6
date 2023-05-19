<?php
// Incluir la clase Comentario
require_once 'modelos/ClaseComentario.php';

// Crear una instancia de la clase Comentario
$comentario = new Comentario();

// Obtener la lista de comentarios de una noticia específica (por ejemplo, noticia con ID 1)
$id_noticia = $_GET['id']; 
$lista_comentarios = $comentario->listar_comentarios($id_noticia);
?>


    <div class="container">
        <h1>Comentarios</h1>
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($lista_comentarios as $comentario) { ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $comentario->getUsuario(); ?></h5>
                            <p class="card-text"><?php echo $comentario->getMensaje(); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>