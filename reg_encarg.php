<?php 
  include_once("header.html");
 ?>
    <br>
    <div class="container">
      	<div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12">
          		<h1>Registrar Encargado</h1>
        	</div>
      	</div>
    </div>

    <br>
   	<section class="container">
        <form method="post" action="registrar_cont.php">

          	<div class="row justify-content-center">
            	<div class="col-10 align-item-center">
              		<input type="text" name="nombre" placeholder="Nombre" maxlength="32" pattern="([A-ZÁÉÍÓÚ]{1}[a-záéíóú]+){1}([\s][A-ZÁÉÍÓÚ]{1}[a-záéíóú]+)+|[A-ZÁÉÍÓÚ]{1}[a-záéíóú]+"/>
            	</div>
          	</div>
          	<br>

          	<div class="row justify-content-center">
            	<div class="col-10 align-item-center">
              		<input type="text" name="tel" placeholder="Teléfono" maxlength="10" pattern="[0-9]+{10}"/>
            	</div>
          	</div>
          	<br>
          
          	<div class="row justify-content-center">
            	<div class="col-10 align-item-center">
              		<input type="text" name="email" placeholder="Correo" maxlength="30" pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+"/>
            	</div>
          	</div>
          	<br>

          	<div class="row justify-content-center">
            	<div class="col-10 align-item-center">
              		<input type="text" name="usuario" placeholder="Nombre de Usuario (mínimo 8 caracteres)" maxlength="15" pattern="[A-Za-z0-9]{8,15}|[A-Za-z]{8,15}">
            	</div>
          	</div>
          	<br>

          	<div class="row justify-content-center">
            	<div class="col-10 align-item-center">
              		<input type="password" name="pass" placeholder="Contraseña (mínimo 8 caracteres)" maxlength="15" pattern="[A-Za-z0-9]{8,15}">
            	</div>
          	</div>
          	<br>

          	<input type="hidden" name="tipo" value=2>

          	<div class="row">
            	<input type="submit" value="Registrar">
          	</div>

        </form>
    </section>


<?php 
  include_once("footer.html")
 ?>