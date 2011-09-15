<?php

function iniciaBD($host, $usuario, $password, $dbname) {
    $sgbd = mysql_pconnect($host, $usuario, $password);
    if (!sgbd)
        die("Fallo en la conexion al SGBD");

    $db = mysql_select_db($dbname);
    if (!db)
        die("Fallo en la conexion a la BD");
}

function listarUsuarios() {
    $query = "select * from usuario";
    $resultado = mysql_query($query);

    echo"<ul class='usuario'>";
    if ($resultado) {
        while ($usuario = mysql_fetch_array($resultado)) {
            // Saco en variables el codigo completo del libro
            $dni = $usuario['dni'];

            $nombre = htmlentities($usuario['nombre']);
            $apellido1 = htmlentities($usuario['apellido1']);
            $apellido2 = htmlentities($usuario['apellido2']);
            echo "<li>";
            echo "<a href='verImagen.php?dni=$dni&tam=1'><img src='verImagen.php?dni=$dni&tam=2' title='$nombre' alt='Imagen desde Blob' /></a>";
            //echo "<img src='verImagen.php?dni=$dni&tam=2' title='$nombre' alt='Imagen desde Blob' />";
            //echo pImagen();
            
            
            echo "<a href='modificaUsuario.php?dni=$dni' alt='Modifica Usuario' title='Modificar $dni'><img src='b_edit.png'></a>";
            echo " ";
            echo "<a href='borraUsuario.php?dni=$dni' alt='Borrar Usuario' title='Borrar $dni'><img src='b_drop.png'></a>";
            
            echo " ";
            echo "<a href='verPermisos.php?dni=$dni' alt='Ver Permisos' title='Ver Permisos $dni'><img src='b_select.png'></a>";
            //echo " ($dni) - $apellido1 $apellido2, $nombre</li>"; // se mostraba el hueco cuando apellido2 era null
            echo " ($dni) - $apellido1";
            if($apellido2) // Ahora ya no hueco si no hay apellido2
                echo " $apellido2";
            echo ", $nombre</li>";
            
            //echo "(<a href='verPermisos.php?dni=$dni' alt='Ver Permisos' title='Ver Permisos'>$dni</a>) - $apellido1 $apellido2, $nombre</li>";
             listarExperiencias($dni);
             listarFormaciones($dni);
        }
        echo "<li>
            <a href='altaUsuarioG.php' alt='Alta Usuario' title='Alta Usuario'>
            <img src='list-add-user1.png'  height='50'>
            </a>";
        echo "</ul>";
    }
    else
        die("Fallo al listar") . mysql_error();
}

function listarExperiencias($dni) {
    $query = "select * from experiencia WHERE usuario_dni='$dni'";
    $resultado = mysql_query($query);

    if ($resultado) {
        echo"<ul class='experiencia'>";
        echo"<li>Experiencias:";
        if (mysql_num_rows($resultado) == 0)
            echo " Sin experiencia";
        else {
            echo"<ul>\n";
            while ($experiencia = mysql_fetch_array($resultado)) {

                // Saco variables de los datos que me interesan
                $empresa = htmlentities($experiencia['empresa']);
                $cargo = htmlentities($experiencia['cargo']);
                $fechaInicio = date('d/m/Y', strtotime($experiencia['fecha_inicio']));
                $fechaFin = date('d/m/Y', strtotime($experiencia['fecha_fin']));
                echo "<li>$empresa, $cargo ($fechaInicio - $fechaFin)</li>\n";
            }
            echo "</ul>\n"; // Fin lista de experiencias
        }
        echo "</ul>\n"; // Fin encabezado experiencias
    }
    else
        die("Fallo al listar experiencias") . mysql_error();
}

function listarFormaciones($dni) {
    $query = "select * from formacion WHERE usuario_dni='$dni'";
    $resultado = mysql_query($query);

    if ($resultado) {
        echo"<ul class='formacion'>\n";
        echo"<li>Formaciones:\n";
        if (mysql_num_rows($resultado) == 0)
            echo " Sin formacion";
        else {
            echo"<ul>";
            while ($formacion = mysql_fetch_array($resultado)) {

                // Saco variables de los datos que me interesan
                $titulacion = htmlentities($formacion['nombre_titulo']);
                //$fecha = $formacion ['fecha'];
                $fecha = date('d/m/Y', strtotime($formacion['fecha']));
                $horas = $formacion['numero_horas'];
                echo "<li>$titulacion, $fecha, $horas horas</li>\n";
            }
            echo "</ul>\n"; // Fin lista de formaciones
        }
        echo "</ul>\n"; // Fin encabezado formacion
    }
    else
        die("Fallo al listar experiencias") . mysql_error();
}

