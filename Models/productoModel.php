<?php

    include_once 'conexionModel.php';
    function consultarProductosM()
    {
        $enlace = abrirBD();
        $sentecia = "CALL ConsultarProductos()";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    }

    function registrarProductoCarritoM($idUsuario, $idProducto){
        $enlace = abrirBD();
        $sentecia = "CALL RegistrarProductoCarrito('$idUsuario', '$idProducto')";
        $enlace -> query($sentecia);
        cerrarBD($enlace);
    }

    function EliminarProductoCarritoM($IdProductoCarrito)
    {
        $enlace = abrirBD();
        $sentecia = "CALL EliminarProductoCarrito('$IdProductoCarrito')";
        $enlace -> query($sentecia);
        cerrarBD($enlace);
    }

    function ConsultarResumenCarritoM($idUsuario)
    {
        $enlace = abrirBD();
        $sentecia = "CALL ConsultarResumenCarrito('$idUsuario')";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    }

    function ConsultarDetalleCarritoM($idUsuario)
    {
        $enlace = abrirBD();
        $sentecia = "CALL ConsultarDetalleCarrito('$idUsuario')";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    }

    function ConsultarDetalleProductosM($idUsuario)
    {
        $enlace = abrirBD();
        $sentecia = "CALL ConsultarDetalleProductos('$idUsuario')";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    } 

    function PagarCarritoM($idUsuario)
    {
        $enlace = abrirBD();
        $sentecia = "CALL PagarCarrito('$idUsuario')";
        $enlace -> query($sentecia);
        cerrarBD($enlace);
    }
?>