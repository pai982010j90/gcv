<?php

/*
 * Mostrar una imagen desde blob mysql usando PHP
 * Autor: Braulio Andrés Soncco Pimentel <braulio@buayacorp.com>
 * http://www.buayacorp.com/
 * 
 * Este script está bajo licencia de Creative Commons 
 * http://creativecommons.org/licenses/by/2.0/
 */

// Nivel de errores
error_reporting(E_ALL);

// Constantes
# Servidor de base de datos
define("DBHOST", "localhost");
# nombre de la base de datos
define("DBNAME", "cvdb");
# Usuario de base de datos
define("DBUSER", "gcvuser");
# Password de base de datos
define("DBPASSWORD", "gcvpass");

// Parámetros para recuperar la imagen
# Recuperamos el parámetro GET con el id único de la foto que queremos mostrar
$idfoto = (isset($_GET["dni"])) ? $_GET["dni"] : exit();
# Recuperamos el parámetro GET para elegir entre la miniatura o la foto real
$tam = (isset($_GET["tam"])) ? $_GET["tam"] : 1;

// Escojemos la foto real o la miniatura según la variable $tam
switch ($tam) {
    case "1":
        $campo = "foto";
        break;
        ;
    case "2":
        $campo = "thumb";
        break;
        ;
    default:
        $campo = "foto";
        break;
        ;
}

// Recuperamos la foto de la tabla
$sql = "SELECT $campo, mime
			FROM tabla 
			WHERE dni = $idfoto";

# Conexión a la base de datos
$link = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error($link));
;
mysql_select_db(DBNAME, $link) or die(mysql_error($link));

$conn = mysql_query($sql, $link) or die(mysql_error($link));
$filas = mysql_num_rows($conn);
if ($filas > 0) {
    $datos = mysql_fetch_array($conn);
    //if(sizeof($datos)>0){
    // La imagen
    $imagen = $datos[0];
    // El mime type de la imagen
    $mime = $datos[1];

    // Gracias a esta cabecera, podemos ver la imagen 
    // que acabamos de recuperar del campo blob
    header("Content-Type: $mime");
    // Muestra la imagen
    echo $imagen;
    //echo "imagen:$image, mime=$mime";
} else { // Si no hay foto para ese DNI
    // $imagen = imageCreateFromPNG("ciego-icono-9836");
    //header("Content-type: image/png");
    //echo $imagen;


    /*  $im  = imagecreate (150, 30); /* Crear una imagen en blanco */
    /* $bgc = imagecolorallocate ($im, 255, 255, 255);
      $tc  = imagecolorallocate ($im, 0, 0, 0);
      imagefilledrectangle ($im, 0, 0, 150, 30, $bgc); */
    /* Mostrar un mensaje de error */
    /* imagestring ($im, 1, 5, 5, "Error cargando $idfoto", $tc);
      return $im; */
    $img = imagecreate(50, 50);
    //$img = imagecreatetruecolor(50, 50);
    

    $white = imagecolorallocate($img, 255, 255, 255);
    //$white= imagecolorallocatealpha ($img, 255, 255, 255,127);
    imagecolortransparent($img,$white);
    
    $black = imagecolorallocate($img, 0, 0, 0);
    

    $red = imagecolorallocate($img, 255, 0, 0);
    $green = imagecolorallocate($img, 0, 255, 0);
    $blue = imagecolorallocate($img, 0, 0, 255);

    $corners = array(
        0 => 190,
        1 => 60,
        2 => 210,
        3 => 20,
        4 => 230,
        5 => 60,
    );

    /* imagerectangle($img, 10, 10, 240, 70, $white);
      imagefilledrectangle($img, 20, 20, 60, 60, $red);
      imagefilledellipse($img, 90, 40, 40, 40, $blue);
      imagefilledellipse($img, 150, 40, 70, 40, $green);
      imagefilledpolygon($img, $corners, 3, $white); */

    header("Content-type: image/jpeg");

    imagestring($img, 1, 10, 30, "No foto", $blue);
    imagejpeg($img);
    imagedestroy($img);
}
?>
