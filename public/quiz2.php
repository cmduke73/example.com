<?php
​
require '../core/functions.php';
require '../config/keys.php';
require '../core/db_connect.php';

$message=null;

$questions = [
    [
        'q'=>'What is the name of the main vessel in Robotech?',
        'a'=>[
            0=>'AMRD-01',
            1=>'Prometheus',
            2=>'Daedalus',
            3=>'SDF-1',
        ],
        'c'=>3
    ],
    [
        'q'=>'Who is the protagonist of the original Tron?',
        'a'=>[
            0=>'Edward Dillinger',
            1=>'Kevin Flynn',
            2=>'Tron',
            3=>'Sark',
        ],
        'c'=>1
    ],
    [
        'q'=>'Who is the protagonist of the original Tron?',
        'a'=>[
            0=>'Edward Dillinger',
            1=>'Kevin Flynn',
            2=>'Tron',
            3=>'Sark',
        ],
        'c'=>1
    ],
    [
        'q'=>'Babylon 5 begins in what year (series canon)?',
        'a'=>[
            0=>'2031',
            1=>'1994',
            2=>'2258',
            3=>'1984',
        ],
        'c'=>2
    ],
    [
        'q'=>'Who is the captain of the Palomino in The Black Hole?',
        'a'=>[
            0=>'Hans Reinhart',
            1=>'Vincent',
            2=>'Dan Holland',
            3=>'Maximillian',
        ],
        'c'=>2
    ],
];

if(!empty($_POST)){
    foreach($_POST as $key => $value){
        $rekey = str_replace('_', '', $key);

        if($questions[$rekey]['c'] == $value){
            echo "Correct :) <br>";
        }else{
            echo "Incorrect :(<br>";
        }
    }
}

​
if(!empty($_POST)){
 foreach($_POST as $key => $value){
  $rekey = str_replace('_', '', $key);
  $i=$rekey + 1;
​
  if($questions[$rekey]['c'] == $value){
   $message .= "Question {$i}: Correct :) <br>";
  }else{
   $message .= "Question {$i}: Incorrect :(<br>";
  }
 }
}
​
$meta=[];
$meta['title']='Contact Bob Smith';
​
$formData=null;
​
foreach($questions as $key=>$q):
 $formData.="<fieldset>" .
  "<legend>{$q['q']}</legend>";
  foreach($q['a'] as $k=>$a):
   $formData.="<div>" .
    "<input type=\"radio\" name=\"_{$key}\" value=\"{$k}\">" .
    "<label>{$a}</label>" .
   "</div>";
  endforeach;
  $formData.="</fieldset>";
endforeach;
​
$content = <<<EOT
{$message}
<form method="post">
 {$formData}
 <input type="submit">
</form>
EOT;
​
require '../core/layout.php';
