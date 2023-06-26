<!--Aqui esta la logica del archivo y esta debe ser llamada en el formulario para q funcione-->
<?php


//se establecen variable para usar en el if 
    $firstNumber=0;
    $secondNumber=0;
    $operationType="";
    $message="";
    $result="";

//en este IF con ISSET se verifican q exirtan las variables para luyego ejecutar las operaciones por dentro del este if
if(isset($_POST["first_number"]) &&  isset($_POST["second_number"]) && 
isset($_POST["type_operation"])){
        $firstNumber= intval($_POST["first_number"]);//metodo post q solo contiene info del primer numeroa operar
        $secondNumber= intval($_POST["second_number"]);//metodo post q solo contiene info de tipo de segundo nombre
        $operationType=$_POST["type_operation"];//trae info del menu (operacion a realizar)
//Se crea una variable para calcular el valor del precio fijo de la boleta * el numero de personas y obtener el valor a pagar antes de descuentos
     
        //se cre un switch case para calcular la operacion para cada caso
    switch ($operationType){
        case "A":
            $result=$firstNumber+$secondNumber;//operacion
            $message= "El resultado es: " . $result;//mensaje q se va a mostrar en resul.php
            break;
        case "B":
            $result=$firstNumber-$secondNumber;
            $message= "El resultado es: " . $result;
            break;
        case "C":
            $result=$firstNumber*$secondNumber;
            $message= "El resultado es: " . $result;
            break;
        case "D":
            $result=$firstNumber/$secondNumber;
            $message= "El resultado es: " . $result;
            break;
    }

}
     
?>