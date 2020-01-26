<!doctype html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Survival</title>
    <!--web font styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/zombie_form.css">
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

    $query = 'SELECT * FROM mysql_69903_php.zombies WHERE id = 2';
    $result = mysql_query($query);

    $query2 = 'SELECT * FROM mysql_69903_php.plans';
    $result2 = mysql_query($query2);


    ?>
</head>

<body>

<section id="container"><!--container begins-->

    <section id="content"><!--content begins-->

        <?php while ($row = mysql_fetch_assoc($result)) :?>
        <article class="welcome form"><!--articles-->
            <h1><?php echo $row['title']; ?></h1>

            <p><?php echo $row['content']; ?></p>

            <h1>Add Your Plan</h1>

            <form class="submitPlan" method="post" action="templates/addPlan.php">
                <label>Name (optional):</label>
                <input type="text" name="user_name" pattern="[a-zA-Z0-9]+" id="username" />

                <label>Plan name:</label>
                <input type="text" name="plan_name" pattern="[a-zA-Z0-9]+" id="username" required />

                <label>Your Plan:</label>
                <textarea rows="4" name="plan" required></textarea>

                 <button value="submit" class="button" name="addPlan">Survive</button>
            </form>
        </article>
        <?php endwhile; ?>


        <article id="plans" style="overflow: scroll;">
            <h1>Apocalypse Surival Plans </h1>

            <?php while ($row2 = mysql_fetch_assoc($result2)) :?>
            <h2><?php echo $row2['plan_name']; ?></h2>
            <span class="user">By: <?php echo $row2['user_name']; ?></span>

            <p><?php echo $row2['plan_content']; ?></p>
            <?php endwhile; ?>
        </article>
        <!--articles ends-->

    </section><!--content ends-->

    <?php
    include_once 'templates/footer.php';
    ?>

</section> <!--Container ends-->
</body>
</html>
