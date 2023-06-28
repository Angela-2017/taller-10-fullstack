<!-- muestra la variable $mensaje-->

<?php
// Verificar si las variables están definidas antes de utilizarlas
if (isset($username) && isset($age)) {
    echo $username . " su edad es: " . $age . " años";
} else {
    echo "No se han proporcionado valores para mostrar.";
}
?>
