<?php
if (isset($_POST["submit"])) {

  // datos del formulario(src/login.php)
  $uid = $_POST["uid"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdRepeat"];

  // Inicializar RegistrarContr class
  include "../classes/dbh.classes.php";
  include "../classes/registrar.classes.php";
  include "../classes/registrar-contr.classes.php";
  $registrar = new RegistrarContr($uid, $pwd, $pwdRepeat, $email);

  // Error handlers
  $registrar->registrarUsuario();

  // Ir a pagina principal
  header("location: ../index.php?error=none");
}
