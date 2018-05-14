<?php 
  include_once("header.html");
 ?>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <h1>Registrar Cliente</h1>
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
          			<input type="text" name="tel" placeholder="Tel&eacute;fono" maxlength="12" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"/>
              	</div>
     		</div>
          	<br>

     		<div class="row justify-content-center">
        		<div class="col-10 align-item-center">
          			<input type="text" name="email" placeholder="Correo Electr&oacute;nico" maxlength="30" pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+"/>
        		</div>
      		</div>
          	<br>

     		<div class="row justify-content-center">
              	<div class="col-10 align-item-center">
          			<input type="text" name="dom" placeholder="Direcci&oacute;n" maxlength="30">
              	</div>
      		</div>
          	<br>

     		<div class="row justify-content-center">
              	<div class="col-10 align-item-center">
          			<input type="text" name="rfc" placeholder="RFC" maxlength="13" pattern="[A-Z]{4}[0-9]{6}[A-Z0-9]{3}"/>
              	</div>
     		</div>
          	<br>

     		<div class="row justify-content-center">
      			<div class="col-10 align-item-center">
          			<input type="text" name="usuario" placeholder="Nombre de Usuario" maxlength="15" pattern="[A-Za-z0-9]{8,10}|[A-Za-z]{8,15}">
        		</div>
     		</div>
          	<br>

     		<div class="row justify-content-center">
              	<div class="col-10 align-item-center">
          			<input type="password" name="pass" placeholder="Contraseña" maxlength="15" pattern="[A-Za-z0-9]{8,15}">
        		</div>
     		</div>

			<input type="hidden" name="tipo" value=1>

          	<br>

     		<br>
     		<div class="row">
        		<input type="submit" value="Registrar">
      		</div>

     	</form>
    </section>

<?php 
  include_once("footer.html")
 ?>