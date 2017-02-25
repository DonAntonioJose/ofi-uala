<!DOCTYPE html>
<html lang="es">
<head>
  <?php header("Content-type: text/html; charset=utf8"); 
  $sent = $_GET['sent'];
  ?>
  <meta chartset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Uala - Contacto</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/uala-styles.css">
  <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="js/jquery.validate.1.6.js" type="text/javascript"></script>
  <script src="js/uala.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
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
            <li><a href="./noticias.php">Ualalea</a></li>
            <li class="active"><a href="./contacto.php">¡Cuéntanos!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./tienda.php">¡A por tu uala! Shop</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <section class="main container contact">
    <div class="wrap">
      <div class="first-element">
        <article class="col-xs-12 col-md-5">
        <img src="./images/contact2.jpg" alt="contacto">
        </article>
      </div>
      <div class="second-element">
        <article class="col-xs-12 col-md-7">
          <p>¡Este espacio es para vosotros!</p>
          <p>Queremos saber que pensáis, cuales con vuestras dudas e inquietudes sobre Uala since 1990. Así que no lo dudes y… ¡cuéntanos!</p>
		  <form action="sendbymail.php" method="post" role="contact_form" id="contact">
            <div class="form-group">
              <label for="contact_Name">Nombre </label>
              <input type="text" class="form-control" id="contact_Name"
                  placeholder="Introduce tu nombre" required
                  name="contact_Name"> </input> 
            </div>
            <div class="form-group">
              <label for="contact_Email">E-m@il</label>
              <input type="email" class="form-control" id="contact_Email" 
                   placeholder="E-m@il" required
                   name="contact_Email"> </input>
            </div>
            <div class="form-group">
              <label for="contact_Comment">Comentario</label>
              <textarea type="textarea" class="form-control" id="contact_Comment" 
                   placeholder="Comentario" required
                   name="contact_Comment"> </textarea>
            </div>
			<!-- We only show legal terms before sending the EMAIL -->
			<?php 
			if($sent != "ok") {
			?>
				<p class="datos" align="justify">El Usuario podrá remitir a Uala since 1990 sus datos de carácter personal a través de los distintos formularios que a tal efecto aparecen incorporados en la página Web. Dichos formularios incorporan un texto legal en materia de protección de datos personales que da cumplimiento a las exigencias establecidas en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, y en su Reglamento de Desarrollo, aprobado por el Real Decreto 1720/2007, de 21 de diciembre. Rogamos lea atentamente los textos legales antes de facilitar sus datos de carácter personal.</p>

        <p class="datos" align="justify">La relación entre Uala since 1990 y el Usuario se regirá por la normativa española vigente y cualquier controversia se someterá a los Juzgados y Tribunales del domicilio del Usuario. Uala since 1990 perseguirá el incumplimiento de las presentes Condiciones así como cualquier utilización indebida del sitio web ejerciendo todas las acciones civiles y penales que le puedan corresponder y asistan en derecho.</p>

				<input type="checkbox" name="contact_datos" value="datos" class="datos-check"> <span class="text-check">Acepto que he leído y estoy conforme con la cláusula anterior.</span><br>
			<?php 
			}
			?>
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>	  
		  
		<?php 
			if($sent == "ok") {
		?>
			<br><br>
			<p>El mensaje se ha enviado correctamente.</p>
		<?php 
			}
		?>
		  
		  
		  
        </article>
      </div>
    </div>  
  </section>
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
          <a class="term-legal" href="./terminos-legales.php">Términos Legales</a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>