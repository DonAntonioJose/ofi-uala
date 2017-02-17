<!DOCTYPE html>
<html lang="es">
<head>
  <?php header("Content-type: text/html; charset=utf8"); ?>
  <meta chartset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Uala - Contacto</title>
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
            <li class="active"><a href="./contacto.php">¡Cuéntanos!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./tienda.php">¡A por tu uãla! Shop</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <section class="main container contact">
    <div class="wrap">
      <div class="first-element">
        <article class="col-xs-12 col-md-6">
        <img src="./images/contact.png" alt="contacto">
          <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
        </article>
      </div>
      <div class="second-element">
        <article class="col-xs-12 col-md-6">
          <form action="sendbymail.php" method="post" role="contact_form" >
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
            <button type="submit" class="btn btn-default">Enviar</button>
          </form>
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
          <li> <a href="#"> <i class="instagram"> </i> </a> </li>
          <li> <a href="#"> <i class="facebook"> </i> </a> </li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 footer-legal">
        <div class="content-legal">
          <a class="faq" href="#">FAQ</a>
          <a class="term-legal" href="#">Términos Legales</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="js/uala.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>