<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../../styles/general-styles (1).css"><!--Se pone el link de los estilos generales-->
    <link rel="stylesheet" href="../styles/info.css"><!--estilos del archivo info.php se deben poner en esta pagina ya q en el index principal no van-->
</head>
<body>
    <!--A esta pagina se va a redirigir despues de q usuario de clic en boton del formulario-->
    <h1>Datos del usuario</h1>
    <?php include "../components/info.php"; ?><!--Se incluyes el archivo info.php-->
    <div class="goback">
        <a href="../../index.php">Volver a la pagina anterior</a><!--link para volver a la pagina principal es decir lo devuelve al archivo principal index.php-->
    </div>
</body>
</html>