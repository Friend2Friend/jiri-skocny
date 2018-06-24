<?php

include './includes/functions.php';
include './includes/db.php';

  $files = glob('*.php');

  $current_page = basename($_SERVER['SCRIPT_NAME'], '.php');

  if ($current_page === 'index') {
    $current_page = 'Home';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo  $current_page; ?></title>
  <!-- css & fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link rel="stylesheet" href="./assets/font-awesome-4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
  <header>
    <div class="container" id="navigation">
      <div class="logo">
        <a href="index">
          <h2>Web<span>App</span></h2>
        </a>
      </div>
      <div class="navigation-header">
        <nav>
          <ul>
            <?php
              navigationList();
            ?>
          </ul>
        </nav>
      </div>
      <a href="#">
        <div id="bars">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
    </div>
    <div class="overlay-sidebar">
      <nav id="sidebar">
        <ul>
            <?php
              navigationList();
            ?>
        </ul>
        <a href="#">
          <div id="close-btn-sidenav">
            <span></span>
            <span></span>
          </div>
        </a>
      </nav>
    </div>
  </header>