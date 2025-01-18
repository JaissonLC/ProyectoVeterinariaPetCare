<?php
    include_once 'conexionModel.php';

    function registrarUsuario($Identificacion, $NombreCompleto, $NombreDeUsuario, $Correo, $Contraseña){
        try{
            $enlace = abrirBD();
            $sentecia = "CALL registrarUsuario('$Identificacion','$NombreCompleto','$NombreDeUsuario','$Correo','$Contraseña')";
            $respuesta = $enlace -> query($sentecia);
            cerrarBD($enlace);

            return $respuesta;
        }
        catch(Exception $e){
            return false;
        }
    }

    function validarSesion($Correo, $Contraseña)
    {
        $enlace = abrirBD();
        $sentecia = "CALL validarSesion('$Correo','$Contraseña')";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    }

    function consultaDeDatos($Correo)
    {
        $enlace = abrirBD();
        $sentecia = "CALL consultaDeDatos('$Correo')";
        $respuesta = $enlace -> query($sentecia);
        cerrarBD($enlace);

        return $respuesta;
    }

    function actualizarContraseña($idUsuario, $codigoDeSeguridad) 
    {
        $enlace = abrirBD();
        $sentecia = "CALL actualizarContraseña('$idUsuario', '$codigoDeSeguridad')";
        $enlace -> query($sentecia);
        cerrarBD($enlace);
    }  


    function registrarCitaConsulta($NombreCompleto, $Correo, $Telefono, $FechaCita, $Departamento, $Doctor, $Mensaje){
        try{
            $enlace = abrirBD();
            $sentecia = "CALL registrarCitaConsulta('$NombreCompleto','$Correo','$Telefono','$FechaCita','$Departamento','$Doctor','$Mensaje')";
            $respuesta = $enlace -> query($sentecia);
            cerrarBD($enlace);

            return $respuesta;
        }
        catch(Exception $e){
            return false;
        }
    }
    
   
?>
































<!--function ValidarCodigoM($correo, $codigo)
    {
        $enlace = OpenBD();
        $sentecia = "CALL ValidarCodigo('$correo','$codigo')";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);

        return $respuesta;
    }

    function ActualizarContrasennaM($correo, $contrasenna)
    {
        $enlace = OpenBD();
        $sentecia = "CALL ActualizarContrasenna('$correo','$contrasenna')";
        $respuesta = $enlace -> query($sentecia);
        CloseBD($enlace);
    }*/-->