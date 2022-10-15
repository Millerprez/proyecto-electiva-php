<?php

    class Login {

        var $id;
        var $clave;

        function __construct($id, $clave){
            $this-> id = $id;
            $this-> clave = $clave;
        }

        function getId() {
            return $this->id;
        }
        
        function setId($id) {
            $this-> id = $id;
        }

        function getClave() {
            return $this->clave;
        }
        
        function setClave($clave) {
            $this-> clave = $clave;
        }

    }
?>