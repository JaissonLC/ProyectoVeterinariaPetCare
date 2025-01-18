<?php
  include_once "layout.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contáctenos</title>   
    <link href="../Views/assets/img/favicon.png" rel="icon">
    <link href="../Views/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../Views/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../Views/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../Views/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../Views/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Views/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../Views/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../Views/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../Views/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../Views/assets/css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="content">

    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    </div>
  </div>


     <!-- ======= Header ======= -->
     <div class="contentHeader">
     <?php
       MostrarHeader();
     ?>
     </div>
  <!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contáctenos</h2>
          <p>En "Contáctenos" encontrarás todas las opciones para comunicarte con nosotros y resolver cualquier duda o inquietud que puedas tener sobre nuestros servicios veterinarios. Nos encantaría escucharte y ayudarte en todo lo que necesites.</p>
        </div>

      </div>

      <div>    
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d584.1992974639631!2d-84.03536662977088!3d9.933227847915425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3f47ea4ff37%3A0x7a7818a6a9e5c90c!2sUniversidad%20Fid%C3%A9litas!5e0!3m2!1ses!2scr!4v1686531138749!5m2!1ses!2scr" frameborder="0" allowfullscreen></iframe>
        </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Dirección</h3>
                  <p>Calle Siles 203, SJO SP11501, CR</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Correo</h3>
                  <p>veterinariapetcare6@gmail.com<br>petcareveterinaria6@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Teléfono</h3>
                  <p>(+506) 2222-8888<br>(+506) 8888-2222</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <form action="../Controllers/contact.php" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Mensaje" required=""></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div> -->
                <?php
                  if (isset($_GET["message"]) && $_GET["message"] != 'Successfull') {
                ?>
                <div class="error-message"></div>
                <?php
                  } else {
                    if (isset($_GET["message"]) && $_GET["message"] == 'Successfull') {
                ?>
                <div class="sent-message">Tu mensaje ha sido enviado con éxito</div>
                <?php
                  } }
                ?>
              </div>
              <div class="text-center">
                <button id="btnEnviarMensaje" name="btnEnviarMensaje" class="btnEnviarMensaje" type="submit">Enviar mensaje</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  <!-- ======= Footer ======= -->
    </div>
  <?php
      MostrarFooter();
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../Views/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../Views/assets/vendor/aos/aos.js"></script>
  <script src="../Views/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../Views/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../Views/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../Views/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../Views/assets/js/main.js"></script>
  </body>
</html>