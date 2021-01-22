







const tabsSwitch = $(`
<div class="tabs">
 <a id="defaultOpen" class="tablink" onclick="openPage('Home', this);">Home</a>
 <div id="myLinks">
  <a class="tablink" onclick="openPage('About', this);">Sobre</a>

  <a class="tablink" onclick="openPage('Quiz', this);">Quiz</a>

  <a class="tablink" onclick="openPage('Contact', this);">Contato</a>

  <div class="dropdown">
  <p class="dropbtn"> <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/pt-br.png" id="port_btn_p"  alt="Portuguese_flag">
    <i class="fa fa-caret-down" style="margin-left: 5px;"></i></p>
  <div class="dropdown-content">
  <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/en-us.png" id="eng_btn_p" alt="English_flag">
  </div>
  </div>
 </div>
 <img src="pics/logo.png" id="logo_main" class="logo" alt="logo_boy">

 <!-- "burger menu" -->
 <a href="javascript:void(0);" class="icon" onclick="myBurger()">
   <i class="fa fa-bars"></i></a>
</div>
`);



const headerSwitch = $(`
  <header>
    <h4 style="margin-top: 15px;">Olá, bem-vindo ao Brazilian Bloopers.<br> <br> Aqui nós contamos o que te trai como brasileiro!</h4>
  </header>
  `);

const aboutSwitch = $(` <div id="About" class="tabcontent">
  <div class="container" id="about_us">
  <fieldset class="field_about">
     <h4 class="leg_highlight" id="leg_high_1">Sobre nós</h4>
      <p class="al_left">Somos um grupo de professores de inglês baseados em Brasília, Brasil, determinados a aprimorar suas habilidades. Compilamos este quiz com base em anos de experiência. <br> Um dia, fascinados pelos vários "brasileirismos" que os nossos alunos atiravam em nossos ouvidos, decidimos que esse fenômeno merecia um site próprio. Assim, o projeto Brazilian Bloopers ganhou vida.</p>
  </fieldset>
  </div>
    <div class="container">
    <fieldset class="field_about">
      <h4 class="leg_highlight" id="leg_high_2" >Sobre os Bloopers</h4>
      <p class="al_left">Vamos ser sinceros. Aprender outro idioma e comunicar suas idéias nele não é tarefa fácil. O inglês, embora onipresente neste mundo, não é exceção. Estamos aqui para ajudar um pouco nisso.<br>Se você procurar a definição em inglês da palavra <a href="https://www.dictionary.com/browse/blooper" alt="to dictionary.com" style="text-decoration: underline" target="_blank"><span>'blooper'</span></a>&nbsp;você achará: "um erro embaraçoso que você comete publicamente". Embora não achemos que os erros que você encontrará aqui sejam tão graves, acreditamos que corrigi-los seja um grande passo em sua jornada de aprendizado deste idioma.<br>&nbsp;Confira os exemplos<a href="#examples" id="a_examples" style="text-decoration: underline"><span>aqui.</span></a></p>
    </fieldset>
    </div>

  <div class="container" id="about_qz">
  <fieldset class="field_about">
     <h4 class="leg_highlight" id="leg_high_3">Sobre o Quiz</h4>
     <p class="al_left"> O teste é apenas em inglês, porque não pode ficar muito fácil, não é? A pesquisa, entretanto, é oferecida em inglês e português.
     O quiz consiste em falsos cognatos, expressões idiomáticas, frases incompletas, etc. Você verá uma série de diálogos e deverá usar o seu bom senso ao escolher a única resposta correta.<br><br>&nbsp;Existem 30 questões que variam em graus de dificuldade. Alguns erros são mais comuns e outros menos frequentes, mas todos eles compartilham a peculiaridade da língua portuguesa que não traduz bem para o inglês. Mesmo que muitos dos erros sejam inteligíveis para falantes nativos de inglês, seria melhor você encontrar uma alternativa mais comum.<br><br>&nbsp;Mas não seja tão duro consigo mesmo - Tudo bem se você tem um pedaço do Brasil que nunca sai do seu cérebro, e por que não deixar os gringos pensarem um pouco?<br><br>Não se esqueça de se divertir no processo!<br><br><a href="#" style="padding: 5px; text-decoration: underline", onclick="openPage('Quiz', this);">Pronto?</a></p>
   </fieldset>
   </div>
   <div class="container">
      <picture>
        <a id="examples"></a>
        <h4 class="leg_highlight">Exemplo de um erro brasileiro em um diálogo casual:</h4>
       <br><br><p>A) Did you like your trip?</p><br><p style="margin-top: -20px;">B)&nbsp;<span class="error_style"><em>More or less.</em></span></p><br><p style="margin-top: -20px;">A) Hmmm...&#129300;</p>
       <hr class="hr_white">
       <p class="al_left">&nbsp;<span class="span_exp">Explanation:</span>&nbsp;In English we generally say "More or Less" to use it as an approximation of numbers, quantities, a "plus-minus". Ex. "It will cost you 40 reais, more or less."<br><br>We don't answer with "more or less" only to express value or our impression of something. If you thought the above mentioned trip could have been better, you answer "Not much". If you thought it could have been worse, you answer "It was okay." You should remember that answers like this are hugely context dependent, meaning, you will have to explain what you mean in more detail.</p>
      </picture>
    </div>

</div>`);



