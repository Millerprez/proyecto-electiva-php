<?php

    class Evidencia {
        var $id;
        var $titulo;
        var $autor;
        var $condicionCalidad;
        var $numeral;
        var $paragrafo;
        var $fecha;
        var $cordenadaX;
        var $cordenadaY;
        var $observacion;
        var $estado;
        var $nombreEvidencia;
        var $estadoLogico;

        function __construct($id,$titulo,$autor,$condicionCalidad,
        $numeral,$paragrafo,$fecha,$cordenadaX,$cordenadaY,$observacion,$estado,
                 $nombreEvidencia
            ) {
            $this-> id = $id ;
            $this-> titulo = $titulo;
            $this-> autor = $autor;
            $this-> condicionCalidad = $condicionCalidad;
            $this-> numeral = $numeral;
            $this-> paragrafo = $paragrafo;
            $this-> fecha = $fecha;
            $this-> cordenadaX = $cordenadaX;
            $this-> cordenadaY =  $cordenadaY;
            $this-> observacion = $observacion;
            $this-> estado = $estado;
            $this-> nombreEvidencia = $nombreEvidencia;

        }

        function getId(){
            return $this->id;
        }

        function setId($id){
            $this-> id = $id;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setTitulo($titulo){
            $this-> titulo = $titulo;
        }

        function getAutor(){
            return $this->autor;
        }

        function setAutor($autor){ 
            $this-> autor = $autor;
        }

        function getCondicionCalidad(){
            return $this->condicionCalidad;
        }

        function setCondicionCalidad($condicionCalidad){
            $this-> condicionCalidad = $condicionCalidad;
        }

        function getFecha(){
            return $this->fecha;
        }

        function setFecha($fecha){
            $this-> fecha = $fecha;
        }

        function getCordenadaX(){
            echo "Coder en metodo ---- ".$this->cordenadaX;
            return $this->cordenadaX;
        }

        function setCordenadaX($cordenadaX){
            $this-> cordenadaX = $cordenadaX;
        }

        function getCordenadasY(){
            return $this->cordenadaY;
        }

        function setCordenadasY($cordenadaY){
            $this-> cordenadaY = $cordenadaY;
        }

        function getObservacion(){
            return $this->observacion;
        }

        function setObservacion($observacion){
            $this-> observacion = $observacion;
        }

        function getEstado(){
            return $this->estado;
        }

        function setEstado($estado){
            $this-> estado = $estado;
        }

        function getNombreEvidencia(){
            return $this->nombreEvidencia;
        }

        function setNombreEvidencia($nombreEvidencia){
            $this-> nombreEvidencia = $nombreEvidencia;
        }
        
        function getNumeral(){
            return $this->numeral;
        }

        function setNumeral($numeral){
            $this-> numeral = $numeral;
        }

        function getParagrafo(){
            return $this->paragrafo;
        }

        function setParagrafo($paragrafo){
            $this-> paragrafo = $paragrafo;
        }

        function getEstadoLogico(){
            return $this->estadoLogico;
        }

        function setEstadoLogico($estadoLogico){
            $this-> estadoLogico = $estadoLogico;
        }

    }

?> 