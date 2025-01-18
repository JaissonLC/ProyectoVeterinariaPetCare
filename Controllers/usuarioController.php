<?php
    include_once '../Models/usuarioModel.php';
    include_once 'herramientas.php';

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 

    if(isset($_POST["btnRegistro"])){
        $Identificacion = $_POST["infoIdentificacion"];
        $NombreCompleto = $_POST["infoNombreCompleto"];
        $NombreDeUsuario = $_POST["infoNombreDeUsuario"];
        $Correo = $_POST["infoCorreo"];
        $Contraseña = $_POST["infoContraseña"];

        $respuesta = registrarUsuario($Identificacion, $NombreCompleto, $NombreDeUsuario, $Correo, $Contraseña);
        
        if($respuesta == true)
        {
            header("location: ../Views/login.php");
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido registrar su información";
        }
    }

    if(isset($_POST["btnInicioSesion"])){
        try{
        $Correo = $_POST["infoCorreo"];
        $Contraseña = $_POST["infoContraseña"];

        $respuesta = validarSesion($Correo, $Contraseña);

        if($respuesta -> num_rows > 0){
            $datos = mysqli_fetch_array($respuesta);
            $_SESSION["idUsuario"] = $datos["idUsuario"];
            $_SESSION["RolUsuario"] = $datos["idRol"];
            $_SESSION["NombreRolUsuario"] = $datos["NombreRol"];
            $_SESSION["NombreDeUsuario"] = $datos["NombreDeUsuario"];
            $_SESSION["Correo"] = $datos["Correo"];
            $_SESSION["Contraseña"] = $datos["Contraseña"];
            header("location: ../Views/inicio.php");
        }else{
            $_POST["MsjPantalla"] = "No se ha podido validar su información";
        }
        }catch(Exception $error){
            
        }
    }

    if(isset($_POST["btnRecuperar"]))
    {
        $Correo = $_POST["infoCorreo"];

        $respuesta = consultaDeDatos($Correo);

        if($respuesta -> num_rows > 0)
        {
            $datos = mysqli_fetch_array($respuesta);
            $codigoDeSeguridad = randomPassword();

            $mensaje = "<html><body>
                        Estimado(a)" . $datos["NombreCompleto"] . "<br/>
                        Se ha generado el siguente código de seguridad: <b>" . $codigoDeSeguridad . "</b><br/>
                        Recuerde realizar el cambio de contraseña una vez que ingrese al sistema<br/><br/>
                        Muchas gracias.
                        </body></html>";

            actualizarContraseña($datos["idUsuario"], $codigoDeSeguridad);
            enviarCorreo($Correo, 'Recuperar Contraseña', $mensaje);
            header("location: ../Views/confirmacionDeClave.php?qs=" . $Correo);
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido recuperar su información";
        }
    }

    function randomPassword() {
        $alphabet = '0123456789';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    if(isset($_POST["btnCerrarSesion"]))
    {
        session_destroy();
        header("location: ../Views/login.php");
    }


    if(isset($_POST["btnSolicitarCitaConsulta"])){
        $NombreCompleto = $_POST["name"];
        $Correo = $_POST["email"];
        $Telefono = $_POST["phone"];
        $FechaCita = $_POST["date"];
        $Departamento = $_POST["department"];
        $Doctor = $_POST["doctor"];
        $Mensaje = $_POST["message"];

        $respuesta = registrarCitaConsulta($NombreCompleto, $Correo, $Telefono, $FechaCita, $Departamento, $Doctor, $Mensaje);
        
        if($respuesta == true)
        {
            $_POST["MsjPantalla"] = "Se solicito la cita con exito";
        }
        else
        {
            $_POST["MsjPantalla"] = "No se ha podido registrar su información";
        }
    }
  

    /*if(isset($_POST["ValidarCodigoSeguridad"]))
    {
        $correo = $_POST["correo"];
        $codigo = $_POST["codigo"];

        $respuesta = ValidarCodigoM($correo, $codigo);

        if($respuesta -> num_rows > 0)
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }

    if(isset($_POST["btnCambiarClave"]))
    {
        $correo = $_POST["txtCorreo"];
        $contrasenna = $_POST["txtContrasenna"];        
        ActualizarContrasennaM($correo, $contrasenna);
        header("location: ../Views/login.php");
    }    

    if(isset($_POST["btnCerrarSesion"]))
    {
        session_destroy();
        header("location: ../Views/login.php");
    }

    function randomPassword() {
        $alphabet = '0123456789';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }*/

?>