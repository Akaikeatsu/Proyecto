<?php 
include_once("modelo\data.php");
$New_User = new Data();

if (isset($_POST["user"]) && !empty($_POST["user"]) && 
	isset($_POST["pass"]) && !empty($_POST["pass"]) && 
	isset($_POST["nombre"]) && !empty($_POST["nombre"]) && 
	isset($_POST["tel"]) && !empty($_POST["tel"]) && 
	isset($_POST["email"]) && !empty($_POST["email"]) && 
	isset($_POST["dom"]) && !empty($_POST["dom"]) && 
	isset($_POST["rfc"]) && !empty($_POST["rfc"]) && 
	isset($_POST["tipo"]) && !empty($_POST["tipo"])){

		$New_User->setUser_Name($_POST["user"]);
		$New_User->setPassword($_POST["pass"]);
		$New_User->setNombre($_POST["nombre"]);
		$New_User->setTelefono($_POST["tel"]);
		$New_User->setEmail($_POST["email"]);
		$New_User->setDomicilio($_POST["dom"]);
		$New_User->setRFC($_POST["rfc"]);
		$New_User->setTipo($_POST["tipo"]);

		$New_User->registrar();
	
}


header("Location: index.php");


 ?>