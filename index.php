<?php
include "funciones.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gesti&oacute;n CV</title>
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    </head>
    <body>
        <h1>Menu principal</h1>
        <?php
        iniciaBD("localhost", "gcvuser", "gcvpass", "cvdb");
        listarUsuarios();
        ?>
        
    </body>
</html>