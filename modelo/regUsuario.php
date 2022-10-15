<?php
 class regUsuario{

        var $id;
        var $cedula;
        var $clave;
        var $tipoUser;

    function __construct($id,$cedula,$clave,$tipoUser){
	    $this->id= $id;
        $this->cedula = $cedula;
        $this->clave = $clave;
        $this->tipoUser = $tipoUser;
     }


    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getCedula() {
        return $this->cedula;
    }

    function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    function getClave() {
        return $this->clave;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function getTipoUsuario() {
        return $this->tipoUser;
    }

    function setTipoUsuario($tipoUser) {
        $this->tipoUser = $tipoUser;
    }
}
    
?>