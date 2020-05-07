<?php
  include './Language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Language.css">
  <title><?php echo $textValues["MAIN_PAGE_TITLE"]; ?></title>
</head>
  <body>
    <main>
      <?php 
        include './Nav.php';
      ?>
      <div class="intro-block">
        <div class="info-block">
          <h2 class="info-block__description"><?php echo $textValues["GREETINGS"]; ?></h2>
          <h1 class="info-block__name"><?php echo $textValues["MAIN_PAGE_TITLE"]; ?></h1>
        </div>
        <a href="./Labs.php" class="intro-block__button"><?php echo $textValues["GO_TO_WT_LABS"]; ?></a>
      </div>
    </main>
    <?php include './Footer.php'?>
  </body>
</html>