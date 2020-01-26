<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Zombies</title>
<!--web font styles-->
<link rel="stylesheet" href="css/styles.css">
<!--web font styles-->
<link rel="stylesheet" href="css/stylesheet.css">

<!--Codes to make site compatible with older versions of IE -->
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
    include_once 'templates/header.php';

    $query = 'SELECT * FROM mysql_69903_php.zombies WHERE id = 1';
    $r = mysql_query($query);


    ?>
</head>

<body>

<section id="container"><!--container begins-->

<section id="content"><!--content begins-->
    <?php while ($row = mysql_fetch_assoc($r)) :?>
<article class="welcome"><!--articles-->

<h1><?php echo $row['title']; ?></h1>

<p><?php echo $row['content']; ?></p>
</article>
    <?php endwhile; ?>

<article class="zombies">
<img src="images/pic3.png" alt="zombies"/>

<h1>Weapons</h1>
<img src="images/baseball.png" alt="zombies"/>
<img src="images/machete.png" alt="zombies"/>
<img src="images/hammer.png" alt="zombies"/>

</article><!--articles ends-->

</section><!--content ends-->

    <?php
    include_once 'templates/footer.php';
    ?>

</section> <!--Container ends-->
</body>
</html>
