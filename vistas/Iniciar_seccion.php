<?php include 'templates/header.php'; ?>
<?php include 'templates/menu.php'; ?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Iniciar Sección</h1>
        <p class="lead">Te mantendremos al día con noticias de tu interez</p>
        <div>
            <p class="relog" id="relog">3 de mayo de 2023, 16:17:48</p>
        </div>
    </div>
</div>
<!-- Main content -->
<main class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <form action="index.php?action=inicio" method="POST">
                <input type="hidden" name="Autenticar">
                <h1>Iniciar Sección</h1>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary" class="btn">Login</button>
                <p>¿No tienes una cuenta? <a href="index.php?action=crear_usuario">Únete a El Faro</a></p>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Información de contacto</h2>
            <p>Puedes ponerte en contacto con nosotros a través de los siguientes medios:</p>
            <ul>
                <li><strong>Teléfono:</strong> (123) 456-7890</li>
                <li><strong>Correo electrónico:</strong> info@elfaro.com</li>
                <li><strong>Dirección:</strong> Calle 123, Ciudad, País</li>
            </ul>
        </div>
    </div>
</main>
<!-- Footer -->
<?php include 'templates/footer.php'; ?>