<?php
require '../core/functions.php';
require '../core/processContactForm.php';

$meta=[];
$meta['title']='Chris Duke';
$meta['description']='Contact Chris';

$content = <<<EOT


    <div class="jumbotron">
      <h1 class="display-4">Christopher Duke</h1>
      <p class="lead">Greetings everyone! I'm Christopher Duke, and I'd like to welcome you to my new home on the Web! There's going to be more to come in the future so stay tuned!</p>
      <hr class="my-4">
      <p>Work in progress here, so just keep watching. Great things are coming.</p>
      <a class="btn btn-primary btn-lg" href="contact.php" role="button">Contact Chris</a>
    </div>

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="https://vignette.wikia.nocookie.net/memoryalpha/images/6/66/USS_Enterprise-E_in_nebula.jpg/revision/latest/scale-to-width-down/350?cb=20170519170420&path-prefix=en" alt="Enterprise-E">
        <div class="card-body">
          <h5 class="card-title">My Blog!</h5>
          <p class="card-text">My personal blog, where you'll find what I'm up to, the day to day goings on in life and career! Feel free to read, and perhaps even leave a comment!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary btn-lg" href="/posts" role="button">Post to the Blog!</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://wiki.bravofleet.com/images/a/ab/197772-star-trek-voyager-the-intrepid-class-uss-voyager-aft.jpg" alt="Voyager" height="233" width="350">
        <div class="card-body">
          <h5 class="card-title">Graphic Works!</h5>
          <p class="card-text">Here you will find a selection of my various works in graphic design, done over the course of the last few years I hope you will enjoy what you will see!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary btn-lg" href="resume.php" role="button">View my Artwork</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/9/97/DefiantDS9.jpg" alt="Defiant" height="233" width="350">
        <div class="card-body">
          <h5 class="card-title">Quiz Time!</h5>
          <p class="card-text">A little quiz I wrote up with questions based on things I like anf enjoy. A bit of random trivia, but enjoyable all the same. Try your hand, see how you do!!</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary btn-lg" href="quiz2.php" role="button">Play the Quiz!</a>
        </div>
      </div>
    </div>

EOT;

require '../core/layout.php';
