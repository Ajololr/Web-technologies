<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title>About</title>
</head>
  <body>
    <?php 
      include './Nav.php';
    ?>
    <main class="about-block">
      <ul class="labs-list">
        <a href="#lab-1"><li class="labs-list_item">Lab 1</li></a>
        <a href="#lab-2"><li class="labs-list_item">Lab 2</li></a>
        <a href="#lab-3"><li class="labs-list_item">Lab 3</li></a>
        <a href="#lab-4"><li class="labs-list_item">Lab 4</li></a>
      </ul>
      <section class="form-container" id="lab-1">
        <h2 class="form-container__header">Lab 1</h2>
        <h2 class="form-container__header">This web site was the first lab.</h2>
      </section>
      <section class="about-block__section" id="lab-2">
        <form action="<?php $_PHP_SELF ?>" method="GET" class="form-container">
          <h2 class="form-container__header">Lab 2, variant 1</h2>
          <label class="form-container__label" for="cities-input">Enter cities sequence:</label>
          <textarea class="form-container_message" name="cities-input" id="cities-input" cols="60" rows="10"></textarea>
          <input class="form-container__submit" type="submit" value="Sort">
          <?php

            function mb_ucfirst($string, $encoding): string {
              $strlen = mb_strlen($string, $encoding);
              $firstChar = mb_substr($string, 0, 1, $encoding);
              $then = mb_substr($string, 1, $strlen - 1, $encoding);
              return mb_strtoupper($firstChar, $encoding) . $then;
            }

            $indexName = "cities-input";
            if( isset($_GET[$indexName]) ) {
              $inputString = mb_strtolower($_GET[$indexName], "utf8");
              $citiesArray = preg_split("/[\s,]+/", $inputString);
              $citiesArray = array_unique($citiesArray);
              sort($citiesArray, SORT_STRING);
              $answer = "";
              for ($i = 0; $i < count($citiesArray); $i++) {
                $answer .= mb_ucfirst($citiesArray[$i], "utf8") . " ";
              }
              echo "<label class='form-container__label' for='cities-output'>Sorted cities sequence:</label><textarea class='form-container_message' name='cities-output' id='cities-output' cols='60' rows='10'>$answer</textarea>";
            }

          ?>
        </form>
      </section>
      <div class="lab-container" id="lab-3">
        <h2 class="form-3-container__header">Lab 3, variant 1</h2>
        <form action="<?php $_PHP_SELF ?>" method="POST" id="lab-3" class="form-3-container">
          <label class="form-container__label" for="id">Enter id:</label>
          <input type="text" name="id" id="id" required>
          <label class="form-container__label" for="name">Enter name:</label>
          <input type="text" name="name" id="name" required>
          <label class="form-container__label" for="price">Enter price:</label>
          <input type="number" name="price" id="price" required>
          <label class="form-container__label" for="description">Add description:</label>
          <textarea class="form-container_message" name="description" id="description" cols="60" rows="10" required></textarea>
          <input class="form-container__submit" type="submit" value="Add to list">
        </form>
        <?php
          if (($outputFile = fopen("items.csv", "a")) !== FALSE) {
            if( isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["description"])
                && trim($_POST["id"]) !== '' && trim($_POST["name"]) !== '' && trim($_POST["description"]) !== '' ) {
                fputcsv($outputFile, $_POST);
              }
            fclose($outputFile);
          }
        ?>
        <ul class="list-container">
          <?php
            $itemInfo = '';
            if (($inputFile = fopen("items.csv", "r")) !== FALSE) {
              $namesList = '';
              $index = 0;
              while (($data = fgetcsv($inputFile, 0, ",")) !== FALSE) {		
                $namesList .= sprintf('<a class="list-container__item" href="./Labs.php?index=$index">%s</a>', $data[1]);
                if ( isset($_GET['index']) && intval($_GET['index']) === $index) {
                  $itemInfo = '<div class="form-3-container">';
                  $itemInfo .= sprintf('<span class="form-container__label">Id: %s</span>', $data[0]);
                  $itemInfo .= sprintf('<span class="form-container__label">Name: %s</span>', $data[1]);
                  $itemInfo .= sprintf('<span class="form-container__label">Cost: %s</span>', $data[2]);
                  $salePrice = round($data[2] * 0.75, 2);
                  $itemInfo .= sprintf('<span class="form-container__label">Cost with sale: %s</span>', $salePrice);
                  $itemInfo .= sprintf('<p class="form-container__label">Description: %s</p>', $data[3]);
                  $itemInfo .= "</div>";
                }
                $index++;
              }
              fclose($inputFile);
              if ($namesList !== '') {
                echo $namesList;
              }
            }

          ?>
        </ul>
        <?php
          if (isset($itemInfo)) echo $itemInfo;
        ?>
      </div>
      <section class="about-block__section" id="lab-4">
        <form action="<?php $_PHP_SELF ?>" method="GET" class="form-container">
          <h2 class="form-container__header">Lab 4, variant 1</h2>
          <label class="form-container__label" for="name-input">Enter name (e.g. Ilya, Ilya.Androsov):</label>
          <input type="text" name="name-input" id="name-input" require>
          <label class="form-container__label" for="email-input">Enter mail (e.g @gmail.com):</label>
          <input type="text" name="email-input" id="email-input" require>
          <input class="form-container__submit" type="submit" value="Check">
        <?php

          function isValidEmail($email) {
            return preg_match("/^\S+(\.\S+)*@[A-z]+(\.[A-z]+)+$/", $email) === 1;
          }

          if( isset($_GET["name-input"]) && isset($_GET["email-input"]) ) {
            $email = $_GET["name-input"] . $_GET["email-input"];
            if ( isValidEmail($email) ) {
              echo '<span class="form-container__label">Confirmed!</span>';
              if (($outputFile = fopen("E-mails.txt", "a")) !== false) {
                fwrite($outputFile, $email . "\n");
                fclose($outputFile);
              }
            } else {
              echo '<span class="form-container__label">Rejected, try again</span>';
            }
          }
        ?>
        </form>
      </section>
    </main>
    <footer class="footer-wrapper">
      <div class="socials-block">
        <span class="socials-block__text">Social media:</span>
        <ul class="socials-block__list">
          <li class="socials-block__list_item"><a href="https://github.com/Ajololr"><img src="./Assets/Icons/github.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://vk.com/andrik0099"><img src="./Assets/Icons/vk.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://www.linkedin.com/in/%D0%B8%D0%BB%D1%8C%D1%8F-%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D1%81%D0%BE%D0%B2-48ba35198/"><img src="./Assets/Icons/linkedin.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="tel-block">
        <span class="tel-block_text">Telephone:</span>
        <a class="tel-block__value" href="tel:+375-29-804-26-89">+375-29-804-26-89</a>
      </div>
    </footer>
  </body>
</html>