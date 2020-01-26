<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>

<!--form script-->
<script src="scripts/formScript.js" type="text/javascript"></script>

<link rel="stylesheet" href="css/styles.css">
<!--form styles-->
<link rel="stylesheet" href="css/zombie_form.css">
<!--web font styles-->
<link rel="stylesheet" href="css/stylesheet.css">

<!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->



<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie9.css"/>
	<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
	<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="css/ie7.css"/>
	<![endif]-->

    <?php

    include 'templates/header.php';

    ?>

</head>

<body>



<section id="container"><!--container begins-->

<section id="content"><!--content begins-->

<article class="welcome"><!--articles begins-->
<h1>Contact Us</h1>
<p>The best way to beat this epidemic is to stand together.We cannot have the mind frame of every man for himself". It is war- the dead vs. the living</p>

<p>There are 3 main fortress locations in North America...For now. The first is in Kingston, Ontario, another in An Arbor Michigan and in Victoria Bristish Columbia. There are a lot of small bases in southern and mird and southern U.S but the three name before are the 3 largest ones.</p>

<p>To get more information on the fortesses and/or findout how you can get to safety fill out the from and we will get back to you ASAP!</p>
</article>

<article id="form">
<form>
	<label for="name">Name:</label>
	<input type="text" id="name" placeholder="Alannah Holder">
    <label for="email">Email:</label>
	<input type="text" id="email" placeholder="holdera2@hotmail.com">
    <label for="location">Location:</label>
	<input type="text" id="location" placeholder="Ajax, best buy basemoebt">
    <label for="supplies">Supplies:</label>
	<input type="text" class="bigbox" id="supplies" placeholder="2 machetes, hammer, knives, baseball bat">
    <label for="msg">Message:</label>
	<input type="text" class="bigbox" id="message" placeholder="Anything you want to say">
</form>

<button value="submit" name="submit" class="button" onClick="submitForm();">Survive</button>

</article><!--articles ends-->


</section><!--content ends-->

<?php
    include_once 'templates/footer.php';
?>
</section> <!--Container ends-->
</body>
</html>
