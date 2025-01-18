<?php
  include_once '../Controllers/productoController.php';
  include_once "layout.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tienda</title>   
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

  <!-- ======= Services Section ======= -->
  <section id="pago" class="pago">
      <div class="container" data-aos="fade-up">
        </div>
    </section><!-- End Doctors Section -->

    <h5 style="text-align:center">Procesar Pago</h5><br/>

                    <table class="table table-hover table-bordered" id="tablaDetalle">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Impuesto</th>
                                <th>Total</th>  
                                <th>Eliminar</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                ConsultarDetalleCarrito()
                            ?>
                        </tbody>
                    </table>
                    
                    <div class="row">
                        <?php
                            if($_SESSION["CantidadCarrito"] != 0)
                            {
                                echo 
                                '<div class="col-7"></div>
                                <div class="col-3">
                                    <h5>El total a pagar es: ' . number_format($_SESSION["TotalCarrito"],2) . '</h5>
                                </div> 
                                <div class="col-2">
                                    <form role="form" class="text-start" action="" method="post">
                                        <input style="width:100%" type="submit" id="btnPagar" name="btnPagar" class="btn btn-success" value="Confirmar">
                                    </form>
                                </div>';                             
                            }
                        ?>                        
                    </div>                 

                </div>
            </div>

  <!-- ======= Footer ======= -->
  </div>
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
  <!-- Modal -->
  </body>
</html>