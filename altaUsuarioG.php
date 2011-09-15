<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Alta usuario </title>
        <LINK REL=StyleSheet HREF="estilo.css" TYPE="text/css">
    </head>
    <body>
        <h1>Alta usuario</h1>
        <form action="altaUsuarioP.php" method="POST" id="frmimage" enctype="multipart/form-data">
            <label>DNI</label>
            <input type="text" name="dni" value="" /><br>        
            <label>Nombre</label>
            <input type="text" name="nombre" value="" /><br>
            <label>Apellido1</label>
            <input type="text" name="apellido1" value="" /><br>
            <label>Apellido2</label>
            <input type="text" name="apellido2" value="" /><br>

            <!--Nombre: <input type="text" id="nombrefoto" name="nombrefoto" /><br /> -->
            <label>Imagen</label><input type="file" id="ficherofoto" name="ficherofoto" /><br />

            <input type="submit" name="" value="Alta" />
            <input type="reset" name="" value="Borrar campos" />            
        </form>
        <br><a href='index.php' alt="Vuelta al men&uacute;" title="Vuelta al men&uacute;">Inicio</a>
    </body>
</html>
