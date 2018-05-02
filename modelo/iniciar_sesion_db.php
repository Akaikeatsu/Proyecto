<?php
/*
Archivo:  Usuario.php
Objetivo: clase que encapsula la información de un usuario
Autor:    
*/
include_once("conexion.php");
include_once("data.php");
class Usuario {
	private $User_Name = 0;
	private $Password = "";
	private $Data = null;
	private $Connection = null;

	public function getData(){
		return $this->Data;
	}
	public function setData($valor){
		$this->Data = $valor;
	}

	public function getUser_Name(){
		return $this->User_Name;
	}
	public function setUser_Name($valor){
		$this->User_Name = $valor;
	}

	public function getPassword(){
		return $this->Password;
	}
	public function setPassword($valor){
		$this->Password = $valor;
	}
	
	public function exist(){
	$bRet = false;
	$sQuery = "";
	$Result = null;
		if (($this->User_Name == "" || $this->Password == "") )
			throw new Exception("Usuario->exist: faltan datos");
		else{
			$sQuery = "SELECT nombreusuario
						FROM public.encargado
						WHERE nombreusuario = '".$this->User_Name."' AND contrasenia = '".$this->Password."'";
			//Crear, conectar, ejecutar, desconectar
			$Connection = new conexion();
			if ($Connection->conectar()){
				$Result = $Connection->ejecutarConsulta($sQuery);
				$Connection->desconectar();
				if ($Result != null){
					$this->Data = new Data();
					$this->Data->setUser_Name($Result[0][0]);
					$this->Data->buscar();
					$bRet = true;
				}
			}
		}
		return $bRet;
	}
}
?>