let legStepsSwitch = $(
  `<h4 id="leg_steps">Siga estas 3 simples etapas:</h4>`
);
let clickSurveySwitch = $(
  `<p id="click_survey">1.&nbsp;Primeiro, preencha nossa pesquisa espetacularmente curta.</p>`
);
let clickStartSwitch = $(
  `<p id="click_start">2.&nbsp;Em seguida, clique no botão "Iniciar" para iniciar o quiz.</p>`
);
let haveFunSwitch = $(`<p id="have_fun">3.&nbsp;Divirta-se!</p>`);

const feedbackSwitch = $(` <div id="feedback_div" style="text-align:center">
<h4 id="shoot_email">Se você gostou do teste ou ficou com alguma dúvida, diga oi aqui:</h4><br>
<div style="margin-top: -20px;">
<i class="fab fa-twitter"></i><a href="https://twitter.com/kamiltkacz" style="font-size: unset;">&nbsp;@kamiltkacz</a><br>
<a href="mailto:hello@brazilianbloopers.com" style="font-size: unset;">hello@brazilianbloopers.com</a>
</div>
<h3 style="margin-top: 20px;">ou se quiser contribuir com qualquer quantia,</h3>
      <form action="https://www.paypal.com/donate" method="post" target="_blank">
      <input type="hidden" name="cmd" value="_donations" />
      <input type="hidden" name="business" value="TT4G5X6GYRV6C" />
      <input type="hidden" name="currency_code" value="BRL" />
      <img src="pics/qrCode.png" alt="QR Code for paypal" style="width:60px;height:60px; margin-left: 20px;
       margin-top: -21px;">&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Faça doações com o botão do PayPal" style="margin-top: 20px" />
      <img alt="" src="https://www.paypal.com/pt_BR/i/scr/pixel.gif" width="1" height="1" />
      </form>
      <h3 style="margin-top: 20px;">Muito obrigado!</h3>
    </div>`);

const contactSwitch = $(` <div id="contact_text">
            <label for="name">Nome*<span id="span_name"></span></label>
          <input type="text" id="bor_name" name="name" placeholder="Seu nome.." tabindex="0" font-family="cursive">
            <label for="email">E-mail*<span id="span_email"></span></label>
          <input type="text" id="bor_email" name="email" placeholder="Seu e-mail.." tabindex="0">
            <label for="subject">Assunto</label>
          <input type="text" id="bor_subject" name="subject" placeholder="Sugestão, comentário, etc." tabindex="0">
            <label for="message">Mensagem*<span id="span_message"></span></label>
          <textarea id="bor_message" name="message" placeholder="Escreva sua mensagem aqui!" style="height:170px" tabindex="0"></textarea>
          </div>`);

const footerSwitch = $(`<div id="footer" class="container">
    <p id="p_footer">Autor - Kamil Tkacz&nbsp;<a href="https://twitter.com/kamiltkacz" style="font-size: unset;">@kamiltkacz</a>&nbsp;<i class="fab fa-twitter"></i><br>
      &copy;2021 BrazilianBloopers.com<br>

  </div>`);

const ques_1_Switch = $(
  `<p class="surv_ques"><label id="bor_gender">1) Qual é o seu gênero?<span id="span_gender" style="color:#ff0000"></span></label></p><br>`
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





$("#port_btn_e").on("click", function () {




  $(".tabs").replaceWith(tabsSwitch);

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


  $("#surv_q1").replaceWith(ques_1_Switch);
  $("label[for*='male']").text(" homen ");
  $("label[for*='female']").text(" mulher ");
  $("label[for*='other']").text(" outro ");

  $("#surv_q2").replaceWith(ques_2_Switch);
  $("#opt").text("Selecione");

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
  $("label[for*='way1']").text(" curso em grupos ");
  $("label[for*='way2']").text(" professor particular ");
  $("label[for*='way3']").text(" auto-didata ");
  $("label[for*='way4']").text(" apps ");
  $("label[for*='way5']").text(" jogos ");
  $("label[for*='way6']").text(" outros ");

  $("#surv_q6").replaceWith(ques_6_Switch);
  $("label[for*='oth1']").text(" uma ");
  $("label[for*='oth2']").text(" duas ");
  $("label[for*='oth3']").text(" Eu sou poliglota ");

  $("#surv_q7").replaceWith(ques_7_Switch);
  $("label[for*='ctr1']").text(" Brasil ");
  $("label[for*='ctr22']").text(" Exterior ");

  $(".surv_ques").css({ "margin-bottom": "-10px" });

  $("#submit_survey").text("Enviar");

  // Hide the burger menu
  $(document).ready(hideBurger());



  $("#eng_btn_p").on("click", function () {



     // openPage('Contact');
     window.location.href = 'index.php';






    });


  });





