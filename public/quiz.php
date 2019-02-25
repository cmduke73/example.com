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
       'q'=>'What is the real name of Kirito in Sword Art Online?',
       'a'=>[
           0=>'Asuna Yuuki',
           1=>'Kirito Kirigaya',
           2=>'Andrew Gilbert Mills',
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
    'q'=>'What is the main line fighter of the Rebel Alliance in the Star Wars series?',
    'a'=>[
        0=>'A-wing',
        1=>'B-wing',
        2=>'X-wing',
        3=>'YT-1300',
    ],
    'c'=>2
],
[
  'q'=>'What branch of service did Frank Castle serve?',
  'a'=>[
      0=>'U.S. Army',
      1=>'U.S. Navy',
      2=>'U.S. Air Force',
      3=>'U.S. Marine Corps',
  ],
  'c'=>3
],
[
  'q'=>'Which of the following Sci-Fi movies is NOT based on a book?',
  'a'=>[
      0=>'The Running Man',
      1=>'Dune',
      2=>'Planet of the Apes',
      3=>'Krull',
  ],
  'c'=>3
],
[
  'q'=>'The famous radio drama in 1938 that some listeners mistook for a news program reporting a real alien invasion, was based on what classic?',
  'a'=>[
      0=>'Enders Game',
      1=>'War of the Worlds',
      2=>'Rendezvous with Rama',
      3=>'Red Mars',
  ],
  'c'=>1
],
[
  'q'=>'The term "Xenomorph" is associated with a very particular species of science fiction monster. In which film did it first appear?',
  'a'=>[
      0=>'The Thing',
      1=>'Star Trek: The Motion Picture',
      2=>'Alien',
      3=>'Predator',
  ],
  'c'=>3
],
[
  'q'=>'Which actor known for sci-fi roles had co-starred in both "X-Men" and "Star Trek" films? ',
  'a'=>[
      0=>'Ian McKellan',
      1=>'Zoe Saldana',
      2=>'Patrick Stewart',
      3=>'Shawn Ashmore',
  ],
  'c'=>3
],
];

if(!empty($_POST)){
   foreach($_POST as $key => $value){
       $rekey = str_replace('_', '', $key);

       if($questions[$rekey]['c'] == $value){
        $message .= "Question {$key}: Correct! :)<br>";
      }else{
       $message .= "Question {$key}: Sorry :) Try again!<br>";
      }
   }
}



$meta=[];
$meta['title']='Contact Bob Smith';

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
