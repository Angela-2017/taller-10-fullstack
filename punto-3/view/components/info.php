<!-- SE LLAMA AL METODO GET PARA CADA UNA DE LAS VARIABLES Y DENTRO DE LAS LLAVES SE TOMA EL NOMBRE Q SE ESTABLECIO PARA EL ATRIBUTO NAME DEL FORMULARIO-->

<div class="user-info__container">
    <div>
        <b>Nombres del usuario:</b>
        <span><?php echo $_GET["first_name"] ?></span>
    </div>
    <div>
        <b>Apellidos del usuario</b>
        <span><?php echo $_GET["last_name"] ?></span>
    </div>
    <div>
        <b>Cedula del usuario</b>
        <span><?php echo $_GET["user_id"] ?></span>
    </div>
</div>