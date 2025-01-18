<?php
  include_once "layout.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Galería</title>   
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
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
    </div>
  </div>


     <!-- ======= Header ======= -->
     <div class="contentHeader">
     <?php
       MostrarHeader();
     ?>
  <!-- End Header -->
</div>

  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departamentos</h2>
          <p>Nuestros departamentos están compuestos por un equipo de profesionales altamente calificados y apasionados por el cuidado animal. Trabajamos juntos para garantizar que tu mascota reciba la atención adecuada y los servicios veterinarios más completos.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Atención al cliente</h4>
                  <p>La experiencia y satisfacción son fundamentales en cada interacción que tengas con nosotros.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Veterinarios</h4>
                  <p>Profesionales altamente capacitados y comprometidos en brindar la mejor atención médica a la mascota.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Enfermería</h4>
                  <p>La experiencia y dedicación en cada interacción con los pacientes y propietarios de mascotas.</p>
                </a>
              </li>
              
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Atención al cliente</h3>
                <p class="fst-italic">Nuestro equipo de atención al cliente está aquí para escucharte, responder a tus preguntas y brindarte la asistencia necesaria en todo momento.</p>
                <img src="assets/img/departamentos/1.jpg" alt="" class="img-fluid">
                <p>Valoramos tus inquietudes y nos comprometemos a proporcionarte una atención amable, comprensiva y oportuna. Ya sea que necesites programar una cita para tu mascota, solicitar información adicional sobre nuestros servicios, tener dudas sobre los cuidados en el hogar, o simplemente desees recibir orientación sobre temas relacionados con la salud y el bienestar animal, estamos aquí para ayudarte.</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Veterinarios</h3>
                <p class="fst-italic">Nuestros veterinarios son expertos en su campo y tienen una amplia experiencia en el cuidado y tratamiento de una variedad de especies animales.</p>
                <img src="assets/img/departamentos/2.jpg" alt="" class="img-fluid">
                <p>Están dedicados a proporcionar un cuidado integral y personalizado, centrándose en la salud y el bienestar de cada paciente peludo que atendemos.En nuestra clínica, nos esforzamos por mantenernos actualizados sobre los avances más recientes en medicina veterinaria y técnicas de diagnóstico. Nuestro equipo de veterinarios participa en programas de educación continua y se mantiene al día con los últimos desarrollos en la atención médica animal.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Enfermería</h3>
                <p class="fst-italic">Nuestro equipo de enfermería está compuesto por profesionales altamente capacitados y apasionados por el cuidado animal.</p>
                <img src="assets/img/departamentos/3.jpg" alt="" class="img-fluid">
                <p>Su experiencia y dedicación son fundamentales para garantizar que tu mascota reciba una atención de calidad y se sienta cómoda durante su visita a nuestra clínica. Nuestros enfermeros veterinarios desempeñan un papel crucial en diversas áreas de atención, brindando soporte y asistencia tanto a los veterinarios como a los pacientes peludos. Están capacitados para realizar una variedad de tareas, desde administrar medicamentos y realizar curaciones hasta monitorear signos vitales y brindar cuidados postoperatorios.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->


  <!-- ======= Footer ======= -->
  <?php
      MostrarFooter();
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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