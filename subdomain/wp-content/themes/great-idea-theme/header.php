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


<div class="container">
<div class="homehead">
  <div  class="homehead--center">
<div class="homehead--center--text" style="transform: rotate(2deg);">Ola</div>
<div class="homehead--center--text" style= "transform: rotate(-2deg);"> Sejam Bem Vindos no</div>
<div class="homehead--center--text" style="transform: rotate(-4deg);">Otima Idea</div>

<i style="color: white;" id="arrow-icon" class="fas fa-angle-down"></i>
  </div>
 </div>
</div>

<!-- <div class="parallax">
<div class="parallax-content">
</div>
</div> -->

<div id="first_column">
 </div>
<div id="second_column">
<h3 class="text_style">Somos uma equipe altamente qualificada e competente, que em apenas 7 (sete) anos produziu mais de uma centena de soluções em Marketing Digital. Temos grandes cases durante essa trajetória e parceiros satisfeitos que acreditaram em nosso conhecimento.</h3>
</div>
<div id="third_column">
 </div>



</header>














