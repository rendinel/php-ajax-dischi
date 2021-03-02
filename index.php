<?php
 $album = [
   [
    'cover' => "img/cover.gif",
    'title' => "Motorhead",
    'artist' => "Motorhead",
    'year' => "1988"
   ],
   [
    'cover' => "img/cover.gif",
    'title' => "Motorizer",
    'artist' => "Motorhead",
    'year' => "2010"
   ],
   [
    'cover' => "img/cover.gif",
    'title' => "Bad magic",
    'artist' => "Motorhead",
    'year' => "2015"
   ],
   [
    'cover' => "img/cover.gif",
    'title' => "Bomber",
    'artist' => "Motorhead",
    'year' => "1979"
   ],
   [
    'cover' => "img/cover.gif",
    'title' => "Overkill",
    'artist' => "Motorhead",
    'year' => "1979"
   ],
   [
    'cover' => "img/cover.gif",
    'title' => "Inferno",
    'artist' => "Motorhead",
    'year' => "2004"
   ],
 ]
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

    <div class="container">
        <?php foreach($album as $item) { ?>
          <div class="content">
            <img class="tx" src="<?php echo $item["cover"] ?> " alt="">
            <h2 class="tx"> <?php echo $item["title"] ?> </h2>
            <p class="tx"> <?php echo $item["artist"] ?> </p>
            <p class="tx"> <?php echo $item["year"] ?> </p>
          </div>
        <?php } ?>
    </div>
  </body>
</html>
