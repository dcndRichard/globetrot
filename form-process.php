<?php
/* 
Sanitize on Input, Escape on Output: Generally, 
sanitize data as soon as it's received from the user (input), 
and escape it just before displaying it (output) in HTML or injecting it into SQL.
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  /* ---------------Original Input Data --------------------- */
  $fn = $_POST['fn'];
  $ln = $_POST['ln'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  /* ---------------Sanitized data --------------------- */
  $fn = strip_tags($fn);
  $ln = strip_tags($ln);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  $phone = strip_tags($phone);
  $address = strip_tags($adress);
  $subject = strip_tags($subject);
  $message = strip_tags($message);

  $fn = urlencode($fn);
  $ln = urlencode($ln);
  $email = urlencode($email);

  header('Content-Type: text/html');
  if (empty($fn)) {
    header("Location: http://localhost/php_projects/globetrot/index.php?invalid=true#footer");
  }else{
    header("Location: http://localhost/php_projects/globetrot/index.php?fn=$fn&ln=$ln&email=$email#footer");

  }

  // $q = $_REQUEST["q"];

  


  exit();
}


// Validate e-mail

// // Validate e-mail
// if (!filter_var($saniEmail, FILTER_VALIDATE_EMAIL) === false) {
//   echo ("$email is a valid email address");
// } else {
//   echo ("$email is not a valid email address");
// }

// //Validate phone
// if (!filter_var($saniPhone, FILTER_VALIDATE_INT) === false) {
//   echo ("Integer is valid");
// } else {
//   echo ("Integer is not valid");
// }


// $user_input = "<script>alert('xss')sdfs</script>";
// $escaped_input = htmlspecialchars($user_input, ENT_QUOTES, 'UTF-8');
// echo "Original input: " . $user_input . "\n";
// echo "Escaped input: " . $escaped_input . "\n";





/* 
header('Content-Type: application/json');
$data = ['name'=>'duane','age'=>49];
echo json_encode($data); 
*/
