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

<!-- <div id="spinner">
	<span>O
	<span>t
	<span>i
	<span>m
	<span>a
	<span>-
	<span>-
	<span>-
	<span>I
	<span>d
	<span>e
	<span>a
	<span>-
	<span>-
	<span>-
</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span>
</div> -->


<div class="container">


<?php wp_nav_menu(

array(
    'theme_location' => 'top-menu',
    'menu_class' => 'navigation'



)

);?>



</div>


<div class="container">
<div class="homehead">
  <div  class="homehead--center">
<div class="homehead--center--text" style="transform: rotate(2deg);">Ola</div>
<div class="homehead--center--text" style= "transform: rotate(-2deg);"> Sejam Bem Vindos no</div>
<div class="homehead--center--text" style="transform: rotate(-4deg);">Otima Idea</div>

<i style="color: white;" class="fas fa-angle-down"></i>
  </div>
 </div>
</div>

<div class="container">

<div class="parallax">
<div class="parallax-content">

Your content goes here...

</div>
</div>
</div>


</header>














