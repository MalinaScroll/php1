<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="monkeys.css">
    <link rel="icon" type="image/png" href="fav.png">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <title>PHP by Malina</title>
  </head>
  <body>
    <?php
    echo "<h1 id='title'>Malina's php page</h1><hr>";
     ?>
     <form action="monkeys.php" method="post">
       <select name="monkeys">
         <option value="bamboemaki">Bamboemaki</option>
         <option value="doodshoofdaap">Doodshoofdaap</option>
         <option value="kapucijnaap">kapucijnaap</option>
         <option value="baviaan">Baviaan</option>
         <br>
         <input type="submit">
     </form>

     <?php
     $monkey = $_POST["monkeys"];
     echo "<div class='title'><h1>$monkey</h1>
     <div class='imgHolder'>
     <a href='https://www.google.nl/search?q=$monkey&tbm=isch'><img class='img' src='imagesMonkeys/${monkey}1.jpg'></a>
     <a href='https://www.google.nl/search?q=$monkey&tbm=isch'><img class='img' src='imagesMonkeys/${monkey}2.jpg'></a>
     </div>";
      ?>
  </body>
</html>
