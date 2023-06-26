
<?php include "./controller/calculationcontroller.php"; ?><!--Se pone una etiqueta include para llamar la logica del archivo CALCULATIONCONTROLLER.PHP-->


<form method="post"><!--Etiqueta form para crear un formularios para capturar info de usuario para logica de PHP-->
    
    <h2>Registro de usuario</h2><!-- titulo-->
    
 
    <div class="form__row">
           <!--Este div contiene los atributos para digitar el nombre y se guarda en el atributo NAME-->
        <div>
            <label for="name">Nombres del usuario</label>
            
        <input  
            id="name"
            type="text"
            name="user_name"
            placeholder="jhon">
        </div>
       
        <div>
            <!--Este div contiene los atributos para digitar la edad y se guarda en el atributo NAME-->
            <label for="age">Digite su edad</label>
            <input  
                id="age"
                type="text"
                name="age_user"
                placeholder="18">
        </div>
        </div>
    <button>Registrar</button>
</form>