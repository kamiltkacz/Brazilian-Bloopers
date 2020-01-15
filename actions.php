<?php

require_once('./dbconn.php');

$action = "";


	 if (isset($_POST["action"])){

	  $action = $_POST["action"];





	 if ($action == "nextBtn"){
			$export = Array();
			$gender = $_POST["gender"];
			//$export["ageselect"] = "";
   		//$ageselect = $_POST[""];
			$years = $_POST["years"];
			$abroad = $_POST["abroad"];
			$way = $_POST["way"];
			$others = $_POST["others"];
			$country = $_POST["country"];


			$sql = "INSERT INTO survey (Radio_1, Radio_3, Radio_4, Radio_5, Radio_6, Radio_7) VALUES ('$gender', '$years', '$abroad', '$way', '$others', '$country')";



	 if (mysqli_query($conn, $sql) === TRUE){

		   $export['result'] = "1";

 		   } else {

 		   $export['result'] = "2";

 		   }

 		   echo json_encode($export);

 	     }
















	 if ($action == "submit_contact"){
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
    if(!empty($email) && !empty($name) && !empty($message)){

// All fields are with content
 	  $ok = 1;
		//Validate name
		if (!preg_match("/^[æøåa-z ÆØÅA-Z]*$/",$name)){
			// Name is wrong
			 $export['validName'] = "no";
			 $ok = 0;
		} else {
			 $export['validName'] = "yes";
		 }

		// Validation of email
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

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

		if (mysqli_query($conn, $sql) === TRUE){

			 $export['result'] = "1";

		} else {

			 $export['result'] = "2";

			}
		 }

	  } else {

//validate all empty

				if (empty($name)){

					 $export['validFormName'] = "empty";

				} else {

				if (!preg_match("/^[æøåa-z ÆØÅA-Z]*$/",$name)){

		       $export['validName'] = "no";

				} else {

					 $export['validName'] = "yes";
				 }
				}

				if (empty($email)){

					 $export['validFormEmail'] = "empty";

				} else {

					 $export['validFormEmail'] = "notEmpty";

				}

				if (empty($message)){

					 $export['validFormMessage'] = "empty";

				} else {

					 $export['validFormMessage'] = "notEmpty";

				}
			 }
			}

echo json_encode($export);

}



?>
