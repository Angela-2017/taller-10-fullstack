<!--Se incluyo el archivo USERCONTROLLER.PHP con etiqueta php include q tiene la info PLANA convertida en listas por medio de la creacion de un objeto USER-->
<?php include "./controller/userController.php"; ?>


<div class="table__container">
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
        </tr>   
<!--se crea un foreach para recorrer el arreglo $userList donde se guardo la info de la tabla -->
        <?php
            $userList = getUsers();
            foreach($userList as $user){
         ?>
<!--esta tabla queda dentro del codigo php y se hizo un ciclo foreach y lo q da como resultado es q se muestre los datos de cada objeto en una tabal con el ciclo-->
        <tr>
            <td><?php echo $user->getId(); ?></td><!--echo $user->getId(); va a mostrar el id del usuario -->
            <td><?php echo $user->getName(); ?></td>
            <td><?php echo $user->getlastName(); ?></td>
            <td><?php echo $user->getidNumber(); ?></td>
        </tr>

         <?php } ?><!--corchete q cierra el foreach -->

    </table>
</div>
    

