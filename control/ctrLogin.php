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
            $sql="SELECT clave FROM tblusuario WHERE fkidPersona='".$id."'";
   
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbproyectoaula", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            $registro = $recordSet->fetch_array(MYSQLI_BOTH);
			$objUsuario1->setClave($registro['clave']); //contra consultada

            if($objUsuario1->getClave() == $this->objLogin->getClave()){
                    echo "ingresó";
                    $objControlConexion->cerrarBd();
                    return true;
                } else {
                    
                    $objControlConexion->cerrarBd();
                    return false;
                    
                    
                }
            }
           
        }

    
?>