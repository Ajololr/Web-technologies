<?php
  include './Language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Education.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title><?php echo $textValues["EDUCATION_PAGE_TITLE"]; ?></title>
</head>
  <body>
    <?php 
     include './Nav.php';
    ?>
    <main class="education-block">
      <h1 class="education-block__header"><?php echo $textValues["EDUCATION_PAGE_TITLE"]; ?></h1>
      <section class="education-block__section">
        <h2 class="education-block__section_header"><?php echo $textValues["GYMNASIUM_TITLE"]; ?></h2>
        <img class="education-block__section_image" src="./Assets/Images/gimn_5.jpg" alt="">
        <p class="education-block__section_description"><?php echo $textValues["GYMNASIUM_DESCRIPTION"]; ?></p>
      </section>
      <section class="education-block__section">
        <h2 class="education-block__section_header"><?php echo $textValues["BSUIR_TITLE"]; ?></h2>
        <img class="education-block__section_image" src="./Assets/Images/BSUIR.jpg" alt="">
        <p class="education-block__section_description"><?php echo $textValues["BSUIR_DESCRIPTION"]; ?></p>
      </section>
      <section class="education-block__section">
        <h2 class="education-block__section_header">RSSchool</h2>
        <img class="education-block__section_image" src="./Assets/Icons/RSS.svg" alt="">
        <p class="education-block__section_description"><?php echo $textValues["RSS_DESCRIPTION"]; ?></p>
      </section>
    </main>
    <?php
      include './Footer.php';
    ?>
  </body>
</html>