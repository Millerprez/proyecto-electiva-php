<?php

    class ctrLogin {

        var $objLogin; 

        function __construct($objLogin){
            $this-> objLogin = $objLogin;
        }

        function ValidarIngreso(){
            $objUsuario1 = new Login('','');

            $id = $this->objLogin->getId();
            $clave = $this->objLogin->getClave();
            $sql="SELECT clave, tipo_usuario FROM tblusuario WHERE fkidPersona='".$id."'";
            
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            $registro = $recordSet->fetch_array(MYSQLI_BOTH);
			$objUsuario1->setClave($registro['clave']); //contra consultada
            $perfil = (string) $registro['tipo_usuario']; //perfil consultada
            
            if($objUsuario1->getClave() == $this->objLogin->getClave()){
                    session_start();
                    $_SESSION['usuario'] =  $id;
            	    //$_SESSION['clave']=  $clave;
                    $_SESSION['perfil']=  $perfil;
                    $objControlConexion->cerrarBd();
                    return true;
            } else {     
                    $objControlConexion->cerrarBd();
                    return false;  
            }
        }

        function cargarPerfiles($cedula){
            $mat=[];
            $i=0;
            $sql="SELECT tipo_usuario FROM tblusuario where fkidPersona='".$cedula."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                    $mat[$i]=$row['tipo_usuario'];
                    $i++;
                }
                $objControlConexion->cerrarBd();
                return $mat;
        }
        
        function asignarPerfil($perfil){
            $_SESSION['perfil']=  $perfil;
        }
           
   }

    
?>