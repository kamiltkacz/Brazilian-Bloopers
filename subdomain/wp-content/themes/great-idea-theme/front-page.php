
<?php get_header();?>


<h1>Front Page</h1>

<div class="container" id="homehead-cont">
<div class="homehead">
  <div  class="homehead--center">
<div class="homehead--center--text" style="transform: rotate(2deg);">Ola</div>
<div class="homehead--center--text" style= "transform: rotate(-2deg);"> Sejam Bem Vindos no</div>
<div class="homehead--center--text" style="transform: rotate(-4deg);">Otima Idea</div>

<a href="#examples" id="a_examples"><i id="arrow-icon-1" class="fas fa-angle-down"></i></a>
  </div>
 </div>
</div>

<!-- <div class="parallax">
<div class="parallax-content">
</div>
</div> -->

 <div id="col-1" class="container">
   <div id="arrow-div">
  <i id="arrow-icon-2" class="fas fa-angle-left"></i>
  </div>
 </div>

<div id="col-2" class="container">
<a id="examples"></a>
<h4 class="text_style">Somos uma equipe altamente qualificada e competente, que em apenas 7 (sete) anos produziu mais de uma centena de soluções em Marketing Digital. Temos grandes cases durante essa trajetória e parceiros satisfeitos que acreditaram em nosso conhecimento.</h4>
</div>


<div id="col-3" class="container">

  <span id="hovertext-1">CVC-Agencia de Turimso</span>

 </div>

 <div id="col-4" class="container">
 <!-- <span class="tooltiptext">Subamrino - Agenica dos descontos</span> -->
 </div>
 <div id="col-5" class="container">
 <!-- <span class="tooltiptext">Chilli Beans - Os oculos legais</span> -->
 </div>
 <!-- <div><button id="b-sucesso">Veja Mas Casos de Succeso</button></div> -->
 <div id="col-6" class="container">
 </div>

 <div class="container">

<div id="col-7">
 <div class="container">
  <div class="footerhead">
   <div  class="footerhead--center">
<div class="footerhead--center--text" style="transform: rotate(2deg);">Entre em Contato</div>
<div class="footerhead--center--text" style= "transform: rotate(-2deg);">Ótima Ideia Praia Grande</div>
<div class="footerhead--center--text" style= "transform: rotate(-3deg);">13 3491.2059</div>
<div class="footerhead--center--text" style="transform: rotate(-4deg);">R. Jaú, 1275 - Boqueirão, Praia Grande - SP</div>
   </div>
  </div>
 </div>
</div>


<?php if (have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif;?>




<?php get_footer();?>