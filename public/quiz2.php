<?php

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
        'q'=>'What is the real name of Kirito in Sword Art Online??',
        'a'=>[
            0=>'Asuna Yuuki',
            1=>'Kazuto Kirigaya',
            2=>'Andrew Gilber Mills',
            3=>'Tsuboi Ryoutarou',
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
    [
      'q'=>'What planet does Joseph Adama originally come from in the Caprica series?',
      'a'=>[
          0=>'Caprica',
          1=>'Sagittaron',
          2=>'Gemenon',
          3=>'Tauron',
      ],
      'c'=>3
  ],
  [
    'q'=>'Who is the Blood God in Warhammer 40,000?',
    'a'=>[
        0=>'Slaanesh',
        1=>'Khorne',
        2=>'Tzeentch',
        3=>'Nurgle',
    ],
    'c'=>1
],
[
  'q'=>'What makes time travel possible?',
  'a'=>[
      0=>'Tesseract',
      1=>'Warp Portal',
      2=>'Flux Capacitor',
      3=>'Temporal eddies',
  ],
  'c'=>2
],
[
  'q'=>'What branch of the U.S. miltary did Frank Castle serve?',
  'a'=>[
      0=>'Army',
      1=>'Navy',
      2=>'Air Force',
      3=>'Marine Corps',
  ],
  'c'=>3
],
[
  'q'=>'What is the primary weapon of the Adeptus Astartes?',
  'a'=>[
      0=>'Chainsword',
      1=>'Bolter',
      2=>'Lasgun',
      3=>'Thunder Hammer',
  ],
  'c'=>1
],
[
  'q'=>'Who pilots Eva-01 in Neon Genesis Evangelion?',
  'a'=>[
      0=>'Asuka Langley',
      1=>'Misato Kusanagi',
      2=>'Rei Ayanami',
      3=>'Shinji Ikari',
  ],
  'c'=>3

],
];



if(!empty($_POST)){
 foreach($_POST as $key => $value){
  $rekey = str_replace('_', '', $key);
  $i=$rekey + 1;

  if($questions[$rekey]['c'] == $value){
   $message .= "Question {$i}: Correct :) <br>";
  }else{
   $message .= "Question {$i}: Incorrect :(<br>";
  }
 }
}

$meta=[];
$meta['title']='Quizzy Goodness!';
$formData=null;

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

$content = <<<EOT
{$message}
<form method="post">
 {$formData}
 <input type="submit">
</form>
EOT;

require '../core/layout.php';
