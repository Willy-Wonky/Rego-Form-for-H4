<?php
//message variables

// define variables and set to empty values
$hashnameErr = $kennelErr = $nameErr = $emailErr = $phoneErr = $foodErr = $commentErr =  $teesErr = $drinkErr = $signErr = "";
$hashname = $kennel = $name = $email = $phone = $food = $comment =  $tees = $drink = $sign = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["hashname"])) {
    $hashnameErr = "Please write your hash name";
  } else {
    $hashname = test_input($_POST["hashname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$hashname)) {
      $hashnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["name"])) {
    $nameErr = "Your real name";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["kennel"])) {
    $kennelErr = "Name of your home hash is required";
  } else {
    $kennel = test_input($_POST["kennel"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$kennel)) {
      $kennelErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Invalid phone format";
    }
  }

 //Food radio buttons
  if (empty($_POST["food"])) {
    $foodErr = "Food option is required";
  } else {
    $food = test_input($_POST["food"]);
  }

  //allergies etc
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$comment)) {
      $commentErr = "Only letters and white space allowed";
    }
  }

  //Food radio buttons
  if (empty($_POST["drink"])) {
    $drinkErr = "Drink option is required";
  } else {
    $drink = test_input($_POST["drink"]);
  }

   //Teeshirts
   if (empty($_POST["tees"])) {
    $teesErr = "Please choose";
  } else {
    $tees = test_input($_POST["tees"]);
  }

  //Agreement
  if (empty($_POST["sign"])) {
    $signErr = "Please tick the box";
  } else {
    $sign = test_input($_POST["sign"]);
  }

 if ($hashnameErr == '' and  $nameErr == '' and $emailErr == '' and  $phoneErr == '' and  $foodErr == '' and  $commentErr == ''  and  $teesErr == '' and  $drinkErr == '' and  $signErr == ''){
   $message_body = '';
  unset($_POST['submit']);
  foreach ($_POST as $key => $value){
    $message_body .= "$key: $value\n";
  }

   $to = 'mjasoftley@gmail.com';
   $subject = 'Rego Form';
  // $body = '<p><h4>Hash Name:</h4>'. $hashname.'</p>
  // <p><h4>Hash Name:</h4>'.$hashname.'</p>
  // <p><h4>Name:</h4> '.$name.'</p>
  // <p><h4>Kennel:</h4> '.$kennel.'</p>
  // <p><h4>Email:</h4> '.$email.'</p>
  // <p><h4>Phone:</h4> '.$phone.'</p>
  // <p><h4>Food Option:</h4> '.$food.'</p>
  // <p><h4>Comments:</h4> '.$comment.'</p>
  // <p><h4>Drink Option:</h4> '.$drink.'</p>
  // <p><h4>Tee shirt Option:</h4> '.$tees.'</p>';

//Email headers
// $headers = "MIME-version: 1.0" ."\r\n";
// $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
// //Additional headers
// $headers .= "From: " .$hashname. "<".$email.">". "\r\n";

 if(mail($to, $subject, $body)){
     //Email sent
     $msg = "Thanks " .$hashname. "We'll be in touch when your bank transfer has been done";
     $hashname = $kennel = $name = $email = $phone = $food = $comment =  $tees = $drink = $sign = ""; 
//   // } else{
//   //   //email failed
//   //   $msg = "There was a problem sending your email"


   }
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
