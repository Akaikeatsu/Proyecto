<?php
/*
Archivo:  Data.php
Objetivo: clase que encapsula la información de una persona que labora en el hospital
Autor:    
*/
include_once("conexion.php");
class Data {
	private $Id=0;
  private $UserName="";
  private $Password="";
	private $Nombre="";
	private $Telefono=0;
	private $Email="";
	private $Domicilio="";
	private $RFC="";
	private $Tipo=0;
   
	  function setId($pId){
       $this->Id = $pId;
    }   
    function getId(){
       return $this->Id;
    }

    function setUser_Name($pUserName){
       $this->UserName = $pUserName;
    }   
    function getUser_Name(){
       return $this->UserName;
    }

    function setPassword($pPassword){
       $this->Password = $pPassword;
    }   
    function getPassword(){
       return $this->Password;
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

    function setDomicilio($pDomicilio){
       $this->Domicilio = $pDomicilio;
    }   
    function getDomicilio(){
       return $this->Domicilio;
    }

    function setRFC($pRFC){
       $this->RFC = $pDomicilio;
    }   
    function getRFC(){
       return $this->RFC;
    }

    function setTipo($pTipo){
       $this->Tipo = $pTipo;
    }   
    function getTipo(){
       return $this->Tipo;
    }

	
	/*Busca por clave, regresa verdadero si lo encontró*/
	function buscar(){
	$Connection=new conexion();
	$sQuery="";
	$Result=null;
	$bRet = false;
		if ($this->Id==0)
			throw new Exception("Data->buscar(): faltan datos");
		else{
			if ($Connection->conectar()){
		 		$sQuery = " SELECT nombre, telefono, correo, dom_fiscal, rcf, tipo
								FROM public.usuario WHERE id_usuario = ".$this->Id;
				$Result = $Connection->ejecutarConsulta($sQuery);
				$Connection->desconectar();
				if ($Result){
					$this->Nombre = $Result[0][0];
					$this->Telefono = $Result[0][1];
					$this->Email = $Result[0][2];
					$this->Domicilio = $Result[0][3];
					$this->RFC = $Result[0][4];
					$this->Tipo = $Result[0][5];
					$bRet = true;
				}
			} 
		}
		return $bRet;
	}

  function registrar(){
  $Connection=new conexion();
  $sQuery="";
  $nAfectados=-1;
    if ($this->UserName == "" OR $this->Password == "" OR $this->Nombre == "" OR $this->Telefono == 0 
        OR $this->Email == "" OR $this->Domicilio == "" OR $this->RFC == "" OR $this->Tipo==0)
      throw new Exception("Data->registrar(): faltan datos");
    else{
      if ($Connection->conectar()){
        $sQuery = "INSERT INTO public.usuario(nombre_usuario, contrasenia, nombre, telefono, correo, dom_fiscal, rcf, tipo)
                    VALUES (
                            '".$this->UserName."', 
                            '".$this->Password."',
                            '".$this->Nombre."', 
                            ".$this->Telefono.", 
                            '".$this->Email."', 
                            '".$this->Domicilio."', 
                            '".$this->RFC."', 
                            ".$this->Tipo.");";
        $nAfectados = $Connection->ejecutarComando($sQuery);
        $Connection->desconectar();     
      }
    }
    return $nAfectados;
  }
	
}
?>