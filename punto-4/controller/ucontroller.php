<?php
    // Archivo UserController.php

    class UserController {
        public function calculateAge($birthdate) {

            // Obtener la fecha actual
//se crea $currentDate y se inicia el objeto DateTime() q contiene la fecha actual
            $currentDate = new DateTime();

            // Crear un objeto DateTime a partir de la fecha de nacimiento
//se crea la variable $birthdateObj y un objeto DateTime a partir de la fecha de nacimiento
            $birthdateObj = new DateTime($birthdate);

            // Calcular la diferencia de años entre la fecha actual y la fecha de nacimiento
//se crea $ageInterval y para sacar la diferencia de años se pone $currentDate y se calcula con ->diff (se utiliza para calcular la diferencia entre dos objetos DateTime. Específicamente, diff() devuelve un objeto DateInterval que representa la diferencia entre dos fechas.)
            $ageInterval = $currentDate->diff($birthdateObj);
            $age = $ageInterval->y;//Cuando se utiliza la función diff() para calcular la diferencia entre dos objetos DateTime, se crea un objeto DateInterval q para este ejercicio se llamo ageinterval que contiene información sobre la diferencia entre las fechas. La propiedad ->Y se utiliza para acceder al número de años de diferencia entre las fechas.

            return $age;//se pide q retorne $age porq contiene la diferencia de años de una fecha a otra
        }
    }
?>
