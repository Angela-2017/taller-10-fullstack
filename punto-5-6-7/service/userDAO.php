<?php

// este archivo se creo para mostrar en pantalla el objeto CONNECTION q esta en el archivo connetion.php
//para llamar este objeto y elnazarlo con este archivo se debe hacer mediante una etiqueta php include, asi:
    include "connection.php";

//luego se crea una funcion para q desde el controlador se pueda obtener la informacion de la tabla con una funcion, asi:
//con esta funcion se puede mostrar la informacion de todos los usuairos de la tabla
//en el return ya no se puso la variable $query q se ceo para probar si funcionaba la conexion si no q de una vez 
//en el return se puso el atributo para obtener la info de la tabla, asi: return mysqli_query(CONNECTION, "SELECT * FROM usuarios");   y ya no es necesario poner un print para mostrar la informacion
 
//mysql_query (el mysql_queryhace una consulta a la tabla) y debe contener por dentro la constante, luego se pone un SELECT * FROM + el nombre de la tabla de la base de datos de donde se quiere obtener la informacions

function getAllUsers(){
            return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
        }

//funcion para obtener la informacion de un usuario a traves de el ID o CEDULA, (esta funcion solo es de ejemplo no se va a usar en el taller)
//esta funcion usa la mayoria de la anterioir funcion pero usa un WHERE para indicar de donde va a sacar la info y en q variable la va a guardar
//la variable$idNumber se creo en la funcion
function getUserByIdNumber($idNumber){
            return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
        }

?>