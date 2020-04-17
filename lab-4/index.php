<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title>Ilya Androsov</title>
</head>
  <body>
    <main>
      <?php 
        include './Nav.php';
      ?>
      <div class="intro-block">
        <div class="info-block">
          <h2 class="info-block__description">Hello, glad to see you here! I'm</h2>
          <h1 class="info-block__name">Ilya Androsov</h1>
        </div>
        <a href="#lab-4" class="intro-block__button">Go to lab 4</a>
      </div>
      <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-4" class="form-container">
        <h2 class="form-container__header">Lab 4, variant 1</h2>
        <label class="form-container__label" for="name-input">Enter name (e.g. Ilya, Ilya.Androsov):</label>
        <input type="text" name="name-input" id="name-input" require>
        <label class="form-container__label" for="email-input">Enter mail (e.g @gmail.com):</label>
        <input type="text" name="email-input" id="email-input" require>
        <input class="form-container__submit" type="submit" value="Check">
      <?php

        function isValidEmail($Email) {
          return preg_match("/^\S+(\.\S+)*@[A-z]+(\.[A-z]+)+$/", $Email) === 1;
        }

        if( isset($_GET["name-input"]) && isset($_GET["email-input"]) ) {
          $Email = $_GET["name-input"] . $_GET["email-input"];
          if ( isValidEmail($Email) ) {
            echo '<span class="form-container__label">Confirmed!</span>';
            if (($outputFile = fopen("E-mails.txt", "a")) !== false) {
              fwrite($outputFile, $Email . "\n");
              fclose($outputFile);
            }
          } else echo '<span class="form-container__label">Rejected, try again</span>';
        }
      ?>
      </form>
    </main>
    <footer class="footer-wrapper">
      <div class="socials-block">
        <span class="socials-block__text">Social media:</span>
        <ul class="socials-block__list">
          <li class="socials-block__list_item"><a href="https://github.com/Ajololr"><img src="Assets/Icons/github.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://vk.com/andrik0099"><img src="Assets/Icons/vk.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://www.linkedin.com/in/%D0%B8%D0%BB%D1%8C%D1%8F-%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D1%81%D0%BE%D0%B2-48ba35198/"><img src="Assets/Icons/linkedin.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="tel-block">
        <span class="tel-block_text">Telephone:</span>
        <a class="tel-block__value" href="tel:+375-29-804-26-89">+375-29-804-26-89</a>
      </div>
    </footer>
  </body>
</html>