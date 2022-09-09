<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registrarse</title>
  <?php
  include '../src/head.php';
  ?>

<body>
  <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5 create-title">
                <h2 class="text-uppercase text-center mb-5"> Crear una cuenta </h2>

                <form method="post" action="../includes/registrar.inc.php">

                  <!--uid-->
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="JuanCardenas" name="uid" />
                    <label class="form-label" for="form3Example1cg">Tu Nombre de usuario</label>
                  </div>

                  <!--email-->
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3cg" class="form-control form-control-lg" placeholder="ejemplo@extension.com" name="email" />
                    <label class="form-label" for="form3Example3cg">Tu correo electronico</label>
                  </div>

                  <!--pwd-->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="*********" name="pwd" />
                    <label class="form-label" for="form3Example4cg">Contraseña</label>
                  </div>

                  <!--repeat-pswd-->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" placeholder="*********" name="pwdRepeat"/>
                    <label class="form-label" for="form3Example4cdg">Repite tu contraseña</label>
                  </div>

                  <!--agreement-->
                  <div class="form-check check-agreement">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  </div>
                  <div class="form-check d-flex justify-content-center">
                    <label class="form-check-label" for="form2Example3g">
                      Estoy de acuerdo con los <a href="#!" class="text-body"><u>Terminos de servicio</u></a>
                    </label>
                  </div>

                  <!--register-btn-->
                  <div class="d-flex justify-content-center ">
                    <input type="submit" value="Registrarse" class="btn btn-login registrar-btn" name="submit">
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Ya tienes una cuenta? <a href="login.php" class="fw-bold text-body"><u>Inicia sesion aqui</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <link href="../css/includes.css" rel="stylesheet">
</body>

</html>
