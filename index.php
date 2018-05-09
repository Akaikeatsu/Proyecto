<?php
/*************************************************************/
/* Archivo:  index.php
 * Objetivo: Pagina principal. Incluye los enlaces a 
 * Autor:Adolfo Meza Romero
 *************************************************************/
include_once("header.html");
include_once("menu.php");
?>

    <div class="container">
    	<div class="row">
    		<div class="col-xs-12 col-sm-9 col-md-9">
    			<section class="main">
					<article>
						<p class="text-justify">
							<h3>¿Quienes Somos</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi corporis rem dolorem porro, maiores! Quae, architecto expedita id! Deleniti ullam libero vel, impedit nemo pariatur tempora, molestias autem omnis labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa soluta vitae molestias voluptatibus dignissimos at exercitationem nulla, ut praesentium voluptate quasi vero facilis reiciendis eius. Repudiandae, hic deserunt nesciunt ducimus?
						</p>
						<p class="text-justify">
							<h3>Misi&oacute;n</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam officia, architecto maxime reprehenderit! Quibusdam autem fugiat quas quo, rerum aspernatur commodi ut impedit earum repudiandae, cupiditate nisi officia, reiciendis nulla!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nostrum vitae quis doloribus, repellat earum placeat velit necessitatibus et atque architecto quidem libero dicta, consequatur vero iste voluptas numquam quasi?
						</p>
						<p class="text-justify">
							<h3>Valores</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti explicabo sit, illo nobis pariatur deserunt aliquam esse facere quos nisi excepturi iure suscipit, a minima. Possimus deserunt unde tempora, nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus quod est nemo nihil, delectus rerum ut voluptate, eius nam dolorum impedit et velit facere sed deserunt architecto possimus rem placeat?
						</p>
					</article>
				</section>
    		</div>
    		<div class="col-xs-3 col-sm-3 col-md-3">
    			<?php 
    				include_once("aside.html");
    			 ?>
    		</div>
    	</div>
	</div>

	<div id="images" class="container">
		<br>
		<div class="row">
			<div class="col-md-4">
				<img src="img/DACSA-1.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-2.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-3.jpg" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<img src="img/DACSA-4.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-5.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-6.jpg" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<img src="img/DACSA-7.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-2.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-md-4">
				<img src="img/DACSA-1.jpg" class="img-fluid" alt="Responsive image">
			</div>
		</div>
		<br>
	</div>

<?php
include_once("footer.html");
?>
