<?php
     // create a new cURL resource
      $ch = curl_init();

      // set URL and other appropriate options
      curl_setopt($ch, CURLOPT_URL, "http://api.yipit.com/v1/deals/?key=Xyre6UJpsAe4VUwT&tag=Concert, Dance Classes, Fitness Classes, Skydiving");
      curl_setopt($ch, CURLOPT_GET, true);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      // grab URL and pass it to the browser
      $result = curl_exec($ch);

      $obj = json_decode($result);
      $sentiment = $obj->{'response'}->{'deals'};

      // close cURL resource, and free up system resources
      curl_close($ch);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Date Night</title>
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
          <a class="brand" href="index.html">Date Night</a>
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
        <h1>These date options are recommended for you and your lover!</h1>
        <hr color="#94D1CA">
            <?php foreach($sentiment as &$e){ ?>
              <p><?=$e?></p>
            <?php } ?>
            <img src="http://d.cdn.yipit.com/cache/deal/5-for-two-tickets-at-dangerfields-comedy-club-40-value-2-1339870194_small_image.jpg" />
            <a href="http://yipit.com/aff/eval/deal/?deal=YP3jNAwm&key=dZHJt2xj">$5 for Two Tickets at Dangerfield's Comedy Club! ($40 Value)</a> 
            <br/>
            <br/>
            <img src="http://b.cdn.yipit.com/cache/deal/two-30-minute-on-location-music-lessons-1339851658_small_image.jpg" />
            <a href="http://yipit.com/san-francisco/living-social/two-30-minute-on-location-music-lessons/">Two 30-Minute On-Location Music Lessons</a> 
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
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