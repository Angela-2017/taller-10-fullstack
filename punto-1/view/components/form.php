<!--SE DEBE PONER AQUI EL INCLUDE DE LA LOGICA (calculationcontroller.php) Y NO EN EL INDEX.PHP PRINCIPAL-->
<?php include "./controller/calculationcontroller.php"; ?><!--Se pone una etiqueta include para llamar la logica del archivo CALCULATIONCONTROLLER.PHP-->
 
 
 <!-- EN ESTE FORMULARIO SE ESTA USANDO EL METODO POST para obtener la info en la misma pagina cuando usuario de clic en boton para calcular precio de boletas de acuerdo a tipo de afiliacion y numero de personas-->
<form method="post"><!--Etiqueta form para crear un formularios para capturar info de usuario para logica de PHP-->
    
    <h2>Calculadora de Entradas</h2><!-- titulo-->
    

    <div class="form__row">
            <!--Este div contiene los atributos para digitar el primer numero a operar y se guarda en el atributo NAME-->
        <div>
            <label for="first-number">Primer numero</label>
        <input  
            id="first-number"
            type="text"
            name="first_number"
            placeholder="30">
        </div>
<!--este div contiene los atributos del segundo numero a oeprar-->
        <div>
            <label for="second-number">Segundo numero</label>
<!--el id debe coincidir con for de la etiqueta de label-->
<!--el placeholder es un texto guia antes de q usuario digite-->
        <input  
            id="second-number"
            type="text"
            name="second_number"
            placeholder="30">
        </div>
<!--Este div contiene los atributos para crear un menu y q usuario escoja opcion y esta se guarda en el atributo NAME-->
<label for="type-operation">Tipo de operacion</label>
        <div>
            <select name="type_operation" 
            id="type-operation">
                <option value="A">SUMA</option>
                <option value="B">RESTA</option>
                <option value="C">MULTIPLICACION</option>
                <option value="D">DIVISION</option> 
            </select>
        </div>
        </div>
    <button>Calcular</button>
</form>