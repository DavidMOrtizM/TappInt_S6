<?php include 'templates/header.php'; ?>
<?php include 'templates/menu.php'; ?>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Crear cuenta</h1>
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
            <h2>Crear nueva cuenta</h2>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required="" control-id="ControlID-1">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required=""
                        control-id="ControlID-2">
                </div>
                <div class="mb-3">

                <label for="contraseña"class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required="">

                
                <!--<label for="subject" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="subject" name="subject" required=""
                        control-id="ControlID-3">-->
                </div>
               
                <button type="submit" class="btn btn-primary" control-id="ControlID-5">Crear</button>
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