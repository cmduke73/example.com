<?php
require '../core/Chris/src/validation/validate.php';
use Chris\validation;$message = null;

$valid = new Chris\validation\Validate();
$args = [

'name'=>FILTER_SANITIZE_STRING,
'subject'=>FILTER_SANITIZE_STRING,
'message'=>FILTER_SANITIZE_STRING,
'email'=>FILTER_SANITIZE_EMAIL
];

$input = filter_input_array(INPUT_POST, $args);

  $valid->check($input);

  if(empty($valid->errors)){

$args = [
  'first_name'=>FILTER_SANITIZE_STRING,
  'last_name'=>FILTER_SANITIZE_STRING,
  'message'=>FILTER_SANITIZE_STRING,
  'email'=>FILTER_SANITIZE_EMAIL
];
$input = filter_input_array(INPUT_POST, $args);


$args = [
  'first_name'=>FILTER_SANITIZE_STRING,
  'last_name'=>FILTER_SANITIZE_STRING,
  'message'=>FILTER_SANITIZE_STRING,
  'email'=>FILTER_SANITIZE_EMAIL
];
$input = filter_input_array(INPUT_POST, $args);
if(!empty($input)){
  $input = array_map('trim', $input);
  $sql = 'INSERT INTO
      inquiries
    SET
      id=uuid(),
      first_name=?,
      last_name=?,
      email=?';
  if($pdo->prepare($sql)->execute([
    $input['first_name'],
    $input['last_name'],
    $input['message'],
    $input['email']
  ])){
    header('LOCATION:/thanks.php');
  }else{
    $message = 'Something bad happened';
  }
}
    }else{
      $message = "<div class=\"alert alert-danger\">Your form has errors!</div>";
    }

