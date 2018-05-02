	<div id="menu" class="container-fluid">
		<div class="row">	
<<?php  
				if(isset($_SESSION["tipo"])){
				
				}else{
?>
			<div class="col-xs-2 col-sm-4 col-md-12">
				<ul class="nav nav-pills nav-justified" id="desplegable">
					<li class="nav-item"><a id="opt" class="nav-link" href="">Iniciar Sesi&oacute;n</a></li>
					<li class="nav-item"><a id="opt" class="nav-link">Registrarse</a>
						<ul class="nav nav-pills nav-justified">
              				<li class="nav-item"><a id="opt" class="nav-link" href="">Cliente</a></li>
              				<li class="nav-item"><a id="opt" class="nav-link" href="">Encargado</a></li>
            			</ul>
            		</li>
					<li class="nav-item"><a id="opt" class="nav-link" href="">Recuperar Nombre de Usuario y Contraseña</a></li>
				</ul>
			</div>
<?php  
				}
?>
		</div>
	</div>