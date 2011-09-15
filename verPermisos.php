<?php
include "funciones.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Permisos para usuario</h1>
        <?php
        $dni = $_GET['dni'];

        iniciaBD("localhost", "gcvuser", "gcvpass", "cvdb");
        $query = "select * from carnet where usuario_dni='$dni'";

        $resultado = mysql_query($query);
        if ($resultado) {
            echo "El usuario ($dni) tiene los siguientes carnets:";

            if (mysql_num_rows($resultado) == 0)
                echo " Sin carnets";
            else {
                echo "<ul>";
                while ($carnet = mysql_fetch_array($resultado)) {
                    // Saco en variables el codigo completo del libro
                    //$fechaExp = $carnet['fecha_exp'];
                    //$fechaCad = $carnet['fecha_cad'];
                    $fechaExp = date('d/m/Y', strtotime($carnet['fecha_exp']));
                    $fechaCad = date('d/m/Y', strtotime($carnet['fecha_cad']));
                    $tipo = $carnet['tipo_carnet_tipo'];
                    echo "<li>$tipo, $fechaExp - $fechaCad\n";
                }
            }
            echo "</ul>";
        }
        ?>
        <br><a href='index.php' alt="Vuelta al men&uacute;" title="Vuelta al men&uacute;">Inicio</a>
    </body>
</html>
