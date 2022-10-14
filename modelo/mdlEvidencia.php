<?php

    class Evidencia {
        private $id;
        private $titulo;
        private $autorEvidencia;
        private $condicionCalidad;
        private $capitulo;
        private $secciones;
        private $articulos;
        private $literales;
        private $numerales;
        private $paragrafos;
        private $cordenadaX;
        private $cordenadaY;
        private $observacion;
        private $estado;
        private $nombreEvidencia;
        private $estadoLogico;

        function _construct
            (
                int $id,
                string $titulo,
                string $autorEvidencia,
                string $condicionCalidad,
                int $capitulo,
                int $secciones,
                int $articulos,
                int $literales,
                int $numerales,
                int $paragrafos,
                string $fecha,
                string $cordenadaX, 
                string $cordenadaY,
                string $observacion,
                string $estado,
                string $estadoLogico
            ) {

            $this-> id = $id;
            $this-> titulo = $titulo;
            $this-> autorEvidencia = $autorEvidencia;
            $this-> condicionCalidad = $condicionCalidad;
            $this-> capitulo = $capitulo;
            $this-> secciones = $secciones;
            $this-> articulos = $articulos;
            $this-> literales = $literales;
            $this-> numerales = $numerales;
            $this-> paragrafos = $paragrafos;
            $this-> fecha = $fecha;
            $this-> cordenadax = $cordenadaX;
            $this-> cordenadaY =  $cordenadaY;
            $this-> observacion = $observacion;
            $this-> estado = $estado;
            $this-> estadoLogico = $estadoLogico;
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

        function getAutorEvidencia(){
            return $this->autorEvidencia;
        }

        function setAutorEvidencia ($autorEvidencia){
            $this-> autorEvidencia = $autorEvidencia;
        }

        function getCondicionCalidad(){
            return $this->condicionCalidad;
        }

        function setTipo($condicionCalidad){
            $this-> condicionCalidad = $condicionCalidad;
        }

        function getFecha(){
            return $this->fecha;
        }

        function setFecha($fecha){
            $this-> fecha = $fecha;
        }

        function getCordenadaX(){
            return $this->cordenadaX;
        }

        function setCordenadaX($cordenadaX){
            $this-> cordenada = $cordenadaX;
        }

        function getCordenadaY(){
            return $this->cordenadaY;
        }

        function setCordenadaY($cordenadaY){
            $this-> cordenada = $cordenadaY;
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

        function getMombreEvidencia(){
            return $this->nombreEvidencia;
        }

        function setNombreEvidencia($nombreEvidencia){
            $this-> nombreEvidencia = $nombreEvidencia;
        }

        function getCapitulo(){
            return $this->capitulo;
        }

        function setCapitulo($capitulo){
            $this-> capitulo = $capitulo;
        }

        function getSecciones(){
            return $this->secciones;
        }

        function setSecciones($secciones){
            $this-> secciones = $secciones;
        }
        function getArticulos(){
            return $this->articulos;
        }

        function setArticulos($articulos){
            $this-> articulos = $articulos;
        }
        function getLiterales(){
            return $this->literales;
        }

        function setLiterales($literales){
            $this-> literales = $literales;
        }
        function getNumerales(){
            return $this->numerales;
        }

        function setNumerales($numerales){
            $this-> numerales = $numerales;
        }

        function getParagrafos(){
            return $this->paragrafos;
        }

        function setParagrafos($paragrafos){
            $this-> paragrafos = $paragrafos;
        }

        function getEstadoLogico(){
            return $this->estadoLogico;
        }

        function setEstadoLogico($estadoLogico){
            $this-> estadoLogico = $estadoLogico;
        }


    }

?> 