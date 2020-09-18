<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>PHP Ajax Dischi</title>
  </head>
  <body>
    <header>
      <div class="top">
        <img class="top-img" src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="container">
        <?php foreach ($database as $disco) { ?>
        <div class="cd">
          <img class="cd-poster" src="<?php echo $disco['poster']; ?>" alt="poster">
          <h3><?php echo $disco['title']; ?></h3>
          <span class="author"><?php echo $disco['author']; ?></span><br>
          <span class="year"><?php echo $disco['year']; ?></span>
        </div>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
