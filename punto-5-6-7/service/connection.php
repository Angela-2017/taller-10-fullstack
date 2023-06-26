<?php
//este archivo contiene la conexion de la base de datos a php


//primero se crea la constante,luego se crea un objeto de conexion que es: new mysqli(), y dentro de mysqli 
//se debe llamar al metodo constructor q se usa para la programacion orientada a objetos




//en el mysqli se pone primero el servidor q es "localhost" q hace parte de la url del admin q se abre de XAMPP
//(http://localhost/phpmyadmin/) donde se creo la base de datos "root" este usuario es el usuario por defecto,
//luego se debe pasar el nombre de usuario, y lo ultimo q pregunta es a q base se quiere conectar y se pone 
//"mi_proyecto" q fue la base de datos q se creo para este ejercicio


//se usa una constante porq la conexion no va a cambiar
    const CONNECTION = new mysqli("localhost", "root", "", "mi_proyecto");

//para comprobar si la conexion de la base de datos a php crea una variable $query y se iguala con el atributo
//para llamar la info de la tabla de la base de datos q se creo: 
// $query = mysqli_query(CONNECTION, "SELECT * FROM usuarios");  y despues con:  print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
//se mostraba en pantalla la informacion, pero esto solo se hizo para comprobar si la conexionde la base de datos a php funciono


?>