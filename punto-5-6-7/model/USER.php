<?php
//se crea la clase USER, los datos se van  a dejar de tipo rpivate
    class User{
        private $id;
        private $name;
        private $lastName;
        private $idNumber;

//ahora se va a a crear el metodo constructor y va a ser de tipo public
//esta funcion va a indica r q para q un suuario se pueda crear va a tener los ATRIBUTOS ($id, $name, $lastName, idNumber ) q estan dentro del metodo constructor
//este objeto tiene un metodo constructor q recibe por parametro (id,name,lastName,idNumber )  y lo q hace es q los datos q recibe por parametro se los pasa  a los atributos del objeto 
    public function __construct(    
            $idP,
            $nameP,
            $lastNameP,
            $idNumberP
        ){
        $this-> id = $idP;
        $this-> name = $nameP;
        $this-> lastName = $lastNameP;
        $this-> idNumber = $idNumberP;
        }

//como los atributos de la clase q se creo en este archivo (USER) estan privados, no hay forma de obtener esta info, por esto se va a crear la funcione GET para obtener informacion
//se hace una funcion GET para cada atributo, esta informacion es decir la funcion getId se va a llamar en el archivo USERCONTROLLER.PHP para mostrar la informacion de la tabla de la base de datos 
    public function getId(){
            return $this->id;
        }
    public function getName(){
            return $this->name;
        }
    public function getlastName(){
            return $this->lastName;
        }
    public function getidNumber(){
            return $this->idNumber;
        }

//La funcion SET se usa para modificar la informacion, se tendria q hacer para cada atributo de la lista del objeto USER,asi:_
//esta funcion se hizo a manera de ejemplo ya q para este taller solo se va a obtener info y esto se va a hacer con elmetodo GET, no se va a modificar nada de la tabla por eso no se va a usar esta funcion SET
    public function setId($idP){
        return $this->$idP;
    }
    }
?>