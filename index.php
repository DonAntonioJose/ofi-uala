<!DOCTYPE html>
<html lang="es">
<head>
	<?php header("Content-type: text/html; charset=utf8"); ?>
	<meta chartset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Uala</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/uala-styles.css">
	<link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png" />
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="text-hide" href="./index.php">Uala</a>
		      <a class="navbar-brand" href="./index.php">
		        <img alt="Uala" src="./images/uala-logo-transp.png">
		      </a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="./hola.php">¡Hola!</a></li>
						<li><a href="./noticias.php">Uãlalea</a></li>		        
		      	<li><a href="./contacto.php">¡Cuéntanos!</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="./tienda.php">¡A por tu uãla! Shop</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	<div class="uala-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
	      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	    </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item first-slide active">
	        <!--img class="first-slide" src="./images/pano1.png" alt="First slide"-->
	      </div>
	      <div class="item second-slide">
	        <!--img class="second-slide" src="./images/pano2.png" alt="Second slide"-->
	        <div class="container">
	        </div>
	      </div>
	      <div class="item third-slide">
	        <!--img class="third-slide" src="./images/pano3.png" alt="Third slide"-->
	        <div class="container">
	        </div>
	      </div>
	    </div>
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
  </div>
  <div class="container product-wrap">
  	<div class="row product-list">
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
  			<!--div class="content-product">
			    <img alt="Image for product" src="./images/product.jpeg">
			    <div class="product-info">
			    	<h3>Cosa bonita</h3>
			    	<p>Breve descripcion del producto seleccionado</p>
			    	<span>9.95€</span>
			    </div>
		    </div-->
				<div class="content-product contenedor-img">  
					<img src="./images/product.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
				<div class="content-product contenedor-img">  
					<img src="./images/product2.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
				<div class="content-product contenedor-img">  
					<img src="./images/product3.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
				<div class="content-product contenedor-img">  
					<img src="./images/product4.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
				<div class="content-product contenedor-img">  
					<img src="./images/product5.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  		<div class="col-xs-12 col-sm-6 col-md-4 product">
				<div class="content-product contenedor-img">  
					<img src="./images/product6.jpeg" />  
					<div class="cover">  
						<h2>Ejemplo 1</h2>  
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam  in ullamcorper malesuada.</p>
						<a href="./virtualshop.html" class="link">Leer mas</a>  
					</div>  
				</div>
  		</div>
  	</div>
  </div>
	<footer>
    <div class="footer">
	    <div class="col-xs-12 col-sm-4 footer-brand">
	    	<p>© 2017 Uala. <span class="slogan">Since 1990</span></p>
	    </div>
	    <div class="col-xs-12 col-sm-4 footer-social">
	    	<ul class="social">
          <li> <a href="https://www.instagram.com/ualasince1990" target="_blank"> <i class="instagram"> </i> </a> </li>
          <li> <a href="https://www.facebook.com/ualasince1990" target="_blank"> <i class="facebook"> </i> </a> </li>
        </ul>
	    </div>
	    <div class="col-xs-12 col-sm-4 footer-legal">
				<div class="content-legal">
					<a class="faq" href="./faq.php">FAQ</a>
					<a class="term-legal" href="#">Términos Legales</a>
				</div>
	    </div>
    </div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
	<script src="js/uala.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>