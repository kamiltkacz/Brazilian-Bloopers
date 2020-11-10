// $(document).ready(function() {

// });





const tabsSwitch = $(`<div class="tabs">
 <button id="defaultOpen" class="tablink" onclick="openPage('Home', this);">
    <a href="#" id="active_home" class="active">Home</a>
  </button>
 <button class="tablink" onclick="openPage('About', this);">
    <a href="#" class="active">Sobre</a>
  </button>
 <button class="tablink" onclick="openPage('TheQuiz', this);">
    <a href="#" id="active_quiz" class="active">O Quiz</a>
  </button>
 <button class="tablink" onclick="openPage('ContactUs', this);">
    <a href="#" class="active">Contato</a>
  </button>
  <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/en-us.png" id="eng_btn" onclick="window.location.href = 'index.php'" height="24" width="24" alt="English">
  <div id="port_icon>
  <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/pt-br.png" id="port_btn" height="24" width="24" alt="Portuguese">
 </div>
</div>`);




const headerSwitch = $(`
  <header>
    <h3 style="margin-top: 15px;">Olá, bem-vindo aos Brazilian Bloopers.<br> <br> Aqui nós contamos o que te trai como brasileiro!</h3>
  </header>
  `);

const aboutSwitch = $(` <div id="About" class="tabcontent">
  <div class="container" id="about_us">
  <fieldset class="field_about">
     <legend class="leg_highlight" id="leg_high_1">Sobre nós</legend>
      <p class="al_left">Somos um grupo de professores de inglês baseados em Brasília, Brasil, que estão determinados a aprimorar suas habilidades. Compilamos este quiz com base em anos de experiência. <br> Um dia, fascinados por vários "brasilismos" que os alunos ficavam atirando em nossos ouvidos, decidimos que esse fenômeno merecia um site próprio. Assim, o projeto Brazilian Bloopers ganhou vida.</p>
  </fieldset>
  </div>
    <div class="container">
    <fieldset class="field_about">
      <legend class="leg_highlight" id="leg_high_2" >Sobre os Bloopers</legend>
      <p class="al_left">Vamos encarar. Aprender outro idioma e comunicar suas ideias nele não é tarefa fácil. O inglês, embora onipresente neste mundo, não é exceção. Estamos aqui para ajudar um pouco nisso.<br>Se você procurar a definição em inglês da palavra <a href="https://www.dictionary.com/browse/blooper" style="background: radial-gradient(#2c00f7, #00000059); border-radius: 20px; padding: 5px" target="_blank"><span>'blooper'</span></a>&nbsp;você receberá "um erro embaraçoso que você comete publicamente". Embora não achemos que os erros que você encontrará aqui sejam tão graves, acreditamos que corrigi-los é um grande passo em sua jornada de aprendizado de idiomas.<br><a href="#examples" id="a_examples">&nbsp;<span>Confira os exemplos abaixo.</span></a></p>
    </fieldset>
    </div>

  <div class="container" id="about_qz">
  <fieldset class="field_about">
     <legend class="leg_highlight" id="leg_high_3">Sobre o Quiz</legend>
     <p class="al_left">O questionário consiste em falsos cognatos, expressões idiomáticas, frases incompletas, etc. Você verá uma série de diálogos. Você deve usar seu bom senso ao escolher a única resposta correta.<br><br>&nbsp;Existem 30 questões que variam em dificuldade. Alguns erros são mais comuns e outros menos frequentes, mas todos eles compartilham a peculiaridade da língua portuguesa que não traduz bem para o inglês. Mesmo que muitos dos erros sejam inteligíveis para falantes nativos de inglês, seria melhor você encontrar uma alternativa mais comum.<br><br>&nbsp;Mas não seja tão duro consigo mesmo - Tudo bem se você tem um pedaço do Brasil que nunca sai do seu cérebro, e por que não deixar o gringo pensar um pouco?<br><br>Não se esqueça de aproveitar o processo!<br><br><a href="#" style="background: radial-gradient(#2c00f7, #00000059); border-radius: 20px; padding: 5px", onclick="openPage('TheQuiz', this);">Pronto?</a></p>
   </fieldset>
   </div>
   <div class="container">
      <picture>
        <legend class="leg_highlight"><a id="examples" style="font-size: 25px;">Exemplo de um erro brasileiro em um diálogo casual:</a></legend>
       <br><br><p>A) Did you like your trip?</p><br><p style="margin-top: -20px;">B)&nbsp;<span class="error_style"><em>More or less.</em></span></p><br><p style="margin-top: -20px;">A) Hmmm...&#129300;</p>
       <hr>
       <p class="al_left">&nbsp;<span class="span_exp">Explanation:</span>&nbsp;In English we generally say "More or Less" to use it as an approximation of numbers, quantities, a "plus-minus". Ex. "It will cost you 40 reais, more or less."<br><br>We don't answer with "more or less" only to express value or our impression of something. If you thought the above mentioned trip could have been better, you answer "Not much". If you thought it could have been worse, you answer "It was okay." You should remember that answers like this are hugely context dependent, meaning, you will have to develop what you mean in more detail.</p>
      </picture>
    </div>
    <div class="container">
      <legend class="leg_highlight">Exemplo nº 1 de Bloopers no mainstream.</legend><br>
      <p class="al_left">O hit de Michel Telo, uma canção brasileira muito popular, tem uma leitura um pouco áspera em inglês. Entre outros erros menores, o título "Se eu te pegar" dá como algo traduzido do português de maneira desajeitada. Mesmo o showbusiness mainstream não está livre de erros ocasionais.</p>
      <div class="yt-resp">
        <iframe class="iframe-resp" src="https://www.youtube.com/embed/CwC5BFX7rqQ">
        </iframe>
      </div>
      <p class="al_left">Abaixo está uma versão muito melhor, onde o cantor americano Pitbull dá seu próprio toque às letras. "Se eu te pegar" torna-se "Se eu te pegar" e "assim você vai me matar" se traduz em "você está jogando duro para conseguir". Bom trabalho Pitbull</p>
      <div class="yt-resp">
        <iframe class="iframe-resp" src="https://www.youtube.com/embed/bMMnn2kA_HY">
        </iframe>
        </div>
    </div>
    <div class="container">
    <legend class="leg_highlight">Exemplo nº 2 de Bloopers no mainstream.</legend><br>
      <p class="al_left">A entrevista de Marilia Gabriela com a única Madonna é claramente estranha, em parte devido à incapacidade do jornalista brasileiro de colocar seu inglês nos trilhos. Madonna claramente não era caridosa e estava com vontade de ajudar.</p>
        <div class="yt-resp">
          <iframe class="iframe-resp" src="https://www.youtube.com/embed/zHMhLd4MUC4">
          </iframe>
        </div>
    </div>

</div>`);

