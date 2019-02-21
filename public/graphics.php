<?php

require '../core/functions.php';
require '../config/keys.php';
require '../core/db_connect.php';

$meta=[];
$meta['title']='The Art of Chris';

$content = <<<EOT

<p> I'm an avid graphic designer as well as a budding web developer, so with this little sample of my works, Im hoping to share something of another passion that play into my love for development. Im hoping that you - the viewer - enjoy what you see!!<p>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="mx-auto d-block w-75" align="center" src="img/ac3.png">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-75" src="img/ac12.jpg" alt="Alex going to war">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-75" src="img/alastair3.jpg" alt="Alastair the Time Lord">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-75" src="img/alastair5.png" alt="Alastair Reborn">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-75" src="img/athena5.png" alt="Lady Athena">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-1" src="img/companions.jpg" alt="Alastair and Kyna">
    </div>
    <div class="carousel-item">
    <img class="mx-auto d-block w-75" src="img/jae.png" alt="Lady Jae">
    </div>
    <div class="carousel-item">
    <img class="mx-auto d-block w-75" src="img/jessadark.png" alt="Hell is Dark.....">
    </div>
    <div class="carousel-item">
    <img class="mx-auto d-block w-75" src="img/karencity2.png" alt="Karen in the City">
    </div>
    <div class="carousel-item">
    <img class="mx-auto d-block w-75" src="img/karenmilan.png" alt="Leaving on a jet plane....">
    </div>
    <div class="carousel-item">
    <img class="mx-auto d-block w-75" src="img/tom.jpg" alt="the musician....">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

EOT;

require '../core/layout.php';
