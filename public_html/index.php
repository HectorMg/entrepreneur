
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Héctor Morales: hectormgwake@gmail.com">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Entrepreneur - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../public_html/resources/bootstrap/css/justified-nav.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <center><a href="index.php"><img id="logo" src="../public_html/resources/images/entrepreneur_logo.gif"></a></center>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="">Inicio</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="calendario.html">Calendario</a></li>
            <li><a href="gallery.html">Galería</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="congreso.php">Congreso</a></li>
          </ul>
        </nav>
      </div>

      <!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../public_html/resources/images/seleccion_staff.jpg" alt="Selección de Staff">
          <div class="container">
            <div class="carousel-caption">
              <h1 id="carousel-black">Selección de Staff</h1>
              <p id="carousel-black" >¡Asiste a nuestra selección de staff!</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.facebook.com/cscentrepreneur" target="_blank" role="button">Mas información</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../public_html/resources/images/mesa.jpg" alt="Mesa">
        <div class="container">
            <div class="carousel-caption">
             
              <p><a class="btn btn-lg btn-primary" href="#qs"role="button">¿Quiénes Somos?</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../public_html/resources/images/winners.jpg" alt="Ganadores">
          <div class="container">
            <div class="carousel-caption">
              <h1 id="carousel-black">Selección de Staff</h1>
              <p id="carousel-black" >¡Asiste a nuestra selección de staff!</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.facebook.com/cscentrepreneur"role="button">Mas información</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div><!-- /.carousel -->

      <!-- Example row of columns -->
      
      <div id ="qs" class="row">
        <div class="col-lg-15">
          <h2 id="subtitle-home">¿Quiénes somos?</h2>
          <p style="font-size: 30px">Somos un nuevo grupo estudiantil que tiene como objetivo desarrollar e impulsar el carácter emprendedor de cada alumno participante dentro de la Prepa Tec CSC.</p>
          
        </div>
      </div>

      <div class="col-md-10">
          <a class="twitter-timeline" href="https://twitter.com/CscEntrepreneur" data-widget-id="566670181439508480">Tweets de @CscEntrepreneur</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>

      <!-- Site footer -->
      <footer class="footer">
        <center><p>&copy; CSC Entrepreneur 2015. Powered by MG</p></center>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../public_html/resources/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../public_html/resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public_html/resources/bootstrap/js/docs.min.js"></script>
  </body>
</html>
