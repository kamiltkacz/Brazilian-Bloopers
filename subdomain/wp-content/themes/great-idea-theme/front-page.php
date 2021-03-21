
<?php get_header();?>


<h1>Front Page</h1>

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
 <div id="fourth_column">
 </div>
 <div id="fifth_column">
 </div>
 <div class="row"><button>Veja Mas Casos de Succeso</button></div>
 <div id="sixth_column">
 </div>

 <div class="container">

<div id="seventh_column">
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