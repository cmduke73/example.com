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
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://wiki.bravofleet.com/images/a/ab/197772-star-trek-voyager-the-intrepid-class-uss-voyager-aft.jpg" alt="Voyager" height="233" width="350">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/en/9/97/DefiantDS9.jpg" alt="Defiant" height="233" width="350">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

EOT;

require '../core/layout.php';
