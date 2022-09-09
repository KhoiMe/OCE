<?php
if (isset($_POST["submit"])) {

  // datos del formulario(src/login.php)
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // Inicializar RegistrarContr class
  include "../classes/dbh.classes.php";
  include "../classes/login.classes.php";
  include "../classes/login-contr.classes.php";
  $login = new LoginContr($uid, $pwd, $pwdRepeat, $email);

  // Error handlers
  $login->loginUser();

  // Ir a pagina principal
  header("location: ../index.php?error=none");
}
