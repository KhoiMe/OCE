<!DOCTYPE html>
<html lang="es">

<head>
    <title>Nosotros</title>
<link href="../css/style.css" rel="stylesheet">
    <?php
    include 'head.php';
    ?>

<body>
</body>

</html>

<?php
include 'header.php';

include 'navbar.php';
?>

<?php
if (isset($_SESSION["userid"])) {
?>
<div class="dropdown-menu" aria-labelledby>
  <a class="dropdown-item" href="perfil.php">Mi perfil</a>
  <a class="dropdown-item" href="nosotros.php">Nosotros</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="includes/logout.inc.php">Cerrar sesion</a>
</div>
<li class="nav-item active">
  <a class="nav-link" href="../index.php">Mi feed</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="favoritos.php">favoritos</a>
</li>
<?php
} else {
?>
<div class="dropdown-menu" aria-labelledby>
  <a class="dropdown-item" href="nosotros.php">Nosotros</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="tyc.php">Terminos y condiciones</a>
</div>
<li class="nav-item active">
  <a class="nav-link" href="login.php">Inicia sesion</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="registrar.php">Registrate</a>
</li>

<?php
}
?>

</li>
</ul>
<form class="form-inline my-2 my-lg-0" action="" method="post">
  <input class="form-control mr-sm-2" type="search" placeholder="Tu elijes..." aria-label="Search">
  <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
</form>
</div>
</nav>
