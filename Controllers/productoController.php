<?php
    include_once '../Models/productoModel.php';
    include_once 'herramientas.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 

    function consultarProductos() {
        
        $respuesta = consultarProductosM();
        if($respuesta -> num_rows > 0){
          echo '<div class="row">';
            while($fila = mysqli_fetch_array($respuesta))
            {
        
         echo' <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
         <form role="form" class="text-start" action="" method="post">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src='. $fila["RutaImagen"] .' class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-skype"></i></a>
                </div>
              </div>
              <div class="member-info">
              <input type="hidden" id="txtProducto" name="txtProducto" value="'.$fila["idProducto"].'">
                <h4>'. $fila["Nombre"] .'</h4>
                <span>'. $fila["Precio"] .'+ IVA'.'</span>
              </div>
              <div>
              <input id="btnAgregar" name="btnAgregar" type="submit" class="appointment-btn" style="border: none;outline: none;" value="Agregar">
              <input type="button" class="appointment-btn" style="border: none;outline: none;" value="Ver Más">
              </div>
            </div>
            </form>
          </div>';
            }
            echo '</div>';
        }  
    }

    if(isset($_POST["btnAgregar"])){
      $idUsuario = $_SESSION["idUsuario"];
      $idProducto = $_POST["txtProducto"];

      registrarProductoCarritoM($idUsuario, $idProducto);
      
      if($respuesta == false)
      {
          $_POST["MsjPantalla"] = "Este curso se encuentra en el carrito o ya se fue comprado anteriormente";
      }
  }

  if(isset($_POST["btnEliminar"]))
    {
        $IdProductoCarrito = $_POST["txtIdProductoCarrito"];
        EliminarProductoCarritoM($IdProductoCarrito);
    } 

  function ConsultarResumenCarrito()
  {
    $idUsuario = $_SESSION["idUsuario"];
    $_SESSION["CantidadCarrito"] = 0;
    $_SESSION["SubTotalCarrito"] = 0;
    $_SESSION["TotalCarrito"] = 0;

    $respuesta = ConsultarResumenCarritoM($idUsuario);

    if($respuesta -> num_rows > 0){
      $datos = mysqli_fetch_array($respuesta);
      $_SESSION["CantidadCarrito"] = $datos["Cantidad"];
      $_SESSION["SubTotalCarrito"] = $datos["Subtotal"];
      $_SESSION["TotalCarrito"] = $datos["Total"];
    }
  }

  function ConsultarDetalleCarrito()
    {
        $idUsuario = $_SESSION["idUsuario"];

        $respuesta = ConsultarDetalleCarritoM($idUsuario);

        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                echo    '<form role="form" class="text-start" action="" method="post">
                        <tr>
                        <td>'. $fila["Nombre"] .'</td>
                        <td>'. number_format($fila["Precio"],2) .'</td>
                        <td>'. number_format($fila["Impuesto"],2) .'</td>
                        <td>'. number_format($fila["Total"],2) .'</td>
                        <td> 
                        <input type="hidden" id="txtIdProductoCarrito" name="txtIdProductoCarrito" value="' . $fila["IdProductoCarrito"] .'">
                        <input id="btnEliminar" name="btnEliminar" type="submit" value="Eliminar" class="btn"></td>
                        </tr></form>';
            }
        }
    }

    function ConsultarDetalleProductos()
    {
      $idUsuario = $_SESSION["idUsuario"];

        $respuesta = ConsultarDetalleProductosM($idUsuario);

        if($respuesta -> num_rows > 0)
        {
            while($fila = mysqli_fetch_array($respuesta))
            {
                echo    '<form role="form" class="text-start" action="" method="post">
                        <tr>
                        <td>'. $fila["Nombre"] .'</td>
                        <td>'. number_format($fila["PrecioFinal"],2) .'</td>
                        <td>'. number_format($fila["Impuesto"],2) .'</td>
                        <td>'. number_format($fila["Total"],2) .'</td>
                        </tr></form>';
            }
        }
    }

    if(isset($_POST["btnPagar"]))
    {
        $idUsuario = $_SESSION["idUsuario"];
        PagarCarritoM($idUsuario);
        ConsultarResumenCarrito();
        header("location: ../Views/historialCompra.php");
    }

?>