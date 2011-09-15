<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Imagen a Blob</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>

    <body>
        <form name="frmimage" id="frmimage" method="post"
              enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre: <input type="text" id="nombre" name="nombre" /><br />
            Imagen: <input type="file" id="foto" name="foto" /><br />
            <input type="submit" name="enviar" id="enviar" value="Guardar" />
        </form>
    </body>
</html>

<?php
// Verificamos que el formulario no ha sido enviado aun

$postback = (isset($_POST["enviar"])) ? true : false;

if($postback){

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

  $name = $_FILES["foto"]["name"];

  $type = $_FILES["foto"]["type"];

  $tmp_name = $_FILES["foto"]["tmp_name"];

  $size = $_FILES["foto"]["size"];

  // Verificamos si el archivo es una imagen válida

  if(!in_array($type, $mimetypes))

    die("El archivo que subiste no es una imagen válida");

  // Creando el thumbnail

  switch($type) {

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

  $ratio = ($datos[1]/ALTURA);

  $ancho = round($datos[0]/$ratio);

  $thumb = imagecreatetruecolor($ancho, ALTURA);

  imagecopyresized($thumb, $img, 0, 0, 0, 0, $ancho, ALTURA, $datos[0], $datos[1]);

  switch($type) {

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

  $nombre = $_POST["nombre"];

  $link = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error($link));;

  mysql_select_db(DBNAME, $link) or die(mysql_error($link));

  $sql = "INSERT INTO tabla(nombre, foto, thumb, mime)

    VALUES

    ('$nombre', '$tfoto', '$tthumb', '$type')";

  mysql_query($sql, $link) or die(mysql_error($link));

  echo "Fotos guardadas";

  exit();

}
?>
