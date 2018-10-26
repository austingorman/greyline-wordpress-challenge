<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Greyline Station</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
  </head>
  <body>

<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark">
  
<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#atrium">Atrium</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#retail">Retail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Food&Drink</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Office</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">