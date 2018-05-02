<?php
/*************************************************************/
/* Archivo:  inicio.php
 * Objetivo: página de sesión iniciada
 * Autor:  BAOZ  
 *************************************************************/
include_once("modelo\iniciar_sesion_db.php");
session_start();
$sErr = "";
$Nombre="";
$Usuario=new Usuario();
 
	if (isset($_SESSION["usu"])){
		$Usuario = $_SESSION["usu"];
		$Nombre = $Usuario->getData()->getNombre();
	}
	else
		$sErr = "Debe estar firmado";
	
	if ($sErr == ""){
		include_once("header.html");
	}
	else{
		/*header("Location: error.php?sErr=".$sErr);*/
		exit();
	}
 ?>
        <section>
			<h1>Bienvenido <?php echo $Nombre;?></h1>
		</section>
<?php
include_once("footer.html");
?>