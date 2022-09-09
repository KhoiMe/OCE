<!DOCTYPE html>
<html lang="es">

<head>
  <title>Iniciar Sesion</title>
  <?php
  include '../src/head.php';
  ?>

<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="" class="img-fluid" alt="(imagen de login)">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <form action="../includes/login.inc.php" method="post">

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Inicia sesion</p>
            </div>

            <!-- uid input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Inserte su nombre de usuario o E-mail" name="uid" />
              <label class="form-label" for="form3Example3">Nombre de usuario o Email </label>
            </div>

            <!-- pwd input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Inserte su contraseña" name="pwd" />
              <label class="form-label" for="form3Example4">Contraseña</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">

              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Recordarme
                </label>
              </div>
              <a href="#!" class="text-body"><u>Olvidaste tu contraseña?</u></a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <input type="submit" value="Iniciar sesion" class="btn-login btn" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">
              <p class="small fw-bold mt-2 pt-1 mb-0">No tienes una cuenta? <br> <a href="registrar.php" class="fw-bold text-body "><u>Registrate</u></a></p>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <link href="../css/includes.css" rel="stylesheet">
</body>

</html>
