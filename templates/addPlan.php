<?php


$db_host = 'my03.winhost.com';
$user = 'aholder';
$password = 'Charles34!';
$db_name = 'mysql_69903_php';

$conn = mysql_connect($db_host, $user, $password, $db_name) or die ('unable to connect'. mysql_error);


    $name = mysql_real_escape_string($_POST['user_name']);
    $pname = mysql_real_escape_string($_POST['plan_name']);
    $plan = mysql_real_escape_string($_POST['plan']);

        $q = "INSERT INTO mysql_69903_php.plans (user_name, plan_name, plan_content)
        VALUES ('$name', '$pname', '$plan')";

    if(!mysql_query($q)){
        die('Error'. mysql_error());
    } else{
        header('Location: http://aholder.net/zsurvival/survival.php');
    }



        /*}
         $r = @mysql_query($conn ,$q);
        if ($r){else {
            echo "fail". mysql_error();
        }

   */

/**
 * Created by PhpStorm.
 * User: alannahholder
 * Date: 2014-06-12
 * Time: 12:03 PM
 */ 