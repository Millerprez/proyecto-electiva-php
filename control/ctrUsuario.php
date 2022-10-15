<?php

    class ctrUsuario {

        var $objRegUsuario; 

        function __construct($objRegUsuario){
            $this-> objRegUsuario = $objRegUsuario;
        }

        function conexion (string $sql){
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
       
        function guardar() {
            $id    = $this->objRegUsuario->getId();
            $cedula = $this->objRegUsuario->getCedula();
            $clave  = $this->objRegUsuario->getClave(); 
            $tipoUsuario  = $this->objRegUsuario->getTipoUsuario(); 
            $sql="INSERT INTO tblusuario VALUES ('".$id."','".$cedula."','".$clave."','".$tipoUsuario."')";
            $this->conexion($sql);
        }


        function modificar(){
            $id = $this->objRegUsuario->getId();
            $cedula = $this->objRegUsuario->getCedula();
            $clave   = $this->objRegUsuario->getClave();
            $tipoUsuario  = $this->objRegUsuario->getTipoUsuario(); 
            $sql="UPDATE tblusuario SET id ='".$id."',fkidPersona='".$cedula."',clave='".$clave."',tipo_usuario='".$tipoUsuario."' WHERE id='".$id."'";
            $this->conexion($sql);
        }

        function consultar(){
            $id = $this->objRegUsuario->getId();
            $sql="SELECT * FROM tblusuario WHERE id='".$id."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            
            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                    $this->objRegUsuario->setId($row['id']);
                    $this->objRegUsuario->setCedula($row['fkidPersona']);
                    $this->objRegUsuario->setClave($row['clave']);
                    $this->objRegUsuario->setTipoUsuario($row['tipo_usuario']);
                }

            $objControlConexion->cerrarBd();
            return $this->objRegUsuario;
        }

        function listar(){
            $mat=[];
            $i=0;
            $sql="SELECT * FROM tblusuario";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                    $mat[$i][0]=$row['id'];
                    $mat[$i][1]=$row['fkidPersona'];
                    $mat[$i][2]=$row['clave'];
                    $mat[$i][3]=$row['tipo_usuario'];
                    $i++;
                }
                $objControlConexion->cerrarBd();
                return $mat;
        }
           
        
    }
?>