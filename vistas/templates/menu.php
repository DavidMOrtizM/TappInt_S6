<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="" href="#">
      <img src="public/resources/images/logo.png" alt="El Faro" height="60" class="logo-img">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php
          if (isset($_GET['action'])) {
            if ($_GET['action'] == 'inicio') {
              echo 'active';
              echo ' aria-current="page"';
            }
          } else {
            echo 'active';
            echo ' aria-current="page"';
          } ?>" href="index.php?action=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php
          if (isset($_GET['action'])) {
            if ($_GET['action'] == 'Nacionales') {
              echo 'active';
              echo ' aria-current="page"';
            }
          } ?>" href="index.php?action=Nacionales">Nacional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php
          if (isset($_GET['action'])) {
            if ($_GET['action'] == 'Economicas') {
              echo 'active';
              echo ' aria-current="page"';
            }
          } ?>" href="index.php?action=Economicas">Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php
          if (isset($_GET['action'])) {
            if ($_GET['action'] == 'Deportivas') {
              echo 'active';
              echo ' aria-current="page"';
            }
          } ?>" href="index.php?action=Deportivas">Deporte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php
          if (isset($_GET['action'])) {
            if ($_GET['action'] == 'contacto') {
              echo 'active';
              echo ' aria-current="page"';
            }
          } ?>" href="index.php?action=contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>