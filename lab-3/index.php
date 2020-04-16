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
        <a href="#lab-3" class="intro-block__button">Go to lab 3</a>
      </div>
      <div class="lab-container">
        <h2 class="form-container__header">Lab 3, variant 1</h2>
        <form action="<?php $_PHP_SELF ?>" method="POST" id="lab-3" class="form-container">
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
          if( isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["description"])
              && trim($_POST["id"]) !== '' && trim($_POST["name"]) !== '' && trim($_POST["description"]) !== '' ) {
            if (($outputFile = fopen("items.csv", "a")) !== FALSE) {
              fputcsv($outputFile, $_POST);
              fclose($outputFile);
            }
          }
        ?>
        <form action="<?php $_PHP_SELF ?>" method="GET" class="list-container">
          <?php
            $itemInfo = '';
            if (($inputFile = fopen("items.csv", "r")) !== FALSE) {
              $namesList = '';
              while (($data = fgetcsv($inputFile, 1000, ",")) !== FALSE) {		
                $namesList .= "<input class=\"list-container__item\" type=\"submit\" name=\"$data[1]\" value=\"$data[1]\"></input>";
                if ( isset($_GET[$data[1]]) ) {
                  $itemInfo = "<div class=\"form-container\">";
                  $itemInfo .= "<span class=\"form-container__label\">Id: $data[0]</span>";
                  $itemInfo .= "<span class=\"form-container__label\">Name: $data[1]</span>";
                  $itemInfo .= "<span class=\"form-container__label\">Cost: $data[2]</span>";
                  $salePrice = round($data[2] * 0.75, 2);
                  $itemInfo .= "<span class=\"form-container__label\">Cost with sale: $salePrice</span>";
                  $itemInfo .= "<p class=\"form-container__label\">Description: $data[3]</p>";
                  $itemInfo .= "</div>";
                }
              }
              fclose($inputFile);
              if ($namesList !== '') {
                echo $namesList;
              }
            }

          ?>
        </form>
        <?php
          if (isset($itemInfo)) echo $itemInfo;
        ?>
      </div>
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