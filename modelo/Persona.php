<?php

    class Persona {
        var $id;
        var $nombre;
        var $cedula;
        var $correo;
        var $estado;

        function __construct(
                $id,
                $nombre,
                $cedula,
                $correo,
                $estado
            ) {

            $this-> id = $id ;
            $this-> nombre = $nombre;
            $this-> cedula = $cedula;
            $this-> correo = $correo;
            $this-> estado = $estado;
        }

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this-> id = $id;
        }

        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this-> nombre = $nombre;
        }

        function getCedula(){
            return $this->cedula;
        }

        function setCedula($cedula){
            $this-> cedula = $cedula;
        }

        function getCorreo(){
            return $this->correo;
        }

        function setCorreo($correo){
            $this-> correo = $correo;
        }

        function getEstado(){
            return $this->estado;
        }

        function setEstado($estado){
            $this-> estado = $estado;
        }
    }

?> 