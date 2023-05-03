<?php include 'templates/header.php'; ?>
<?php 
require_once 'modelos/NoticiasModelos.php';
$noticiasModelo = new NoticiasModelos();

if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];
    switch ($categoria) {
        case 'nacional':
            $categorias = "Nacionales";
            break;
        case 'negocios':
            $categorias = "Economicas";
            break;
        case 'deportes':
            $categorias = "Deportivas";
            break;
    }
}
$noticia_id = $noticiasModelo->NoticiaId($_GET['id']);
?>
<div class="container-fluid mt-3">
</div>
<?php include 'templates/menu.php'; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Noticias
        <?php echo $categorias; ?>
        </h1>
        <p class="lead">Manténgase informado con lo último en noticias en El Faro.</p>
        <div>
            <p class="relog" id="relog">30 de abril de 2023, 17:46:01</p>
        </div>
    </div>
</div>
<main class="container my-5" id="Noticias">



    <div class="row align-items-stretch" id="principal_1">
        <div class="col-lg-8 col-md-12 custom-col">
            <div class="card-body">
                <h1 class="card-title mb-4" style="font-size: 2.5rem;"><?php echo $noticia_id->getTitulo(); ?></h1>
                <h3 class="card-subtitle mb-2 text-muted"><?php echo $noticia_id->getCategoria(); ?></h3>
                <div class="card w-100 h-100"><img class="card-img-top w-800"
                        src="<?php echo $noticia_id->getFoto(); ?>" alt="Imagen de la noticia">
                    <h2 class="card-subtitle mb-2 text-muted"><?php echo $noticia_id->getFecha(); ?></h2>
                    <p class="card-text" style="font-size: 1.25rem;"><?php echo $noticia_id->getTexto(); ?></p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'templates/footer.php'; ?>