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
        <a href="#lab-5"><li class="labs-list_item">Lab 5</li></a>
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
      <section class="about-block__section" id="lab-5">
        <div class="form-container">
          <h2 class="form-container__header">Lab 5, variant 1</h2>
          <?php
            define('DB_HOST', 'localhost');
            define('DB_USER', 'root');
            define('DB_PASSWORD', '');
            define('DB_NAME', 'artists');
            
            $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            if ($mysqli->connect_errno) {
              exit('Data base connection error.');
            }
            $mysqli->set_charset('utf8');
            $result = $mysqli->query("SELECT creation.id AS id, creation.name AS name, creation.creation_date AS date, fine_arts_artist.first_name AS author
            FROM creation, fine_arts_artist
              WHERE creation.artist_id = fine_arts_artist.id
              ORDER BY creation.name");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $creationsTable = "<table>";
            $creationsTable .= "<th><td>ID</td><td>Name</td><td>Date of creation</td><td>Artist</td></th>";
            foreach ($rows as $row) {
              $creationsTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['name'], $row['date'], $row['author']);
            }
            $creationsTable .= "</table>";
            // echo $creationsTable;
            $result = $mysqli->query("SELECT id, first_name, second_name, birth_date
            FROM fine_arts_artist");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $articlesTable = "<table>";
            $articlesTable .= "<th><td>ID</td><td>First name</td><td>Second name</td><td>Birth date</td></th>";
            foreach ($rows as $row) {
              $articlesTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['first_name'], $row['second_name'], $row['birth_date']);
            }
            $articlesTable .= "</table>";
            echo $articlesTable, $creationsTable;
          ?>
        </div>
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