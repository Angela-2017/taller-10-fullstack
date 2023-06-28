<!--Aqui esta la logica del archivo y esta debe ser llamada en el formulario para q funcione-->
<?php
$message = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){//se debe pone esta linea de codigo para asegurar se de q coincida el metodo post del formulario con este archivo

//obtener el nombre y apellidos de usuario
$name= $_POST["user_name"];


        if(isset($_POST["age_user"])){
            $ageUser=$_POST["age_user"]; //se debe llamar la edad q usuario digito  para compararla en el IF
            $mensaje = "";
            //IF PARA DETERMINAR SI PERSONA ES MAYOR DE EDAD O NO
                if  ($ageUser < 18){
                    $message= $name . " usted no es mayor de edad";//devuelve si no es mayor de edad
                }else{
                    $message= $name . " usted es mayor de edad";
                }
        }
    }
        

?>