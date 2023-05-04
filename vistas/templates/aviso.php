<?php
require_once 'modelos/NoticiasModelos.php';
$noticiasModelo = new NoticiasModelos();
$noticia_primera = $noticiasModelo->Lista_Primera_Noticias();
?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <div id="alert-section">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">Ultima hora :
                    <?php echo $noticia_primera->getTitulo()
                        ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>