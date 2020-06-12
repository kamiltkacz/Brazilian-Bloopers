
<?

require_once('./dbconn.php');

$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$resultCheck = mysqli_num_rows($result);



while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $sql2 = "SELECT * FROM offeredAnswer WHERE questionId = '" . $r['id'] . "'";
    $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));


    $target = $r['targetWord'];


    $ex = explode($target, $r['question']);

    echo '<br><br>'. $ex[0];

    echo '<hr>';



   while ($r2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {


        echo '<input type="radio" class="q-1">'
        . $r2['offeredAnswer']
        . '</input>';

    }

        echo '<hr style="width:50%">';


    echo $ex[1];
}



?>
// Quiz questions 1-3
<div class="quiz">

          <form id="quiz_form" method="post" action="actions.php">

          <div id="dialogue_1">

          <h3><u>Read the dialogues and choose the best option for the blank spaces</u></h3>

          <h4><b>SITUATION 1</b></h4>

          <p>Liz: Do you watch the news everyday?</p>
          <p>Mike: Yes, I think___is important to know what's going on.</p>
          <p>Liz: I agree but sometimes___is difficult. There is a lot of negativity in the news.</p>

          <p><i><u>What is missing?</u></i></p>

          <input type="radio" class="rads" name="news" value="err_contrct"> a )Contraction - " 's "<br>
          <input type="radio" class="rads" name="news" value="err_pizz"> b) The word "pizza"<br>
          <input type="radio" class="rads" name="news" value="err_noth">c) Nothing is missing<br>
          <input type="radio" class="rads" name="news" value="corr_it">d) The neuter subject "It"

          <h4><b>SITUATION 2</b></h4>


          <p>Cris: Look out the window! I can't believe it!___was sunny 5 minute ago, now___is raining!</p>
          <p>Natalie:___is like that here in January.
          <p>Cris: Wow, some weather! </p>

          <p><i><u>What is missing?</u></i></p>

          <input type="radio" class="rads" name="weather" value="err_he"> a) The masculine subject - "He"<br>
          <input type="radio" class="rads" name="weather" value="corr_it"> b) The neuter subject "It"<br>
          <input type="radio" class="rads" name="weather" value="err_noth"> c) Nothing is missing<br>
          <input type="radio" class="rads" name="weather" value="err_i"> d) The subject "I">



          <h4>SITUATION 3</h4>

          <p>John: How far is___from Sao Paulo to Brasilia?</p>
          <p>Pedro: I don't know but___ must be a solid 10 hour drive.</p>
          <p>John: I didn't know___takes this long.</p>
          <p>Pedro: How long does___take to get from New York to Detroit.</p>
          <p>John:___is about the same.</p>


          <p><i><u>What is missing?</u></i></p>

          <input type="radio" class="rads" name="dist" value="corr_it"> a)The neuter subject "It"<br>
          <input type="radio" class="rads" name="dist" value="err_she"> b)The feminine subject - "She"<br>
          <input type="radio" class="rads" name="dist" value="err_car">c) The word "car"<br>
          <input type="radio" class="rads" name="dist" value="err_noth"> d)Nothing is missing <br>



          </div>

          <p id="instr" name="instructions">Instructions</p>

          <button id='backHome-1'><a href='https://www.brazilianbloopers.com' style='color: black'>Home</a></button>
          <button id="check_first" type="submit" name="checkfirst">Check</button>


           </form>
          </div>);