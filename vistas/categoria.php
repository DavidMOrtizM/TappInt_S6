<?php include 'templates/header.php'; ?>
<div class="container-fluid mt-3">
</div>
<?php include 'templates/menu.php'; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Noticias
            <?php echo $categoria; ?>
        </h1>
        <p class="lead">Manténgase informado con lo último en noticias en El Faro.</p>
        <div>
            <p class="relog" id="relog">30 de abril de 2023, 17:46:01</p>
        </div>
    </div>
</div>
<main class="container my-5" id="Noticias">
    <?php include 'templates/seccion.php'; ?>
    <?php include 'templates/formnoticia.php'; ?>
</main>
<?php include 'templates/footer.php'; ?>