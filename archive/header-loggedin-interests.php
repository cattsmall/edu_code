<html>
  <head>
    <title>Edgecate</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/styles.css" rel="stylesheet">
  </head>
  <body class="blue interests-body">
	
	<header class="logged-in">
	<nav>
          <a class="brand" href="index.php">Edgecate</a>

<div class="dropdown right">
<a class="btn dropdown-toggle" data-toggle="dropdown">Person Name</a>
<?php include 'loggedin-nav.php' ?>
</div>

<div class="dropdown right" id="notification">
<a class="btn dropdown-toggle" data-toggle="dropdown">0</a>
</div>

<div class="clearfix"></div>
</nav>
<div class="block block-container four-fifths center-margin color-block white interests-header">
<div>
Please choose your interests.
</div>
	<input type="submit" class="btn btn-submit half left" href="#" value="Continue"/>
	<a href="#" class="btn btn-reject half left" href="#"/>Skip this section, I'll do it later</a>
	<div class="clearfix"></div>
</div>
</header>