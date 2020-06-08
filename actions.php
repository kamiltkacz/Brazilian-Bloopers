<?php
// var_dump($_POST);
require_once('./dbconn.php');

$action = "";

if (isset($_POST["action"])) {
  $action = $_POST["action"];

  if ($action == "submit_survey") {
    $export = Array();
    $gender = $_POST["gender"];
    $ageselect = $_POST["ageselect"];
    $years = $_POST["years"];
    $abroad = $_POST["abroad"];
    $way[] = $_POST["way"];
    $way = json_encode($_POST["way"]);
    $others = $_POST["others"];
    $country = $_POST["country"];

    $export['genderErr'] = "";
    $export['ageErr'] = "";
    $export['yearsErr'] = "";
    $export['abroadErr'] = "";
    $export['wayErr'] = "";
    $export['othersErr'] = "";
    $export['countryErr'] = "";





      if (empty($gender) || $ageselect == 0 || empty($years) || empty($abroad) || $way == null || empty($others) || empty($country))  {




       // Set "gender" validation ( Survey - question1)
       if (empty($gender)) {

        $export['genderErr'] = "empty";
        $export['gender'] = 0;
        } else {
        $export['gender'] = 1;
       }

       // Set "age" validation ( Survey - question2)

       if ($ageselect == 0) {
        $export['ageErr'] = "empty";
        $export['ageselect'] = 0;
        } else {
        $export['ageselect'] = 1;
       }

       // Set "years" validation ( Survey - question3)

       if (empty($years)) {

        $export['yearsErr'] = "empty";
        $export['years'] = 0;
        } else {
        $export['years'] = 1;
       }

        // Set "abroad" validation ( Survey - question4)

       if (empty($abroad)) {

        $export['abroadErr'] = "empty";
        $export['abroad'] = 0;
        } else {
        $export['abroad'] = 1;
       }
        // Set "way" validation ( Survey - question5)
       if ($way == 'null'){

        $export['wayErr'] = "empty";

        $export['way'] = 0;

       } else {

          $export['way'] = 1;

        }

         // Set "others" validation ( Survey - question6)
       if (empty($others)) {

        $export['othersErr'] = "empty";
        $export['others'] = 0;
        } else {
        $export['others'] = 1;
       }
        // Set "country" validation ( Survey - 7)
       if (empty($country)) {

        $export['countryErr'] = "empty";
        $export['country'] = 0;
        } else {
        $export['country'] = 1;
       }



    } else {



    $sql = "INSERT INTO survey (Radio_1, Age, Radio_3, Radio_4, Radio_5, Radio_6, Radio_7)

    VALUES ('$gender', '$ageselect', '$years', '$abroad', '$way', '$others', '$country')";

    if (mysqli_query($conn, $sql) === TRUE) {

      $export['result'] = "1";

    } else {

      $export['result'] = "2";
    }


  }



  }

  if ($action == "check_first") {
    $export = Array();
    $news = $_POST["news"];
    $weather = $_POST["weather"];
    $dist = $_POST["dist"];

    $sql = "INSERT INTO quiz (Radio_1, Radio_2, Radio_3)
    VALUES ('$news', '$weather', '$dist')";

    if (mysqli_query($conn, $sql) === TRUE) {

      $export['result'] = "1";


    } else {

      $export['result'] = "2";


    }


  }








  if ($action == "submit_contact") {
    $export = Array();
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $export['validName'] = "";
    $export['validEmail'] = "";
    $export['validFormName'] = "";
    $export['validFormEmail'] = "";
    $ok = "";

    // Validation of inputs if there is content
    if (!empty($email) && !empty($name) && !empty($message)) {

      // All fields are with content
      $ok = 1;
      //Validate name
      if (!preg_match("/^[æøåa-z ÆØÅA-Z]*$/",$name)) {
        // Name is wrong
        $export['validName'] = "no";
        $ok = 0;
      } else {
        $export['validName'] = "yes";
      }

      // Validation of email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $export['validEmail'] = "email0";
        $ok = 0;
      } else {
        $export['validEmail'] = "email1";
      }

      // Email,Name is good
      if ($ok == 1) {
        $mailTo = "hello@brazilianbloopers.com";
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers = "Content-type:text/html; charset=UTF-8"."\r\n";
        $headers = "From:" .$email."\r\n";
        $txt = "You have received an email from " .$name. "\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);

        $sql = "INSERT INTO contacts (name, email, subject, message)
        VALUES ('$name', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $sql) === TRUE) {
          $export['result'] = "1";
        } else {
          $export['result'] = "2";
        }
      }
    } else {
      //validate all empty
      if (empty($name)) {
        $export['validFormName'] = "empty";
      } else {
        if (!preg_match("/^[æøåa-z ÆØÅA-Z]*$/",$name)){
          $export['validName'] = "no";
        } else {
          $export['validName'] = "yes";
        }
      }

      if (empty($email)) {
        $export['validFormEmail'] = "empty";
      } else {
        $export['validFormEmail'] = "notEmpty";
      }

      if (empty($message)) {
        $export['validFormMessage'] = "empty";
      } else {
        $export['validFormMessage'] = "notEmpty";
      }
    }
  }

  echo json_encode($export);
}

?>
