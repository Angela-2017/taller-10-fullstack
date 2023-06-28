<?php
// require_once funciona como un include y llama al archivo ucontrolador.php q tiene la funcion q calcula la edad
//se debe inlcuir en este archivo ucontroller.php q tiene el objeto UserController() para acceder al metodo calculateAge() q contiene el calculo de la fecha
require_once "ucontroller.php";

$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {// Este IF comprueba si se ha enviado el formulario
    // Obtener el nombre y apellidos del usuario
    $username = $_POST["user_name"];// se establece la variable  $username y con $_POST["user_name"]  se llama lo q se guardo en el formulario q digito el usuario
    $birthdate = $_POST["date_user"];//se establece la variable   $birthdate y con $_POST["user_name"]  se llama lo q se guardo en el formulario q digito el usuario

    // Crear una instancia del controlador
    $controller = new UserController();//se llama a la clase UserController() creada en el archivo UCONTROLLER.PHP q tiene q tiene el metodo calculateAge() y se guarda en $controller

//$controller = new UserController(); Esta creando un objeto de la clase UserController() q esta a su vez contiene el metodo calculateAge() q tiene la operacion del calculo de la edad
//esta clase UserController() con este metodo calculateAge() esta en el archivo UCONTROLLER.PHP, una vez se crea la instancia del objeto, asi: /$controller = new UserController(), 
// ahora se  puede manipular el metodo calculateAge() con la siguiente linea de codigo
//se crea la variable $age para guardar el calculo, luego se llama la variable $controller q inicio el objeto y con -> se accede al metodo calculateAge() 
//y dentro del metodo calculateAge() se llama a la variable  $birthdate q cintiene la fecha de nacimiento q digito el usuario
//calculateage() es un metodo de la clase UserController() 


    // Calcular la edad utilizando la instancia del controlador
    $age = $controller->calculateAge($birthdate);

}
?>




