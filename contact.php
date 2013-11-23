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
              <li><a href="date.html">Date</a></li>
              <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <div class="span10">
            <h1>Questions or concerns?</h1>
              <form action="contact.php" method="post">
                <fieldset>
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" placeholder="Enter your name or organization" />
                  
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="Enter your email address" />
                  
                  <label for="message">Message</label>
                  <textarea id="message" name="message" placeholder="Type your message here"></textarea>
                  <br>
                  <input id="submit" name="submit" type="submit" value="Send message" class="btn primary large" background-color="white"/>
                </fieldset>
              </form>
          </div>
        <p>*Return messages may take up to a day to process.</p>
      </div>

      <div id="confirmation-modal" class="modal hide fade" tabindex="-1" role="dialog">
        <div class="modal-header">
          <a href="#" class="close" data-dismiss="modal">&times;</a>
          <h3>Thanks for Contacting Us!</h3>
          </div>
        <div class="modal-body">
          <p id="confirmation-text"></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>Developed by Don Yu, Sophie Chou, Anna Zhu, and Patrice Liang at the 2012 HackNJill Hackathon</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-modalmanager.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script>
      function closeDialog () {
        $('#confirmation-modal').modal('hide'); 
      };

      function showModal(modalText) {
        $('#confirmation-text').text(modalText);
        $('#confirmation-modal').modal('show');
      }
    </script>

    <?php

    function send_email() {
      $subject = "Someone is Interested in Wingwoman!";
      $message = $_POST["message"];
      $mail_from = $_POST["email"];
      $name = $_POST["name"];
      $header = "from: $name <$mail_from>";
      $to = "xiaodonyu@gmail.com";
      $send_contact = mail($to, $subject, $message, $header);
      $send_contact = true;

      if ($send_contact) {
        echo '<script>'
          , 'showModal("We have received your message and email. Thanks again for your interest and we will try to answer your questions or concerns soon!");'
          , '</script>';
      } else {
        echo '<script>'
          , 'showModal("Something went wrong. Perhaps you were trying to hack us?");'
          , '</script>';
      }
    }

    if (isset($_POST['submit'])) {
      send_email();
    }

    ?>

  </body>
</html>
