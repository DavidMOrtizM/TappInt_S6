
<?php include 'templates/header.php'; ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <div id="alert-section">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">Ultima hora : Aguas
                    Andinas crea servidor de Minecraft para concientizar sobre sequía en Chile: Revisa cómo
                    jugarlo<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/menu.php'; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Noticias Recientes</h1>
        <p class="lead">Manténgase informado con lo último en noticias en El Faro.</p>
        <div>
            <p class="relog" id="relog">30 de abril de 2023, 17:46:01</p>
        </div>
    </div>
</div>
<main class="container my-5" id="Noticias">


    <?php include 'templates/sec_principal.php'; ?>
    <?php include 'templates/seccion.php'; ?>


</main>


<div class="container">
    <h1>Últimas noticias</h1>
    <?php
    require_once 'modelos/NoticiasModelos.php';
//    $noticiasModel = new NoticiasModelos();
//    $resultado = $noticiasModel->getAll();
//    $noticias = $noticiasModelo->getAll();
//    $primeras_noticias = $noticiasModelo->getPrimeras();
//    $noticias_por_categoria = $noticiasModelo->getCategorias();

    $noticiasModelo = new NoticiasModelos();
    $noticias = $noticiasModelo->Lista_Noticias();

    ?>




    <div class="row">
        <?php foreach ($noticias as $noticia): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $noticia->getTitulo(); ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $noticia->getCategoria(); ?>
                        </p>
                        <a href="index.php?action=ver-noticia&id=<?php echo $noticia->getId(); ?>" class="btn btn-primary">Leer
                            más</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            <?php echo $noticia->getFecha(); ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<?php include 'templates/footer.php'; ?>