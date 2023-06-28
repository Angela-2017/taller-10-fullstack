
<?php include "./controller/calculationcontroller.php"; ?><!--Se pone una etiqueta include para llamar la logica del archivo CALCULATIONCONTROLLER.PHP-->


<form method="post"><!--Etiqueta form para crear un formularios para capturar info de usuario para logica de PHP-->
    
    <h2>Registro de usuario</h2><!-- titulo-->
    
 
    <div class="form__row">
           <!--Este div contiene los atributos para digitar el nombre y se guarda en el atributo NAME-->
        <div>
            <label for="name">Nombre del usuario</label>
            
        <input  
            id="name"
            type="text"
            name="user_name"
            placeholder="jhon">
        </div>
       
        <div>
            <!--Este div contiene los atributos para digitar la edad y se guarda en el atributo NAME-->
            <!--date para q se cree un calendario-->
            <label for="date">Digite su edad</label>
            <input  
                id="age"
                type="date"
                name="date_user"
                placeholder="01/01/1999">
        </div>
        </div>
    <button>Registrar</button>
</form>