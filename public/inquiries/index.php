<?php
require '../../core/functions.php';
require '../../core/session.php';
require '../../config/keys.php';
require '../../core/db_connect.php';

$meta=[];
$meta['title']="Inquiries";

$content="<h1>Inquiries</h1>";
$stmt = $pdo->query('SELECT * FROM inquiries');
$tr = null;
while($row = $stmt->fetch()){
  $tr .= "<tr>" .
    "<td><a href=\"inquiries/view.php?id={$row['id']}\">{$row['first_name']}</a></td>" .
    "<td><a href=\"inquiries/view.php?id={$row['id']}\">{$row['last_name']}</a></td>".
    "<td><a href=\"inquiries/view.php?id={$row['id']}\">{$row['email']}</a></td>" .
    "<td><a href=\"inquiries/view.php?id={$row['id']}\">{$row['created']}</a></td>" .
    "</tr>";
}
$content=<<<EOT
<h1>Inquiries</h1>
<table class="table table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Created</th>
    </tr>
  </thead>
  <tbody>
    {$tr}
  </tbody>
</table>
EOT;
require '../../core/layout.php';
