<?php
require '../core/processContactForm.php';

$meta=[];
$meta['title']='Chris Duke';require '../core/layout.php';
$meta['description']='Contact Chris';

$content = <<<EOT

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, I am Christopher Duke.</title>
</head>
<body>
    <div class="jumbotron">
      <h1 class="display-4">Christopher Duke</h1>
      <p class="lead">Greetings everyone! I'm Christopher Duke, and I'd like to welcome you to my new home on the Web! There's going to be more to come in the future so stay tuned!</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="contact.php" role="button">Contact Chris</a>
    </div>

    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
    </header>

    <main>

      </main>


</body>
</html>
EOT;

require '../core/layout.php';
