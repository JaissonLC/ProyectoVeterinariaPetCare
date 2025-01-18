<?php
    include_once "layout.php";
    include_once '../Controllers/usuarioController.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Iniciar Sesión</title>
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
  <a href="recuperar.php" class="salir"><i class="bi bi-arrow-left-square-fill">Regresar</i></a>
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

                <?php
                    if(isset($_POST["MsjPantalla"]))
                    {
                      echo '<div style="text-align:center" class="alert alert-light" role="alert">' . $_POST["MsjPantalla"] . '</div>';
                    }
                ?>

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Iniciar Sesión</h5>
                    <p class="text-center small">Ingresar nombre de usuario y contraseña</p>
                  </div>

                  <form action="" method="post">
                  <div class="input-group input-group-outline my-3">
                    <input id="infoCorreo" name="infoCorreo" readonly value="<?php echo $_GET["qs"] ?>" type="email" class="form-control" placeholder="Correo Electrónico">
                  </div>

                  <label>Ingrese el código de seguridad</label>
                  <div class="input-group input-group-outline my-3">
                    <input id="cod1" type="text" class="form-control CodSeguridad" placeholder="-" maxlength="1" onkeyup="validarCodDeSeguridad(this);">
                    <input id="cod2" type="text" class="form-control CodSeguridad" placeholder="-" maxlength="1" onkeyup="validarCodDeSeguridad(this);">
                    <input id="cod3" type="text" class="form-control CodSeguridad" placeholder="-" maxlength="1" onkeyup="validarCodDeSeguridad(this);">
                    <input id="cod4" type="text" class="form-control CodSeguridad" placeholder="-" maxlength="1" onkeyup="validarCodDeSeguridad(this);">
                  </div>

                  
                  <div id="sectionConfirm">
                    <!--<div class="input-group input-group-outline mb-3">
                      <input id="infoContraseña" name="infoContraseña" type="password" class="form-control" placeholder="Contraseña" onkeyup="validarClaves();">
                    </div>

                    <div class="input-group input-group-outline mb-3">
                      <input id="infoConfirmarContraseña" name="infoConfirmarContraseña" type="password" class="form-control" placeholder="Confirmar Contraseña" onkeyup="validarClaves();">
                    </div>-->

                    <div class="text-center">
                      <button id="btnCambiarContraseña" name="btnCambiarContraseña" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Cambiar Contraseña</button>
                    </div>
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