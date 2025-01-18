<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<?php
    include_once '../Controllers/usuarioController.php';
    include_once '../Controllers/productoController.php';

    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    function MostrarMenu()
    {
        echo 
        '<div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white " href="pages/dashboard.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="pages/tables.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Artículos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="pages/billing.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">receipt_long</i>
              </div>
              <span class="nav-link-text ms-1">Log Out</span>
            </a>
          </li>
        </ul>
      </div>';
    }

    function MostrarHeaderInicio()
    {

      if($_SESSION["NombreDeUsuario"] == null)
      /*if($_SESSION["RolUsuario"] == 1)          Asi deberia de ser*/   
      {
         header("location: login.php");
      }

      consultarResumenCarrito();
        echo
        '<div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">       
            <nav id="navbar" name="navbar" class="navbar order-last order-lg-0">
                <h6 class="RolUsuario" style="text-align center;">
                ' . $_SESSION["NombreRolUsuario"] . ' - ' . $_SESSION["NombreDeUsuario"] . '
                </h6>
            </nav>
        </div>
    </div>
        
        <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <a href="inicio.php" class="logo me-auto"><img src="assets/img/logos/1.png" alt=""></a>
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto " href="inicio.php">Inicio</a></li>
              <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
              <li><a class="nav-link scrollto" href="servicios.php#services">Servicios</a></li>
              <li><a class="nav-link scrollto" href="departamentos.php#departments">Departamentos</a></li>
              <li><a class="nav-link scrollto" href="galeria.php#gallery">Galería</a></li>
              <li><a class="nav-link scrollto" href="tienda.php#tienda">Tienda</a></li>
              <li><a class="nav-link scrollto" href="contactenos.php#contact">Contáctenos</a></li>
              <li><a class="nav-link scrollto" href="historialCompra.php#historial">Historial de Compra</a></li>
              <li><a class="nav-link scrollto" href="pagar.php#pago"><i class="fa fa-cart-shopping"></i>' . $_SESSION["CantidadCarrito"] . ' Producto(s) - $ ' . $_SESSION["SubTotalCarrito"] . ' + IVA </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          
          <form action="" method="post">
            <button type="submit" id="btnCerrarSesion" name="btnCerrarSesion" class="appointment-btn scrollto" style="border: none; background-color: #D00F0F ;">Cerrar Sesión</button>
          </form>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <h6 class="appointment-btn-usuario"></h6>
          </nav>
        </div>
      </header><!-- End Header -->';        
    }

    function MostrarHeader()
    {
      consultarResumenCarrito();
        echo
        '<div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">       
            <nav id="navbar" name="navbar" class="navbar order-last order-lg-0">
                <h6 class="RolUsuario" style="text-align center;">
                ' . $_SESSION["NombreRolUsuario"] . ' - ' . $_SESSION["NombreDeUsuario"] . '
                </h6>
            </nav>
        </div>
    </div>
        
        <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <a href="inicio.php" class="logo me-auto"><img src="assets/img/logos/1.png" alt=""></a>
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto " href="inicio.php">Inicio</a></li>
              <li><a class="nav-link scrollto" href="inicio.php#about">Nosotros</a></li>
              <li><a class="nav-link scrollto" href="servicios.php#services">Servicios</a></li>
              <li><a class="nav-link scrollto" href="departamentos.php#departments">Departamentos</a></li>
              <li><a class="nav-link scrollto" href="galeria.php#gallery">Galería</a></li>
              <li><a class="nav-link scrollto" href="tienda.php#tienda">Tienda</a></li>
              <li><a class="nav-link scrollto" href="contactenos.php#contact">Contáctenos</a></li>
              <li><a class="nav-link scrollto" href="historialCompra.php#historial">Historial de Compra</a></li>
              <li><a class="nav-link scrollto" href="pagar.php#pago"><i class="fa fa-cart-shopping"></i>' . $_SESSION["CantidadCarrito"] . ' Producto(s) - $ ' . $_SESSION["SubTotalCarrito"] . ' + IVA </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          
          <form action="" method="post">
          <button type="submit" id="btnCerrarSesion" name="btnCerrarSesion" class="appointment-btn scrollto" style="border: none; background-color: #D00F0F ;">Cerrar Sesión</button>
          </form>
          <nav id="navbar" class="navbar order-last order-lg-0">
            <h6 class="appointment-btn-usuario"></h6>
          </nav>
        </div>
      </header><!-- End Header -->';       
    }

    function MostrarFooter()
    {
        echo
        '<!-- ======= Footer ======= -->
        <footer id="footer">
          <div class="footer-top">
            <div class="container">
              <div class="row">
      
                <div class="col-lg-3 col-md-6">
                  <div class="footer-info">
                    <h3>PetCare</h3>
                    <p>
                      Calle Siles 203 <br>
                      SJO SP11501, CR<br><br>
                      <strong>Teléfono:</strong> (+506) 2222-8888<br>
                      <strong>Correo:</strong> veterinariapetcare6@gmail.com<br>
                    </p>
                    <div class="social-links mt-3">
                      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                      <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-6 footer-links">
                  <h4>Enlaces útiles</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="inicio.php#hero">Inicio</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="inicio.php#about">Nosotros</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="servicios.php#services">Servicios</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Término de servicios</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Nuestros servicios</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="consultas.php">Consultas</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="vacunas_desparasitacion.php">Vacunación y desparasitación</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="cirugia_procedimientos.php">Cirugía y procedimientos</a></li>
                  </ul>
                </div>
       

                <div class="col-lg-4 col-md-6 footer-newsletter">
                  <h4>Nuestro sitio web</h4>
                  <p>Aquí podras copiar el URL de la página de PetCare</p>
                  <input type="text" id="inpCopiarEnlace" class="inpCopiarEnlace" readonly value="http://localhost:85/ProyectoVeterinaria/Views/inicio.php" readonly></input>
                  <button class="copiarEnlace" id="copiarEnlace" onclick="copiarEnlacePagina();">Copiar Enlace</button> 
                </div>

              </div>
            </div>
          </div>
      
          <div class="container">
            <div class="copyright">
              &copy; Derechos de <strong><span>PetCare</span></strong>. Reservados todos los derechos
            </div>
            <div class="credits">
              Diseñado por <a href="#">GRUPO#6</a>
            </div>
          </div>
        </footer><!-- End Footer -->';        
    }

?>






<!--<div class="col-lg-4 col-md-6 footer-newsletter">
                  <h4>Nuestro sitio web</h4>
                  <p>Aquí podras copiar el URL de la página de PetCare</p>
                  <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Copiar enlace">
                  </form>
                </div> -->










