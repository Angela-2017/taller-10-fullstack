


<form action="./view/pages/user-info-page.php" method="get"><!--Etiqueta form para crear un formularios para capturar info de usuario para logica de PHP-->
     <!--Se uso el metodo GET  y el atributo action en form para q despues de q usuario de clic se dirija a otra pagina y muestre la info-->
    <h2>Registro de usuario</h2><!-- titulo-->
    
 
    <div class="form__row">
           <!--Este div contiene los atributos para digitar el primer nombre y se guarda en el atributo NAME-->
        <div>
            <label for="first-name">Nombres del usuario</label>
            
        <input  
            id="first-name"
            type="text"
            name="first_name"
            placeholder="jhon">
        </div>
        <div>
            <!--Este div contiene los atributos para digitar el APELLIDO y se guarda en el atributo NAME-->
            <label for="last-name">Apellido del usuario</label>
            <input  
                id="last-name"
                type="text"
                name="last_name"
                placeholder="Doe">
        </div>
        <div>
            <!--Este div contiene los atributos para digitar el APELLIDO y se guarda en el atributo NAME-->
            <label for="id">Cedula del usuario</label>
            <input  
                id="id"
                type="text"
                name="user_id"
                placeholder="1000000000">
        </div>
        </div>
    <button>Registrar</button>
</form>