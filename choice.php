<?php
  $selected = $_POST['met'];
  $choice = 0;
  if($selected == 'bar')
    $choice = 1;
  elseif($selected == 'gym')
    $choice = 2;
  elseif($selected == 'work')
    $choice = 3;
  elseif($selected == 'con')
    $choice = 4;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WingWoman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html">WingWoman</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="date.html">Date</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Your Perfect Date is Waiting!</h1>
        <hr color="#94D1CA">
        <?php if($choice == 1) { ?>
              <h2>What did he/she drink?</h2>
        <br/>
        <form method="post" action="choice2.php">
          <input type="radio" name="met" value="beer" /> Beer <br/>
          <input type="radio" name="met" value="cos" /> Cosmopolitan <br/>
          <input type="radio" name="met" value="gin" /> Gin and Tonic <br/>
          <input type="radio" name="met" value="teq" /> Shot of Tequila <br/>
          <input id="submit" name="submit" type="submit" value="Next Question &raquo;" class="btn primary large" background-color="white"/>
        </form>
            <?php } ?>
        <?php if($choice == 2) { ?>
              <h2>What was his/her workout plan?</h2>
        <br/>
        <form method="post" action="choice2.php">
          <input type="radio" name="met" value="beer" /> Weight lifting <br/>
          <input type="radio" name="met" value="cos" /> Treadmill <br/>
          <input type="radio" name="met" value="gin" /> Pilates/Yoga <br/>
          <input type="radio" name="met" value="teq" /> Sport Activity <br/>
          <input id="submit" name="submit" type="submit" value="Next Question &raquo;" class="btn primary large" background-color="white"/>
        </form>
            <?php } ?>
        <?php if($choice == 3) { ?>
              <h2>What does she/he usually eat for lunch?</h2>
        <br/>
        <form method="post" action="choice2.php">
          <input type="radio" name="met" value="beer" /> Homemade sandwich <br/>
          <input type="radio" name="met" value="cos" /> Sushi <br/>
          <input type="radio" name="met" value="gin" /> Salad <br/>
          <input type="radio" name="met" value="teq" /> Fast Food <br/>
          <input id="submit" name="submit" type="submit" value="Next Question &raquo;" class="btn primary large" background-color="white"/>
        </form>
            <?php } ?>
          <?php if($choice == 4) { ?>
              <h2>What kind of music was playing?</h2>
        <br/>
        <form method="post" action="choice2.php">
          <input type="radio" name="met" value="beer" /> Indie <br/>
          <input type="radio" name="met" value="cos" /> Classical <br/>
          <input type="radio" name="met" value="gin" /> Rock and Roll <br/>
          <input type="radio" name="met" value="teq" /> Pop <br/>
          <input id="submit" name="submit" type="submit" value="Next Question &raquo;" class="btn primary large" background-color="white"/>
        </form>
            <?php } ?>
        
      </div>

      <hr>

      <footer>
        <p>Developed by Don Yu, Sophie Chou, Anna Zhu, and Patrice Liang at the 2012 HackNJill Hackathon</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>