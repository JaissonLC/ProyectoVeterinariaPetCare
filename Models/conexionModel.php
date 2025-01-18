<?php
   function abrirBD(){
        return mysqli_connect("127.0.0.1:3307", "root", "", "veterinariapetcare");
   }

   function cerrarBD($enlace){
        mysqli_close($enlace);
   }
?>