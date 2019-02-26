<?php
require '../../core/functions.php';
require '../../core/session.php';
require '../../config/keys.php';
require '../../core/db_connect.php';
$input = filter_input_array(INPUT_GET);
$id = !(empty($input['id']))?$input['id']:null;
$email = !(empty($input['email']))?$input['email']:null;
$message = !(empty($input['message']))?$input['message']:null;
if(!empty($email)){
  $lookup = $email;
  $where = 'email = :lookup';
}else{
  $lookup = $id;
  $where = 'id = :lookup';
}
$stmt = $pdo->prepare("SELECT * FROM inquiries WHERE {$where}");
$stmt->execute(['lookup'=>$lookup]);
$row = $stmt->fetch();
$meta=[];
$meta['title']="{$row['first_name']} {$row['last_name']} says:";
$content=<<<EOT
<h1>{$row['first_name']} {$row['last_name']} Says</h1>
<div><strong>First Name:</strong> {$row['first_name']}</div>
<div><strong>Last Name:</strong> {$row['last_name']}</div>
<div><strong>email:</strong> {$row['email']}</div>
<div><strong>message:</strong> {$row['message']}</div>
<hr>
<div>
  <a class="btn btn-link" href="mailto:{$row['email']}">Respond</a>
  <a class="btn btn-link text-danger" href="inquiries/delete.php?id={$row['id']}">Delete</a>
</div>
EOT;
require '../../core/layout.php';
