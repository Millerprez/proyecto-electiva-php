<?php

    class ctrEvidencia {

        var $objEvidencia; 

        function __construct($objEvidencia){
            $this-> objEvidencia = $objEvidencia;
        }

        function conexion (string $sql){
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
       
        function guardar() {
            echo " Cordenadas ".$this->objEvidencia->getCordenadaX();  
            echo " Observacion ".$this->objEvidencia->getNombreEvidencia(); 
            $id    = $this->objEvidencia->getId();
            $tit   = $this->objEvidencia->getTitulo();
            $auEvi = $this->objEvidencia->getAutor();
            $cond  = $this->objEvidencia->getCondicionCalidad(); 
            $numls = $this->objEvidencia->getNumeral();
            $parag = $this->objEvidencia->getParagrafo();
            $fec   = $this->objEvidencia->getFecha();
            $corx  = $this->objEvidencia->getCordenadaX();
            $cory  = $this->objEvidencia->getCordenadasY();
            $obse  = $this->objEvidencia->getObservacion();
            $estad = $this->objEvidencia->getEstado();
            $nomEv = $this->objEvidencia->getNombreEvidencia();
            $estLg = "ACTIVA";
            $sql="INSERT INTO tblevidencia
                VALUES
                    (
                        '".$id."',
                        '".$tit."',
                        '".$cond."',
                        '".$numls."',
                        '".$parag."',
                        '".$auEvi."',
                        '".$fec."',
                        '".$corx."',
                        '".$cory."',
                        '".$obse."',
                        '".$estad."',
                        '".$nomEv."',
                        '".$estLg."'
                    )";
            $this->conexion($sql);
        }


        function modificar(){
            $id    = $this->objEvidencia->getId();
            $tit   = $this->objEvidencia->getTitulo();
            $auEvi = $this->objEvidencia->getAutor();
            $cond  = $this->objEvidencia->getCondicionCalidad();
            $numls = $this->objEvidencia->getNumeral();
            $parag = $this->objEvidencia->getParagrafo();
            $fec   = $this->objEvidencia->getFecha();
            $corx  = $this->objEvidencia->getCordenadaX();
            $cory  = $this->objEvidencia->getCordenadasY();
            $obse  = $this->objEvidencia->getObservacion();
            $estad = $this->objEvidencia->getEstado();
            $nomEv = $this->objEvidencia->getNombreEvidencia();

            $sql="  UPDATE tblevidencia
                    SET TITULO ='".$tit."',
                        CONDICION = '".$cond."',
                        fkidnumeral  = '".$numls."',
                        fkidparagrafo  = '".$parag."',
                        fkidautor  = '".$auEvi."',
                        FECHA = '".$fec."',
                        CORDENADA_X = '".$corx."',
                        CORDENADA_Y = '".$cory."',
                        OBSERVACION = '".$obse."',
                        ESTADO = '".$estad."',
                        NOMBRE_EVIDENCIA = '".$nomEv."',
                        ESTADO_LOGICO = 'ACTIVA'
                    WHERE id  = '".$id."'";
            
            $this->conexion($sql);

        }

        function borrar(){
            $id = $this->objEvidencia->getId();
            
            $sql="UPDATE tblevidencia
            SET ESTADO_LOGICO = 'INACTIVA'
                WHERE id  = '".$id."'";
            $this->conexion($sql);
        }

        function consultar(){
            
            $id = $this->objEvidencia->getId();

            $sql="SELECT * FROM tblevidencia WHERE id='".$id."'";

            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);

            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                if($row['ESTADO_LOGICO'] == "ACTIVA"){
                    $this->objEvidencia->setId($row['id']);
                    $this->objEvidencia->setTitulo($row['titulo']);
                    $this->objEvidencia->setAutor($row['fkidautor']);
                    $this->objEvidencia->setCondicionCalidad($row['CONDICION']);
                    $this->objEvidencia->setNumeral($row['fkidnumeral']);
                    $this->objEvidencia->setParagrafo($row['fkidparagrafo']);
                    $this->objEvidencia->setFecha($row['FECHA']);
                    $this->objEvidencia->setCordenadaX($row['CORDENADA_X']);
                    $this->objEvidencia->setCordenadasY($row['CORDENADA_Y']);
                    $this->objEvidencia->setObservacion($row['OBSERVACION']);
                    $this->objEvidencia->setEstado($row['ESTADO']);
                    $this->objEvidencia->setNombreEvidencia($row['NOMBRE_EVIDENCIA']);
                }
            }

            $objControlConexion->cerrarBd();
            return $this->objEvidencia;
        }

        function listar(){

            $mat=[];
            $i=0;

            $sql="SELECT * FROM tblevidencia";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $mat[$i][0]=$row['id'];
                $mat[$i][1]=$row['titulo'];
                $mat[$i][3]=$row['CONDICION'];
                $mat[$i][4]=$row['fkidnumeral'];
                $mat[$i][5]=$row['fkidparagrafo'];
                $mat[$i][2]=$row['fkidautor'];
                $mat[$i][6]=$row['FECHA'];
                $mat[$i][7]=$row['CORDENADA_X'];
                $mat[$i][8]=$row['CORDENADA_Y'];
                $mat[$i][9]=$row['OBSERVACION'];
                $mat[$i][10]=$row['ESTADO'];
                $mat[$i][11]=$row['NOMBRE_EVIDENCIA'];
                $i++;
            }
            $objControlConexion->cerrarBd();
            return $mat;
        }

        function listarNumerales(){
            $mat=[];
            $i=0;

            $sql="SELECT id, descripcion FROM tblnumeral";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $mat[$i][0]=$row['id'];
                $mat[$i][1]=$row['descripcion'];
                $i++;
            }
             
            $objControlConexion->cerrarBd();
            return $mat;

        }

        function listarParagrafos(){
            $mat=[];
            $i=0;

            $sql="SELECT id, descripcion FROM tblparagrafo";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $mat[$i][0]=$row['id'];
                $mat[$i][1]=$row['descripcion'];
                $i++;
            }
             
            $objControlConexion->cerrarBd();
            return $mat;

        }

    }
