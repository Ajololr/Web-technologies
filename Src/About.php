<?php
  include './Language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/About.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Language.css">
  <title><?php echo $textValues["ABOUT_ME_PAGE_TITLE"]; ?></title>
</head>
  <body>
    <?php 
      include './Nav.php';
    ?>
    <main class="about-block">
      <h1 class="about-block__header"><?php echo $textValues["ABOUT_ME_PAGE_TITLE"]; ?></h1>
      <section class="about-block__section">
        <h2 class="about-block__section_name"><?php echo $textValues["MY_PERSONALITY_TITLE"]; ?></h2>
        <p class="about-block__section_text"><?php echo $textValues["MY_PERSONALITY_DESCRIPTION"]; ?></p>
        <img class="about-block__section_image" src="./Assets/Images/me.JPG" alt="">
      </section>
      <section class="about-block__section">
        <h2 class="about-block__section_name"><?php echo $textValues["MY_EXPERIENCE_TITLE"]; ?></h2>
        <p class="about-block__section_text"><?php echo $textValues["MY_EXPERIENCE_DESCRIPTION"]; ?></p>
        <img class="about-block__section_image" src="./Assets/Images/code-background.jpg" alt="">
      </section>
    </main>
    <?php include './Footer.php'?>
  </body>
</html>