function guardarImagen($dni, $archivoFoto, $nombreFoto) {
    // Nivel de errores

    error_reporting(E_ALL);

    // Constantes
    # Altura de el thumbnail en píxeles

    define("ALTURA", 50);

    # Nombre del archivo temporal del thumbnail

    define("NAMETHUMB", "/tmp/thumbtemp"); //Esto en servidores Linux, en Windows podría ser:
// define("NAMETHUMB", "c:/windows/temp/thumbtemp"); y te olvidas de los problemas de permisos
    # Servidor de base de datos

    define("DBHOST", "localhost");

    # nombre de la base de datos

    define("DBNAME", "cvdb");

    # Usuario de base de datos

    define("DBUSER", "gcvuser");

    # Password de base de datos

    define("DBPASSWORD", "gcvpass");

    // Mime types permitidos
    $mimetypes = array("image/jpeg", "image/pjpeg", "image/gif", "image/png");

    // Variables de la foto
    $name = $archivoFoto["name"];
    $type = $archivoFoto["type"];
    $tmp_name = $archivoFoto["tmp_name"];
    $size = $archivoFoto["size"];

    // Verificamos si el archivo es una imagen válida

    if (!in_array($type, $mimetypes))
        die("El archivo que subiste no es una imagen válida");

    // Creando el thumbnail

    switch ($type) {

        case $mimetypes[0]:
        case $mimetypes[1]:
            $img = imagecreatefromjpeg($tmp_name);
            break;
        case $mimetypes[2]:
            $img = imagecreatefromgif($tmp_name);
            break;
        case $mimetypes[3]:
            $img = imagecreatefrompng($tmp_name);
            break;
    }

    $datos = getimagesize($tmp_name);

    $ratio = ($datos[1] / ALTURA);

    $ancho = round($datos[0] / $ratio);

    $thumb = imagecreatetruecolor($ancho, ALTURA);

    imagecopyresized($thumb, $img, 0, 0, 0, 0, $ancho, ALTURA, $datos[0], $datos[1]);

    switch ($type) {

        case $mimetypes[0]:

        case $mimetypes[1]:

            imagejpeg($thumb, NAMETHUMB);

            break;

        case $mimetypes[2]:

            imagegif($thumb, NAMETHUMB);

            break;

        case $mimetypes[3]:

            imagepng($thumb, NAMETHUMB);

            break;
    }

    // Extrae los contenidos de las fotos
    # contenido de la foto original

    $fp = fopen($tmp_name, "rb");

    $tfoto = fread($fp, filesize($tmp_name));

    $tfoto = addslashes($tfoto);

    fclose($fp);

    # contenido del thumbnail

    $fp = fopen(NAMETHUMB, "rb");

    $tthumb = fread($fp, filesize(NAMETHUMB));

    $tthumb = addslashes($tthumb);

    fclose($fp);

    // Borra archivos temporales si es que existen
    @unlink($tmp_name);
    @unlink(NAMETHUMB);

    // Guardamos todo en la base de datos
    #nombre de la foto

    //$nombre = $_POST["nombre"]; $nombreFoto
    

    $link = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error($link));
    mysql_select_db(DBNAME, $link) or die(mysql_error($link));

    $sql = "INSERT INTO tabla(dni,nombre, foto, thumb, mime)
    VALUES
    ('$dni', '$nombreFoto', '$tfoto', '$tthumb', '$type')";

    mysql_query($sql, $link) or die(mysql_error($link));

    //echo "Fotos guardadas";

    //exit();
}

 function CaptchaSecurityImages($width='120',$height='40',$characters='6') {
 
      $code = $this->generateCode($characters);
      /* font size will be 75% of the image height */
      $font_size = $height * 0.75;
      $image = imagecreate($width, $height) or die('Cannot initialize new GD image stream');
      /* set the colours */
 
      $background_color = imagecolorallocate($image, 255, 255, 255);
      $text_color = imagecolorallocate($image, 20, 40, 100);
      $noise_color = imagecolorallocate($image, 100, 120, 180);
      /* generate random dots in background */
 
      for( $i=0; $i<($width*$height)/3; $i++ ) {
 
         imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
      }
 
      /* generate random lines in background */
      for( $i=0; $i<($width*$height)/150; $i++ ) {
 
         imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
      }
 
      /* create textbox and add text */
      $textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
      $x = ($width - $textbox[4])/2;
      $y = ($height - $textbox[5])/2;
      imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font , $code) or die('Error in imagettftext function');
      /* output captcha image to browser */
 
      header('Content-Type: image/jpeg');
      imagejpeg($image);
      imagedestroy($image);
      $_SESSION['security_code'] = $code;
   }
 

function pImagen(){
    $img = imagecreate(250, 80);

    $black = imagecolorallocate($img, 0, 0, 0);
    $white = imagecolorallocate($img, 255, 255, 255);
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

    imagerectangle($img, 10, 10, 240, 70, $white);
    imagefilledrectangle($img, 20, 20, 60, 60, $red);
    imagefilledellipse($img, 90, 40, 40, 40, $blue);
    imagefilledellipse($img, 150, 40, 70, 40, $green);
    imagefilledpolygon($img, $corners, 3, $white);

    header("Content-type: image/jpeg");
    imagejpeg($img);
    imagedestroy($img);
}
?>