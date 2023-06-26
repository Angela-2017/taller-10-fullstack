<?php
//en este archivo se enlaza el userDAO.php q manipula la conexion (connection.php) del enlace da la tabla de la base de datos q se creo
    include "./service/userDAO.php";
//se creo la funcion getUsers para llamar a los usuarios de la tabla de la base de datos, dentro de la funcion
//se creo la variable $$usersQuery y se igualo a la funcion getAllUsers creada en el archivo userDAO.php 

//despues de crear en el archivo USER.PHP el objeto para manipular la info de la tabla de la base de datos 
//ahora se va a a anclar ese archivo USER.php de la carpeta Model en este controlador con una etiqueta php include, asi:
    include "./model/USER.php";

    function getUsers(){
        $usersQuery=getAllUsers();//$usersQuery llama toda la info de la tabla de la BD,   
        $userList=array();//aqui se CREA el arreglo para organizar la informacion q se va a convertir en ojetos en el archivo USER.PHP

//misqli_fetch_assoc va a tomar linea por linea de informacion de cada usuario, en vez de tomar toda la informacion
        while($row = mysqli_fetch_assoc($usersQuery)){//esta funcion lo q hace es q indica q toma solo la primera linea, y esa linea la va a guardar en una variable llamada $row, cuando no encuenra mas linea de infromacion se acaba el ciclo
//aqui se crea la primer alinea de info plana en un objeto, se crea la variable $user = new User asi:
//Aqui realmente se esta llmanado al metodo constructor del objeto USER q se creo en el archivo USER.PHP, pero para poder llamarlo primero hay q pasarle los atributos del metodo si no no funciona 
        $user = new User(
            $row["id"],//este row guardo de la tabla de la BD la info de la primera linea de id
            $row["nombre"],//este row guardo de la tabla de la BD la info de la primera linea de nombre
            $row["apellido"],//este row guardo de la tabla de la BD la info de la primera linea de apellido
            $row["cedula"],//este row guardo de la tabla de la BD la info de la primera linea de cedula
            ); 
        $userList[]=$user;//aqui se grega a nuestra lista con esta variable
        }
        return $userList; //se tiene q retornar el userList para q en la capa de vista pueda usar esta lista de usuarios
    }

?>