<!DOCTYPE html>
<html lang="en">
<head>
<!-- charset -->
    <meta charset="UTF-8">
<!-- respon -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- infos -->
    <title>Otima Idea Wordpress</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- wphead -->
    <?php  wp_head();?>

</head>

<body <?php body_class();?>>

<header class="sticky-top">



<div class="container">


<?php wp_nav_menu(

array(

    'theme_location' => 'top-menu',
    'menu_class' => 'navigation'



)

);?>



</div>

</header>


















