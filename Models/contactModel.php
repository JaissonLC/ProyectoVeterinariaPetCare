<?php
include_once 'conexionModel.php';

function guardarDatosContacto($name, $email, $subject, $message)
{

    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $dbname = "veterinariapetcare";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "INSERT INTO tabla_contactos (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->execute();


        return true;
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
        die();
        return false;
    }
}
?>