const legStepsSwitch = $(
  `<legend id="leg_steps">Siga estas 3 etapas simples:</legend>`
);
const clickSurveySwitch = $(
  `<p id="click_survey">1. Primeiro, preencha nossa pesquisa espetacularmente curta.</p>`
);
const clickStartSwitch = $(
  `<p id="click_start">2. Em seguida, clique no botão "Iniciar" para iniciar o questionário.</p><br>`
);
const haveFunSwitch = $(`<p id="have_fun">3.Divirta-se!</p>`);

const feedbackSwitch = $(` <div id="feedback_div" style="text-align:center">
      <h3 id="shoot_email">Se você gostou do quiz diga oi para mim no<br><i class="fab fa-twitter"></i><a href="https://twitter.com/kamiltkacz" style="font-size: unset;">&nbsp;@kamiltkacz</a><br>manda um e-mail diretamente </h3>
      <h3><a href="mailto:hello@brazilianbloopers.com">hello@brazilianbloopers.com</a></h3>
      <h3>ou</h3>
    </div>`);

const contactSwitch = $(` <div id="contact_text">
            <label for="name">Nome*<span id="span_name"></span></label>
          <input type="text" id="bor_name" name="name" placeholder="Seu nome.." font-family="cursive">
            <label for="email">E-mail*<span id="span_email"></span></label>
          <input type="text" id="bor_email" name="email" placeholder="Seu e-mail..">
            <label for="subject">Assunto</label>
          <input type="text" id="bor_subject" name="subject" placeholder="Sugestão, comentário, etc.">
            <label for="message">Mensagem*<span id="span_message"></span></label>
          <textarea id="bor_message" name="message" placeholder="Escreva sua mensagem aqui!" style="height:170px"></textarea>
          </div>`);

const footerSwitch = $(`<div id="footer" class="container">
    <p id="p_footer">Autor - Kamil Tkacz&nbsp;<a href="https://twitter.com/kamiltkacz" style="font-size: unset;">@kamiltkacz</a>&nbsp;<i class="fab fa-twitter"></i><br>
      &copy;2020 BrazilianBloopers.com<br>
      Foto &nbsp;<a href="https://www.instagram.com/andrenoboa/?utm_medium=referral&utm_source=unsplash"style="font-size: unset;">@andrenoboa</a>&nbsp;<i class="fab fa-instagram"></i></p>
  </div>`);

