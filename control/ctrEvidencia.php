<?php

    class ctrEvidencia {

        var $objEvidencia; 

        function _construct($objEvidencia){
            $this-> objEvidencia = $objEvidencia;
        }

        function conexion (string $sql){
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
       
        function guardar() {
            $id    = $this->objEvidencia->getId();
            $tit   = $this->objEvidencia->getTitulo();
            $auEvi = $this->objEvidencia->getAutorEvidencia();
            $cond  = $this->objEvidencia->getCondicionCalidad();
            $cap   = $this->objEvidencia->getCapitulo();
            $secc  = $this->objEvidencia->getSecciones();
            $artic = $this->objEvidencia->getArticulos();
            $liter = $this->objEvidencia->getLiterales();
            $numls = $this->objEvidencia->getNumerales();
            $parag = $this->objEvidencia->getParagrafos();
            $fec   = $this->objEvidencia->getFecha();
            $corx  = $this->objEvidencia->getCordenadasX();
            $cory  = $this->objEvidencia->getCordenadasY();
            $obse  = $this->objEvidencia->getObservacion();
            $estad = $this->objEvidencia->getEstado();
            $nomEv = $this->objEvidencia->getMombreEvidencia();
            $estLg = "ACTIVA";
            echo ("saving2");
            $sql="INSERT INTO EVIDENCIA
                VALUES
                    (
                        '".$id."',
                        '".$tit."',
                        '".$auEvi."',
                        '".$cond."',
                        '".$cap."',
                        '".$secc."',
                        '".$artic."',
                        '".$liter."',
                        '".$numls."',
                        '".$parag."',
                        '".$fec."',
                        '".$corx."',
                        '".$cory."',
                        '".$obse."',
                        '".$estad."',
                        '".$nomEv."',
                        '".$estLg."'
                    )";
                        
                    echo "Saving";
            $this->conexion($sql);
        }


        function modificar(){
            $id    = $this->objEvidencia->getId();
            $tit   = $this->objEvidencia->getTitulo();
            $auEvi = $this->objEvidencia->getAutorEvidencia();
            $cond  = $this->objEvidencia->getCondicionCalidad();
            $cap   = $this->objEvidencia->getCapitulo();
            $secc  = $this->objEvidencia->getSecciones();
            $artic = $this->objEvidencia->getArticulos();
            $liter = $this->objEvidencia->getLiterales();
            $numls = $this->objEvidencia->getNumerales();
            $parag = $this->objEvidencia->getParagrafos();
            $fec   = $this->objEvidencia->getFecha();
            $corx  = $this->objEvidencia->getCordenadasX();
            $cory  = $this->objEvidencia->getCordenadasY();
            $obse  = $this->objEvidencia->getObservacion();
            $estad = $this->objEvidencia->getEstado();
            $nomEv = $this->objEvidencia->getMombreEvidencia();
            $estLg = $this->objEvidencia->getEstadoLogico;

            $sql="  UPDATE EVIDENCIA
                    SET TITULO ='".$tit."',
                        AUTOR_EVIDENCIA = '".$auEvi."',
                        CONDICION = '".$cond."',
                        CAPITULO = '".$cap."',
                        SECCIONES = '".$secc."',
                        ARTICULOS = '".$artic."',
                        LITERALES = '".$liter."',
                        NUMERALES = '".$numls."',
                        PARAGRAFOS = '".$parag."',
                        FECHA = '".$fec."',
                        CORDENADA_X = '".$corx."',
                        CORDENADA_Y = '".$cory."',
                        OBSERVACION = '".$obse."',
                        ESTADO = '".$estad."',
                        NOMBRE_EVIDENCIA = '".$nomEv."',
                        ESTADO_LOGICO = '".$estLg."',
                    WHERE ID = '".$id."'";
            
            $this->conexion($sql);

        }

        function borrar(){
            $id = $this->objEvidencia->getId();
            
            $sql="UPDATE EVIDENCIA
            SET ESTADO_LOGICO = 'INACTIVA'
                WHERE ID = '".$id."'";
            $this->conexion($sql);
        }

        function consultar(){
            
            $id = $this->objEvidencia->getId();

            $sql="SELECT * FROM EVIDENCIA WHERE ID='".$id."'";

            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);

            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                if($row['ESTADO_LOGICO'] == "ACTIVA"){
                    $this->objEvidencia->setId($row['ID']);
                    $this->objEvidencia->setTitulo($row['TITULO']);
                    $this->objEvidencia->setAutorEvidencia($row['AUTOR_EVIDENCIA']);
                    $this->objEvidencia->setCondicionCalidad($row['CONDICION']);
                    $this->objEvidencia->setCapitulo($row['CAPITULO']);
                    $this->objEvidencia->setSecciones($row['SECCIONES']);
                    $this->objEvidencia->setArticulos($row['ARTICULOS']);
                    $this->objEvidencia->setLiterales($row['LITERALES']);
                    $this->objEvidencia->setNumerales($row['NUMERALES']);
                    $this->objEvidencia->setParagrafos($row['PARAGRAFOS']);
                    $this->objEvidencia->setFecha($row['FECHA']);
                    $this->objEvidencia->setCordenadasX($row['CORDENADA_X']);
                    $this->objEvidencia->setCordenadasY($row['CORDENADA_Y']);
                    $this->objEvidencia->setObservacion($row['OBSERVACION']);
                    $this->objEvidencia->setEstado($row['ESTADO']);
                    $this->objEvidencia->setMombreEvidencia($row['NOMBRE_EVIDENCIA']);
                }
            }

            $objControlConexion->cerrarBd();
            return $this->objEvidencia;
        }

        function listar(){

            $mat=[];
            $i=0;

            $sql="SELECT * FROM EVIDENCIA";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $mat[$i][0]=$row['ID'];
                $mat[$i][1]=$row['TITULO'];
                $mat[$i][2]=$row['AUTOR_EVIDENCIA'];
                $mat[$i][3]=$row['CONDICION'];
                $mat[$i][4]=$row['CAPITULO'];
                $mat[$i][5]=$row['SECCIONES'];
                $mat[$i][6]=$row['ARTICULOS'];
                $mat[$i][7]=$row['LITERALES'];
                $mat[$i][8]=$row['NUMERALES'];
                $mat[$i][9]=$row['PARAGRAFOS'];
                $mat[$i][10]=$row['FECHA'];
                $mat[$i][11]=$row['CORDENADA_X'];
                $mat[$i][12]=$row['CORDENADA_Y'];
                $mat[$i][12]=$row['OBSERVACION'];
                $mat[$i][12]=$row['ESTADO'];
                $mat[$i][12]=$row['NOMBRE_EVIDENCIA'];

                $i++;

            }
            $objControlConexion->cerrarBd();
            return $mat;
        }


    }


?>