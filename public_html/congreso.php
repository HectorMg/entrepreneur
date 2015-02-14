
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <title>Entrepreneur - Congreso</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="../public_html/resources/bootstrap/css/justified-nav.css" rel="stylesheet">
    <link href="../public_html/resources/bootstrap/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="calendario.html">Calendario</a></li>
            <li><a href="gallery.html">Galería</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li class="active" ><a href="congreso.php">Congreso</a></li>
          </ul>
        </nav>
      </div>

   
  
          <center><h1 class="page-header" id="subtitle-home">ENTREPRENEUR 2015</h1></center>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
          <span id="upload"></span>
          <h2 class="sub-header">SECCIÓN PARA SUBIR ACTIVIDADES</h2>
          
          <!--File Upload:-->
          <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Subir Archivos:</h3>
              </div>
              <div class="panel-body">
              
              <?php
                  if(isset($_GET['file'])){
                    if($_GET['file'] == 'upl'){?>
                       <div class="alert alert-success"><p>El archivo se ha subido correctamente.</p></div>
                    <?php }elseif($_GET['file'] == 'fail'){?>
                      <div class="alert alert-danger"><p>Lo sentimos, el archivo no se subió correctamente por alguna razón desconocida. Verifica que todo esté bien antes de volver a intentar.</p></div>
                    <?php }elseif($_GET['file'] == 'fail1'){?>
                      <div class="alert alert-danger"><p>Lo sentimos, el archivo no se subió correctamente porque no es una imágen. Verifica que todo esté bien antes de volver a intentar.</p></div>
                    <?php }elseif($_GET['file'] == 'fail2'){?>
                      <div class="alert alert-danger"><p>Lo sentimos, el archivo no se subió correctamente porque un archivo con el mismo nombre ya existe. Favor de intentar de nuevo con otro nombre.</p></div>
                    <?php }elseif($_GET['file'] == 'fail3'){?>
                      <div class="alert alert-danger"><p>Lo sentimos, el archivo no se subió correctamente porque su tamaño excede el límite. Favor de intentar de nuevo con un archivo menos pesado.</p></div>
                    <?php }elseif($_GET['file'] == 'fail4'){?>
                      <div class="alert alert-danger"><p>Lo sentimos, el archivo no se subió correctamente porque su formato no es el indicado. Favor de verificar que sea JPG, JPEG, PNG ó GIF.</p></div>
                    <?php }    
                  }
                ?>
                <form action="../public_html/actions/upload_file.php" method="post" enctype="multipart/form-data">
                    <p>Select file to upload:</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input class="btn" id="btn-prim" type="submit" value="Upload File" name="submit" style="margin-top: 10px">
                </form>
              </div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Site footer -->
      <footer class="footer">
        <center><p>&copy; CSC Entrepreneur 2015. Powered by MG</p></center>
      </footer>
        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../public_html/resources/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
