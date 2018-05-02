<?php 
  include_once("header.html");
 ?>
<br>

	<section class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <h1>Iniciar Sesi&oacute;n</h1>
        </div>
      </div>
      <br>
      
    	<form method="post" action="iniciar_sesion_cont.php">

   			<div class="row justify-content-center">
      			<div class="col-xs-12 col-sm-3 col-md-3 align-item-center">
        			<label for="luser">Nombre de Usuario</label>
        		</div>
    			<div class="col-xs-12 col-sm-12 col-md-7 align-item-center">
        			<input type="text" id="iuser" name="iuser" maxlength="10">
      			</div>
   			</div>

   			<div class="row justify-content-center">
      			<div class="col-md-xs-12 col-sm-3 col-md-3 align-item-center">
        			<label for="lpass">Contraseña</label>
        		</div>
            	<div class="col-xs-12 col-sm-12 col-md-7 align-item-center">
        			<input type="password" id="ipass" name="ipass" maxlength="10">
      			</div>
   			</div>

   			<br>

   			<div class="row">
      			<input type="submit" value="Iniciar Sesi&oacute;n">
    		</div>

   	  	</form>
  	</section>

<?php 
  include_once("footer.html")
 ?>