const ques_1_Switch = $(
  `<p class="surv_ques"><label id="bor_gender">1) Que gênero você é?<span id="span_gender" style="color:#ff0000"></span></label></p><br>`
);

const ques_2_Switch = $(
  `<p class="surv_ques"><label id="bor_age">2) Quantos anos você tem?<span id="span_age" style="color:#ff0000"></span></label></p><br>`
);

const ques_3_Switch = $(
  ` <p class="surv_ques"><label id="bor_years">3) Estudante de inglês<span id="span_years" style="color:#ff0000"></span></label></p><br>`
);
const ques_4_Switch = $(
  ` <p class="surv_ques"><label id="bor_abroad">4) Experiência no exterior<span id="span_abroad" style="color:#ff0000"></span></label></p><br>`
);
const ques_5_Switch = $(
  `<p class="surv_ques"><label id="bor_way">5) Como você aprende?<span id="span_way" style="color:#ff0000"><br></span></label></p><br>`
);
const ques_6_Switch = $(
  `<p class="surv_ques"><label id="bor_others">6) Línguas estrangeiras<span id="span_others" style="color:#ff0000"></span></label></p><br>`
);
const ques_7_Switch = $(
  ` <p class="surv_ques"><label id="bor_country">7) Onde você mora?<span id="span_country" style="color:#ff0000"></span></label></p><br>`
);




$("#port_btn").on("click", function () {


  $(".tabs").replaceWith(tabsSwitch);
  $("#eng_btn").show();
  $("header").replaceWith(headerSwitch);
  $("#About").replaceWith(aboutSwitch);
  $("#leg_steps").replaceWith(legStepsSwitch);
  $("#click_survey").replaceWith(clickSurveySwitch);
  $("#start_survey").text("Pesquisa");
  $("#click_start").replaceWith(clickStartSwitch);
  $("#start_quiz").text("Comece");
  $("#have_fun").replaceWith(haveFunSwitch);
  $("#feedback_div").replaceWith(feedbackSwitch);
  $("#contact_text").replaceWith(contactSwitch);
  $("#submit_contact").text("Enviar");
  $("#footer").replaceWith(footerSwitch);
  // $("#surv_port").replaceWith(surveySwitch);

  $("#surv_q1").replaceWith(ques_1_Switch);
  $("label[for*='male']").text(" homen ");
  $("label[for*='female']").text(" mulher ");
  $("label[for*='other']").text(" outro ");

  $("#surv_q2").replaceWith(ques_2_Switch);
  $("#opt").text("Selecione sua idade");

  $("#surv_q3").replaceWith(ques_3_Switch);
  $("label[for*='y1']").text(" 0-1 anos ");
  $("label[for*='y2']").text(" 2-5 anos ");
  $("label[for*='y3']").text(" 5-10 anos ");
  $("label[for*='y4']").text(" 10+ anos ");
  $("label[for*='y5']").text(" nunca estudei ");

  $("#surv_q4").replaceWith(ques_4_Switch);
  $("label[for*='abr1']").text(" menos de 1 ano ");
  $("label[for*='abr2']").text(" 1-2 anos ");
  $("label[for*='abr3']").text(" 3-5 anos ");
  $("label[for*='abr4']").text(" 6-10 anos ");
  $("label[for*='abr5']").text(" 10+ anos ");
  $("label[for*='abr6']").text(" nunca morei no exterior ");

  $("#surv_q5").replaceWith(ques_5_Switch);
  $("label[for*='way1']").text(" curso de grupo ");
  $("label[for*='way2']").text(" professor particular ");
  $("label[for*='way3']").text(" auto-ensino ");
  $("label[for*='way4']").text(" apps ");
  $("label[for*='way5']").text(" jogos ");
  $("label[for*='way6']").text(" outros ");

  $("#surv_q6").replaceWith(ques_6_Switch);
  $("label[for*='oth1']").text(" uma ");
  $("label[for*='oth2']").text(" duas ");
  $("label[for*='oth3']").text(" Eu sou um poliglota ");

  $("#surv_q7").replaceWith(ques_7_Switch);
  $("label[for*='ctr1']").text(" Brasil ");
  $("label[for*='ctr22']").text(" Exterior ");

  $(".surv_ques").css({ "margin-bottom": "-10px" });

  $("#submit_survey").text("Enviar");




});






