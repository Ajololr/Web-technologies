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
        <a href="#lab-2" class="intro-block__button">Go to lab 2</a>
      </div>
      <form action="<?php $_PHP_SELF ?>" method="GET" id="lab-2" class="form-container">
        <h2 class="form-container__header">Lab 2, variant 1</h2>
        <label class="form-container__label" for="cities-input">Enter cities sequence:</label>
        <textarea class="form-container_message" name="cities-input" id="cities-input" cols="60" rows="10"></textarea>
        <input class="form-container__submit" type="submit" value="Send">
        <?php
          function mb_ucfirst($string, $encoding)
          {
              $strlen = mb_strlen($string, $encoding);
              $firstChar = mb_substr($string, 0, 1, $encoding);
              $then = mb_substr($string, 1, $strlen - 1, $encoding);
              return mb_strtoupper($firstChar, $encoding) . $then;
          }

          $indexName = "cities-input";
          if( $_GET[$indexName] ) {
            $inputString = mb_strtolower($_GET[$indexName],"utf8");
            $citiesArray = preg_split("/[\s,]+/", $inputString);
            sort($citiesArray, SORT_STRING);
            $answer = "";
            for ($i = 0; $i < count($citiesArray); $i++) {
              $answer .= mb_ucfirst($citiesArray[$i],"utf8") . " ";
            }
            echo "<textarea class='form-container_message' name='cities-output' id='cities-output' cols='60' rows='10'>$answer</textarea>";
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