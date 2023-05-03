<?php
require_once 'modelos/NoticiasModelos.php';


$noticiasModelo = new NoticiasModelos();
$noticia_primera = $noticiasModelo->Lista_Primera_Noticias();
$noticia_seg_ter = $noticiasModelo->dos_Primeras_Noticias();
?>
<div class="row align-items-stretch" id="principal_1">
    <h1>Noticias Destacadas</h1>
    <div class="col-lg-8 col-md-12 custom-col">
        <div class="card-body">
            <h1 class="card-title mb-4" style="font-size: 2.5rem;">
                <?php echo $noticia_primera->getTitulo(); ?>
            </h1>
            <h3 class="card-subtitle mb-2 text-muted">
                <?php echo $noticia_primera->getCategoria(); ?>
            </h3>
            <div class="card w-100 h-100 cardhover"><video class="embed-responsive-item" controls="">
                    <source src="../resources/videos/Video.mp4" type="video/mp4">
                </video>
                <h2 class="card-subtitle mb-2 text-muted">
                    <?php echo $noticia_primera->getFecha(); ?>
                </h2>
                <p class="card-text text-truncate" style="font-size: 1.25rem;">
                    <?php echo $noticia_primera->getTexto(); ?>
                </p>
                <p class="card-text" style="font-size: 1.25rem;">leer mas...</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="row" id="principal_2">
            <?php foreach ($noticia_seg_ter as $noticia): ?>
                <div class="col-lg-12 col-md-6 custom-col">
                    <div class="card cardhover">
                        <h2 class="card-title mb-4" style="font-size: 1.75rem;">
                            <?php echo $noticia_primera->getTitulo(); ?>
                        </h2>
                        <h4 class="card-subtitle mb-2 text-muted">
                            <?php echo $noticia_primera->getCategoria(); ?>
                        </h4><img class="card-img-top w-800" src="../resources/images/gripe-aviar.jpg"
                            alt="Imagen de la Noticia">
                        <h5 class="card-text">
                            <?php echo $noticia_primera->getFecha(); ?>
                        </h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>