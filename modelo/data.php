<?php
/*
Archivo:  Data.php
Objetivo: clase que encapsula la información de una persona que labora en el hospital
Autor:    
*/
include_once("conexion.php");
class Data {
	private $UserName="";
	private $Nombre="";
	private $Telefono="";
	private $Email="";
	private $Password="";
   
    function setUser_Name($pUserName){
       $this->UserName = $pUserName;
    }   
    function getUser_Name(){
       return $this->UserName;
    }

    function setNombre($pNombre){
       $this->Nombre = $pNombre;
    }   
    function getNombre(){
       return $this->Nombre;
    }

    function setTelefono($pTelefono){
       $this->Telefono = $pTelefono;
    }   
    function getTelefono(){
       return $this->Telefono;
    }

    function setEmail($pEmail){
       $this->Email = $pEmail;
    }   
    function getEmail(){
       return $this->Email;
    }

    function setPassword($pPassword){
       $this->Password = $pPassword;
    }   
    function getPassword(){
       return $this->Password;
    }
	
	/*Busca por clave, regresa verdadero si lo encontró*/
	function buscar(){
	$Connection=new conexion();
	$sQuery="";
	$Result=null;
	$bRet = false;
		if ($this->UserName=="")
			throw new Exception("PersonalHospitalario->buscar(): faltan datos");
		else{
			if ($Connection->conectar()){
		 		$sQuery = " SELECT nombre, telefono, correo, contrasenia 
							FROM encargado 
							WHERE nombreusuario = ".$this->UserName;
				$Result = $Connection->ejecutarConsulta($sQuery);
				$Connection->desconectar();
				if ($Result){
					$Nombre = $Result[0][0];
					$Telefono = $Result[0][1];
					$Email = $Result[0][2];
					$Password = $Result[0][3];
					$bRet = true;
				}
			} 
		}
		return $bRet;
	}
	
}
?>