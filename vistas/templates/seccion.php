<?php
require_once 'modelos/NoticiasModelos.php';
$noticiasModelo = new NoticiasModelos();


if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'Nacionales':
            $categorias = array("nacional");
            break;
        case 'Economicas':
            $categorias = array("negocios");
            break;
        case 'Deportivas':
            $categorias = array("deportes");
            break;
        case 'inicio':
            $categorias = array("nacional", "negocios", "deportes");
            break;
    }
}

foreach ($categorias as $categoria) {
    $noticia_categoria = $noticiasModelo->Lista_Categoria($categoria);
    ?>
    <div class="my-5 h-100"><a style="text-decoration: none;" href="<?php echo $categoria; ?>.html">
            <h2>
                <?php echo ucfirst($categoria); ?>
            </h2>
        </a>
        <div class="row" id="<?php echo $categoria; ?>">
            <?php foreach ($noticia_categoria as $noticia): ?>
                <div class="col-md-4 custom-col">
                    <a style="text-decoration= none;" href="index.php?action=noticia&categoria=<?php echo $noticia->getCategoria(); ?>&id=<?php echo $noticia->getId(); ?>">
                        <div class="card cardhover h-100">
                            <h4 class="card-title">
                                <?php echo $noticia->getTitulo(); ?>
                            </h4>
                            <img class="card-img-top w-800" src="<?php echo $noticia->getFoto(); ?>" alt="Imagen de la Noticia">
                            <div class="card-body">
                                <h5 class="card-text">
                                    <?php echo $noticia->getFecha(); ?>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
?>