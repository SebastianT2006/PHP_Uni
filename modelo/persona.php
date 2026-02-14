<?php
class Persona {
    private $codigo;
    private $email;
    private $nombre;
    private $telefono;

    function getCode(){
        return $this -> codigo;
    }
    function setCodigo($codigo){
        $this -> codigo=$codigo;
    }
    ///////////////////////////////

        function getEmail(){
        return $this -> email;
    }
        function setEmail($email){
        $this -> email=$email;
    }
    ////////////////////////////
        function getNombre(){
        return $this -> nombre;
    }
        function setNombre($nombre){
        $this -> nombre=$nombre;
    }
    /////////////////////////////

            function getTelefono(){
        return $this -> telefono;
    }
        function setTelefono($telefono){
        $this -> telefono=$telefono;
    }
}
?>