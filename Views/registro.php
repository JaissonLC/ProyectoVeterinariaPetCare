<?php
    include_once "../Controllers/usuarioController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registrarse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="background-image: url(assets/img/fondos/1.jpg)">

<header>
  <a href="inicio.php" class="salir"><i class="bi bi-arrow-left-square-fill">Salir</i></a>
</header>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logos/1.png" alt="">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crear una cuenta</h5>
                    <p class="text-center small">Ingresar datos personales para crear una cuenta</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Identificacion</label>
                      <input type="text" name="infoIdentificacion" class="form-control" id="infoIdentificacion" required>
                      <div class="invalid-feedback">Por favor ingrese su identificacion.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nombre completo</label>
                      <input type="text" name="infoNombreCompleto" class="form-control" id="infoNombreCompleto" required>
                      <div class="invalid-feedback">Por favor ingrese su nombre completo.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nombre de usuario</label>
                      <div class="input-group has-validation">
                        <input type="text" name="infoNombreDeUsuario" class="form-control" id="infoNombreDeUsuario" required>
                        <div class="invalid-feedback">Por favor ingrese su nombre de usuario.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Correo</label>
                      <input type="email" name="infoCorreo" class="form-control" id="infoCorreo" required>
                      <div class="invalid-feedback">Por favor ingrese su correo.</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Contraseña</label>
                      <input type="password" name="infoContraseña" class="form-control" id="infoContraseña" required>
                      <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
                    </div>

                    <!--<div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Estoy de acuerdo y acepto los <a href="#">términos y condiciones</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>-->
                    <div class="col-12">
                      <button id="btnRegistro" name="btnRegistro" class="btn btn-primary w-100" type="submit">Crear cuenta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Diseñado por <a href="https://bootstrapmade.com/">Grupo#6</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>