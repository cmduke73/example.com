
<?php
function active($name){
  $current = $_SERVER['REQUEST_URI'];
  if($current === $name){
    return 'active';
  }
  return null;
}
?>
<!doctype html>
<html lang="en">
  <head>

    <?php if(!empty($meta)): ?>

      <?php if(!empty($meta['title'])): ?>
        <title><?php echo $meta['title']; ?></title>
      <?php endif; ?>

      <?php if(!empty($meta['body'])): ?>
        <meta name="body" content="<?php echo $meta['body']; ?>">
      <?php endif; ?>

      <?php if(!empty($meta['description'])): ?>
        <meta name="description" content="<?php echo $meta['description']; ?>">
      <?php endif; ?>

      <?php if(!empty($meta['keywords'])): ?>
        <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
      <?php endif; ?>

    <?php endif; ?>

    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <style>
      body{
        margin-top: 60px;
background: #b4b8c1;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Christopher Duke</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/'); ?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/resume.php'); ?>" href="resume.php">Resume</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/users'); ?>" href="users">Users</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo active('/inquiries'); ?>" href="inquiries">Inquiries</a>
                </li>
                <li class="nav-item">
                  <?php if(!empty($_SESSION['user']['id'])): ?>
                    <a class="nav-link" href="logout.php">Logout</a>
                  <?php else: ?>
                    <a class="nav-link <?php echo active('/login.php'); ?>" href="login.php">Login</a>
                  <?php endif; ?>
                </li>

            </ul>
        </div>
    </nav>
    <main class="container"><?php echo $content; ?></main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
