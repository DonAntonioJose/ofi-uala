<!DOCTYPE html>
<html lang="es">
<head>
  <?php header("Content-type: text/html; charset=utf8"); ?>
  <meta chartset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Uala - Tienda virtual</title>
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
            <li><a href="./noticias.php">Ualalea</a></li>            
            <li><a href="./contacto.php">¡Cuéntanos!</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./tienda.php">¡A por tu uala! Shop</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <section class="main container virtual-shop">
    <div id="my-cart-11007317"></div>
    <div>
    <script type="text/javascript" src="https://app.ecwid.com/script.js?11007317&data_platform=code&data_date=2017-02-12" charset="utf-8"></script>
      
      <script type="text/javascript"> xCategoriesV2("id=my-categories-11007317"); </script>
    </div>
    <div>
      <script type="text/javascript" src="https://app.ecwid.com/script.js?11007317&data_platform=code&data_date=2017-02-12" charset="utf-8"></script>
      <!-- remove layout parameter if you want to position minicart yourself -->
      <script type="text/javascript"> xMinicart("layout=attachToCategories", "id=my-cart-11007317"); </script>
      <script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(20,3) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-11007317");</script>
    </div>
    <div>
    </div>
  </section>
  <footer>
    <div class="footer">
      <div class="col-xs-12 col-sm-4 footer-brand">
        <p>© 2017 Uala <span class="slogan">Since 1990</span></p>
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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
  <script src="js/uala.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>