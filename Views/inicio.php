<?php
  include_once '../Controllers/usuarioController.php';
  include_once "../Controllers/productoController.php";
  include_once "layout.php";

  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Veterinaria</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->

  



  <!-- ======= Header ======= -->
  <?php
    MostrarHeaderInicio();
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpg)">
          <div class="container">
            <h2>¡Bienvenidos a PetCare!</h2>
            <p>Explora nuestra página para obtener más información sobre nuestros servicios, conoce a nuestro equipo veterinario y descubre consejos útiles para el cuidado de tus mascotas.</p>
            <a href="#about" class="btn-get-started scrollto">Leer más</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg)">
          <div class="container">
            <h2>¡Bienvenidos a PetCare!</h2>
            <p>Si tienes alguna pregunta o necesitas programar una cita, no dudes en contactarnos. Estamos aquí para ayudarte y brindarles a tus mascotas la atención que se merecen.</p>
            <a href="#about" class="btn-get-started scrollto">Leer más</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg)">
          <div class="container">
            <h2>¡Bienvenidos a PetCare!</h2>
            <p>En la veterinaria PetCare nos preocupamos por la salud de tu mascota.</p>
            <a href="#about" class="btn-get-started scrollto">Leer más</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Nosotros Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nosotros</h2>
          <p>¡Bienvenidos a nuestra página web de la Veterinaria PetCare! Nos enorgullece brindar atención veterinaria de alta calidad y compasiva para tus queridas mascotas. Somos un equipo de profesionales apasionados por el cuidado de los animales y nos dedicamos a mejorar la calidad de vida de tus compañeros peludos.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/nosotros/1.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Objetivos</h3>
            <p class="fst-italic">
            Nuestro objetivo principal es ofrecer un servicio integral y personalizado para cubrir todas las necesidades de tus mascotas. Ya sea que necesiten una consulta de rutina, atención médica especializada o cuidados de emergencia, nuestro equipo altamente capacitado está aquí para ayudarte en cada paso del camino.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Atención médica integral.</li>
              <li><i class="bi bi-check-circle"></i> Cirugía y cuidados especializados.</li>
              <li><i class="bi bi-check-circle"></i> Asesoramiento y educación.</li>
            </ul>
            <p>
            Sabemos que cada animal es único, por lo que nos esforzamos por establecer una relación cercana y de confianza con cada cliente y su mascota. Nuestro equipo se enorgullece de escuchar tus inquietudes, responder tus preguntas y trabajar contigo para desarrollar un plan de tratamiento individualizado que se adapte a las necesidades específicas de tu mascota.
            </p>
          </div>
        </div>

      </div>
    </section><!-- Fin Nosotros Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctores</strong> son profesionales altamente capacitados y apasionados que se dedican al cuidado de la salud animal.</p>
              <a href="#doctors">Ver más &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departamentos</strong> son áreas especializadas que se encargan de diferentes aspectos del cuidado animal.</p>
              <a href="departamentos.php#departments">Ver más &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Servicios</strong> que abarcan una amplia gama de cuidados y tratamientos médicos para animales.</p>
              <a href="servicios.php#services">Ver más &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Premios</strong> en veterinaria reconocen la excelencia y contribuciones destacadas de profesionales en el campo de la medicina veterinaria. </p>
              <a href="#features">Ver más &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Informes</h4>
              <p>Documentación de casos médicos</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Bienestar</h4>
              <p>Nutrición balanceada, aseo y cuidado</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Fotografías</h4> 
              <p>Sesiones fotográficas de la veterinaria</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Seguridad</h4>
              <p>Control de acceso y manejo seguro de medicamentos</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/nosotros/2.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctores</h2>
          <p>La comprensión del comportamiento animal, la anatomía y la fisiología, combinada con su habilidad para realizar cirugías y recetar medicamentos adecuados, los convierte en pilares indispensables de la comunidad veterinaria.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-skype"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter Davis</h4>
                <span>Cirujano</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-skype"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Asistente</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-skype"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Oncólogo</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-skype"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Rodríguez</h4>
                <span>Dermatóloga</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    MostrarFooter();
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>