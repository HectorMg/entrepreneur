<?php
  include_once("../core/settings.php");
  session_name("CSCFELC");
  session_start();
?>
<!DOCTYPE html>
<title>FELC - Home</title>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/felcfavicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../Bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="../Bootstrap/css/carousel.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  

<!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
  <script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>
<body role="document">
  <div style="z-index: 1000;" class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="principal.php"><img class="navbar-brand" src="../images/corner_logo.gif"; style="padding: 1px, 1px;"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="principal.php">Home</a></li>
                <li><a href="company.php">Companies</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="manual.php" target="_blank">Manual</a></li>
                <?php
                //DropDown or Not:
                  $ID = $_SESSION['userid'];
                  $accTypeQ = mysql_query("SELECT Account_Type FROM users WHERE ID = '$ID'");
                  $accTypeR = mysql_fetch_array($accTypeQ);
                  

                   if ($accTypeR[0] != "1" && $accTypeR[0] != "2") {?>

                    <li><a href="../staff/bank.php">The Bank</a></li><?php
                   }else{?>
                    <li class="dropdown">
                      <a href="../staff/bank.php" class="dropdown-toggle" data-toggle="dropdown">The Bank <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="../staff/bank.php">Bank</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Corporate Accounts</li>
                        <li><a href="../staff/bankF1.php">Food 1</a></li>
                        <li><a href="../staff/bankF2.php">Food 2</a></li>
                        <li><a href="../staff/bankE1.php">Entertainment 1</a></li>
                        <li><a href="../staff/bankE2.php">Entertainment 2</a></li>
                        <li><a href="../staff/bankPS1.php">Public Services 1</a></li>
                        <li><a href="../staff/bankPS2.php">Public Services 2</a></li>
                        <li><a href="../staff/bankW1.php">Wildcard 1</a></li>
                        <li><a href="../staff/bankW2.php">Wildcard 2</a></li>
                      </ul>
                    </li><?php
                   }
                ?>
                <li style="margin-left: 350px"><a href="../staff/bank.php">
                    
                    <?php
                    //Echo Name and Lastname Next to Logout
                    
                    $ID = $_SESSION['userid'];
                    $getNameRes = mysql_query("SELECT Name FROM u404044402_bank . users WHERE ID = $ID");
                    $getNameRow = mysql_fetch_row($getNameRes);
                    $name = $getNameRow[0];

                    $getLastNameRes = mysql_query("SELECT Lastname FROM u404044402_bank . users WHERE ID = $ID");
                    $getLastNameRow = mysql_fetch_row($getLastNameRes);
                    $lastName = $getLastNameRow[0];

                    echo $name . " " . $lastName;

                    ?>

                  </a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action 
    

<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
<li><img src="data1/images/felccover.jpg" alt="Welcome To FELC" title="Welcome To FELC" id="wows1_0"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="data1/images/felccover.jpg" title="Welcome To FELC"><img src="data1/tooltips/felccover.jpg" alt="Welcome To FELC"/>1</a>
<a href="data1/images/mesa.jpg" title="STUDENT BOARD">2</a>
<a href="data1/images/coromarianakatya.jpg" title="FELC JR. 2014">3</a>
<a href="data1/images/jbsg.jpg" title="FELC JR. 2014">4</a>
<a href="data1/images/unacompany.jpg" title="FELC JR. 2014">5</a>
<a href="data1/images/zorillapimp.jpg" title="FELC JR. 2014">6</a>
</div></div><span class="wsl"><a href="http://wowslider.com/vr">responsive carousel</a> by WOWSlider.com v6.1m</span>
  <a href="#" class="ws_frame"></a>
  <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="engine1//wowslider.js"></script>
  <script type="text/javascript" src="engine1//script.js"></script>
<!-- End WOWSlider.com BODY section -->

 <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Conception</h2>
          <p>With a focus on young people in mind and a creative idea that developed years prior, Helms Center President John Dodd founded FELC in 1995 to teach young people about free enterprise and the principles which support it. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
       <div class="col-md-4">
          <h2>Prepa Tec and FELC</h2>
          <p>In 2002, the Helms Center partnered with Tecnologico de Monterrey's high school division "Prepa Tec" to take FELC to Mexico. FELC is now a regular part of Prepa Tec's after-school offerings across its five campuses. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Goal</h2>
          <p>The goal of FELC is to educate students about entrepreneurship, the differences between capitalism and socialism, free market economics, personal responsibility, principled leadership and corporate/personal philanthropy.  Activities and lessons are designed for students to create meaningful practical application.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
      <h1>Sponsors</h1>
      

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">H-E-B:</h2>
          <p class="lead" style= "font-size: 14px"><a class="btn btn-default" href="http://www.hebmexico.com" target="_blank" role="button">Visit Website &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <a name="Food"></a> 
          <img class="featurette-image img-responsive" style= "max-width: 729px; margin-top: 75px" src="../images/HEB.jpg" alt="HEB">  
        </div>
      </div>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">NOVALIV:</h2>
          <p class="lead" style= "font-size: 14px"><a class="btn btn-default" href="http://www.novaliv.mx/" target="_blank" role="button">Visit Website &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <a name="Food"></a> 
          <img class="featurette-image img-responsive" style= "max-width: 729px; margin-top: 75px" src="../images/novaliv.png" alt="HEB">  
        </div>
      </div>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Habitat Boutique Inmobiliaria:</h2>
          <p class="lead" style= "font-size: 14px"><a class="btn btn-default" href="http://www.habitatbi.mx/" target="_blank" role="button">Visit Website &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <a name="Food"></a> 
          <img class="featurette-image img-responsive" style= "max-width: 729px; margin-top: 75px" src="../images/habitat.jpg" alt="HEB">  
        </div>
      </div>
       <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Create Your Own:</h2>
        </div>
        <div class="col-md-5">
          <a name="Food"></a> 
          <img class="featurette-image img-responsive" style= "max-width: 729px; margin-top: 75px" src="../images/cyo.gif" alt="HEB">  
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/docs.min.js"></script>
  </body>
</html>
