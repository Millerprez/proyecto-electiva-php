<?php

    class ctrPersona {

        var $objPersona; 

        function __construct($objPersona){
            $this-> objPersona = $objPersona;
        }

        function conexion (string $sql){
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
       
        function guardar() {
            $id    = $this->objPersona->getId();
            $nombre   = $this->objPersona->getNombre();
            $cedula = $this->objPersona->getCedula();
            $correo  = $this->objPersona->getCorreo(); 
            $estado  = "activo"; 
            $sql="INSERT INTO tblpersona VALUES ('".$id."','".$nombre."','".$cedula."','".$correo."','".$estado."')";
            $this->conexion($sql);
        }


        function modificar(){
            $id = $this->objPersona->getId();
            $nombre   = $this->objPersona->getNombre();
            $cedula = $this->objPersona->getCedula();
            $correo  = $this->objPersona->getCorreo(); 
            $sql="UPDATE tblpersona SET nombre ='".$nombre."', cedula='".$cedula."', correo='".$correo."' WHERE id='".$id."'";
            $this->conexion($sql);
        }

        function borrar(){
            $id = $this->objPersona->getId();
            $sql="UPDATE tblpersona SET estado = 'inactivo' WHERE id='".$id."'";
            $this->conexion($sql);  
        }

        function consultar(){
            $id = $this->objPersona->getId();
            $sql="SELECT * FROM tblpersona WHERE id='".$id."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            
            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                if($row['estado'] == "activo"){
                    $this->objPersona->setId($row['id']);
                    $this->objPersona->setNombre($row['nombre']);
                    $this->objPersona->setCedula($row['cedula']);
                    $this->objPersona->setCorreo($row['correo']);
                }
            }
            $objControlConexion->cerrarBd();
            return $this->objPersona;
        }

        function listar(){
            $mat=[];
            $i=0;
            $sql="SELECT * FROM tblpersona";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                if($row['estado'] == "activo"){
                    $mat[$i][0]=$row['id'];
                    $mat[$i][1]=$row['nombre'];
                    $mat[$i][2]=$row['cedula'];
                    $mat[$i][3]=$row['correo'];
                    $i++;
                }
            }
            $objControlConexion->cerrarBd();
            return $mat;
        }
    }
?>