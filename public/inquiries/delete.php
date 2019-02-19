<?php
require '../../core/functions.php';
require '../../core/session.php';
require '../../config/keys.php';
require '../../core/db_connect.php';

$args=[
  'id'=>FILTER_UNSAFE_RAW,
  'confirm'=>FILTER_VALIDATE_INT
];

$input = filter_input_array(INPUT_GET, $args);
$id=$input['id'];

$stmt = $pdo->prepare("SELECT * FROM inquiries WHERE id=:id");
$stmt->execute(['id'=>$id]);
$row = $stmt->fetch();
if(!empty($input['confirm'])){
  $stmt = $pdo->prepare("DELETE FROM inquiries WHERE id=:id");
  if($stmt->execute(['id'=>$id])){
    header('Location: /inquiries/');
  }
}

$meta=[];
$meta['title']="DELETE: {$row['first_name']} {$row['last_name']} {$row['email']}";
$content=<<<EOT

<h1 class="text-danger text-center">DELETE:{$row['first_name']} {$row['last_name']} {$row['email']}</h1>
<div class="text-danger text-center">{$row['first_name']} {$row['last_name']}</div>
<p class="text-danger text-center">Are you sure you want to delete the message from {$row['first_name']} {$row['last_name']}?</p>
<div class="text-center">
  <a href="inquiries/" class="btn btn-success btn-lg">Cancel</a>
  <br><br>
  <a href="inquiries/delete.php?id={$row['id']}&confirm=1" class="btn btn-link text-danger">Delete</a>
</div>

EOT;
require '../../core/layout.php';
