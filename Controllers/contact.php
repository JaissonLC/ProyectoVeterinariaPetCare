<?php
include_once '../Models/contactModel.php';
include_once 'herramientas.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    include_once "../Models/contactModel.php";


    if (guardarDatosContacto($name, $email, $subject, $message)) {

        header("Location: contact.php?message=Successfull");

        exit();
    } else {

        header("Location: contact.php?message=Error");
        exit();
    }
}

include_once '../Views/contactenos.php';
?>
