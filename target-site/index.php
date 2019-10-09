<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Demo of XSS against PHP</h1>
      <h3 class="mb-5">
        <em>See the readme.md file for details</em>
      </h3>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- Stored XSS -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Stored XSS demonstration</h2>
          <p class="lead mb-5">
            This section will include unescaped content from the file called "database_content.txt"
          </p>
          <p>
            <?php
              define('STORED_XSS_DEMO_FILE', '../database-content.txt');
              if (file_exists(STORED_XSS_DEMO_FILE)) {
                // we do not escape the contents of the file and so we are vulnerable to XSS
                echo file_get_contents(STORED_XSS_DEMO_FILE);
              } else {
                echo STORED_XSS_DEMO_FILE . ' not found.  Place this file in the directory with the readme.md file to insert script into this page.';
              }
            ?>
          </p>
        </div>
      </div>
    </div>
  </section>

    <!-- Reflected XSS -->
    <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Reflected XSS demonstration</h2>
          <p class="lead mb-5">
            Supply a GET parameter called "error" to inject script into this page.
          </p>
          <?= $_GET['error'] ?? 'No reflected XSS supplied' ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
