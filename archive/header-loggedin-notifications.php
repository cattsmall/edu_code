<html>
  <head>
    <title>Edgecate</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
	
	<header class="logged-in">
	<nav>
          <a class="brand" href="index.php">Edgecate</a>

<div class="dropdown right">
<a class="btn dropdown-toggle" data-toggle="dropdown">Person Name</a>
<?php include 'loggedin-nav.php' ?>
</div>

<div class="dropdown right" id="notification">
<a class="btn dropdown-toggle oneplus" data-toggle="dropdown">5</a>
<?php include 'notifications.php' ?>
</div>

<div class="clearfix"></div>
</nav>
</header>