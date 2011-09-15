<?php
include "funciones.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alta usuario - Procediendo</title>
    </head>
    <body>
        <?php
        iniciaBD("localhost", "gcvuser", "gcvpass", "cvdb");

        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];

        //$ficherofoto = $_POST['ficherofoto'];
        //$ficherofoto =$_FILES['ficherofoto']['name'];
        //$foto = $_POST['nombrefoto'];
        
        //echo "Fichero foto: $ficherofoto, nombref=$foto<br>";

        $query = " INSERT INTO usuario 
              (dni, nombre, apellido1, apellido2) 
              VALUES($dni, '$nombre', '$apellido1', '$apellido2')";
        
        //echo $query;

        $resultado = mysql_query($query);
        if ($resultado) {
            guardarImagen($dni, $_FILES['ficherofoto'], $nombre);
            echo " Alta de usuario ($dni) correcta.";
        }
        else
            echo("Fallo al insertar usuario ($dni)" . mysql_error());
        ?>
        <br><a href='index.php' alt="Vuelta al men&uacute;" title="Vuelta al men&uacute;">Inicio</a>
    </body>
</html>
