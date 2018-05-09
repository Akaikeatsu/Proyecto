	<div id="menu" class="container-fluid">
		<div class="row">	
<?php  
	include_once("modelo\iniciar_sesion_db.php");
	/*session_start();*/
	$sErr = "";
	$Tipo=0;
	$Usuario = new Usuario();
	
	if(isset($_SESSION["usu"]) && !empty($_SESSION["usu"])){
		$Usuario = $_SESSION["usu"];
		$Tipo = $Usuario->getData()->getTipo();

		if($Tipo==1){	?>
			<div class="col-xs-2 col-sm-4 col-md-12">
				<ul class="nav nav-pills nav-justified" id="desplegable">
					<li class="nav-item"><a id="opt" class="nav-link" href="#">Cat&aacute;logo</a></li>
					<li class="nav-item"><a id="opt" class="nav-link" href="#">Perfil de usuario</a></li>
              		<li class="nav-item"><a id="opt" class="nav-link" href="cerrar_sesion.php">Cerrar Sesi&oacute;n</a></li>
				</ul>
			</div>
<?php	}else{		?>
			<div class="col-xs-2 col-sm-4 col-md-12">
				<ul class="nav nav-pills nav-justified" id="desplegable">
					<li class="nav-item"><a id="opt" class="nav-link" href="#">Lista de Pedidos</a></li>
					<li class="nav-item"><a id="opt" class="nav-link" href="#">Perfil de usuario</a></li>
              		<li class="nav-item"><a id="opt" class="nav-link" href="cerrar_sesion.php">Cerrar Sesi&oacute;n</a></li>
				</ul>
			</div>
<?php	} 
		}else{			?>
			<div class="col-xs-2 col-sm-4 col-md-12">
				<ul class="nav nav-pills nav-justified" id="desplegable">
					<li class="nav-item"><a id="opt" class="nav-link" href="iniciar_sesion.php">Iniciar Sesi&oacute;n</a></li>
					<li class="nav-item"><a id="opt" class="nav-link" href="reg_client.php">Registrar Cliente</a></li>
              		<li class="nav-item"><a id="opt" class="nav-link" href="reg_encarg.php">Registrar Encargado</a></li>
					<li class="nav-item"><a id="opt" class="nav-link" href="#">Recuperar Nombre de Usuario y Contraseña</a></li>
				</ul>
			</div>
<?php  	}				?>
		</div>
	</div>