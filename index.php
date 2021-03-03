<?php
require_once __DIR__ . '/database/database.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>

    <div class="wrapper">
      <div class="appcontainer">
        <header>
          <div class="hcontainer">
            <img src="img/spot.png" alt="">
          </div>
        </header>
        <div class="container">
            <?php foreach($album as $item) { ?>
              <div class="content">
                <img class="tx" src="<?php echo $item["cover"] ?> " alt="">
                <h2 class="title tx"> <?php echo $item["title"] ?> </h2>
                <p class="artist tx"> <?php echo $item["artist"] ?> </p>
                <p class="year tx"> <?php echo $item["year"] ?> </p>
              </div>
            <?php } ?>
        </div>
      </div>
    </div>

  </body>
</html>
