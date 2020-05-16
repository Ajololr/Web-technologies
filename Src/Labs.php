<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Labs.css">
  <title>Labs</title>
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
      <section class="about-block__section" id="lab-5">
        <div class="lab-5-container">
          <h2 class="form-container__header lab-5-header">Lab 5, variant 1</h2>
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
            
            if ( isset($_POST["idToDelete"]) ) {
              $id = intval($_POST["idToDelete"]);
              $result = $mysqli->query("DELETE FROM `user` WHERE `user`.`id` = $id");
            } 

            if ( isset($_POST["add_first_name"]) && isset($_POST["add_second_name"]) && isset($_POST["add_nickname"]) ) {
              $query = sprintf("INSERT INTO user (id, first_name, second_name, nickname) VALUES (NULL, '%s', '%s', '%s')", $_POST['add_first_name'], $_POST['add_second_name'], $_POST['add_nickname']);
              $result = $mysqli->query($query);
              if (!$result) echo mysqli_error($mysqli);
            } 

            $result = $mysqli->query("SELECT creation.id AS id, creation.name AS name, creation.creation_date AS date, first_name, second_name
              FROM creation, fine_arts_artist
              WHERE creation.artist_id = fine_arts_artist.id
              ORDER BY creation.name");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $creationsTable = '<table class="lab-5-table-container">';
            $creationsTable .= "<tr><td>ID</td><td>Name</td><td>Date of creation</td><td>Artist</td></tr>";
            foreach ($rows as $row) {
              $creationsTable .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s %s</td></tr>", $row['id'], $row['name'], $row['date'], $row['first_name'], $row['second_name']);
            }
            $creationsTable .= "</table>";

            $result = $mysqli->query("SELECT id, first_name, second_name, birth_date
              FROM fine_arts_artist");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $articlesTable = '<table class="lab-5-table-container">';
            $articlesTable .= "<td>ID</td><td>First name</td><td>Second name</td><td>Birth date</td>";
            foreach ($rows as $row) {
              $articlesTable .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', $row['id'], $row['first_name'], $row['second_name'], $row['birth_date']);
            }
            $articlesTable .= "</table>";

            $result = $mysqli->query("SELECT id, first_name, second_name, nickname
              FROM user");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $usersTable = '<table class="lab-5-table-container">';
            $usersTable .= "<td>ID</td><td>First name</td><td>Second name</td><td>Nickname</td>";
            foreach ($rows as $row) {
              $usersTable .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', $row['id'], $row['first_name'], $row['second_name'], $row['nickname']);
            }
            $usersTable .= "</table>";
            echo '<h4 class="form-container__header lab-5-header">Paintings:</h4>', $creationsTable, '<h4 class="form-container__header lab-5-header">Artists:</h4>', $articlesTable, '<h4 class="form-container__header lab-5-header">Users:</h4>', $usersTable;
          ?>

          <form action="<?php $_PHP_SELF ?>" method="POST" class="form-3-container">
            <h2 class="form-container__header">Add user:</h2>
            <span class="form-container__label">First name:</span>
            <input class="form-container__input" type="text" name="add_first_name" id="add_first_name" required>
            <span class="form-container__label">Second name:</span> 
            <input class="form-container__input" type="text" name="add_second_name" id="add_second_name" required>
            <span class="form-container__label">Nickname:</span> 
            <input class="form-container__input" type="text" name="add_nickname" id="add_nickname" required>
            <input class="form-container__submit" type="submit" value="Add user">
          </form>

          <?php
            $userInfo = '';
            $usersList = '';
            $id = '';
            foreach ($rows as $row) {
              $usersList .= sprintf('<a class="list-container__item" href="./Labs.php?UserId=%s"> %s %s</a>', $row["id"], $row["first_name"], $row["second_name"]);
              if ( isset($_GET['UserId']) && $_GET['UserId'] === $row['id'] ) {
                $id = intval($_GET['UserId']);
                $result = $mysqli->query("SELECT * FROM `user` WHERE `id` = $id");
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $userInfo .= sprintf('<span class="form-container__label">First name:</span> <input class="form-container__input" type="text" name="change_first_name" id="change_first_name" value="%s" required>', $row['first_name']);
                $userInfo .= sprintf('<span class="form-container__label">Second name:</span> <input class="form-container__input" type="text" name="change_second_name" id="change_second_name" value="%s" required>', $row['second_name']);
                $userInfo .= sprintf('<span class="form-container__label">Nickname:</span> <input class="form-container__input" type="text" name="change_nickname" id="change_nickname" value="%s" required>', $row['nickname']);
                $userInfo .= sprintf('<input class="form-container__submit" type="submit" value="Change">');
              }
            }
          ?>

          <ul class="list-container">
            <?php
              if ($usersList !== '') {
                echo $usersList;
              }
            ?>
          </ul>

          <form action="<?php $_PHP_SELF ?>" method="POST" class="form-3-container">
            <?php
              echo $userInfo;
            ?>
          </form>

          <?php 
            if ( $id !== '' ) {
              echo sprintf('<form action="./Labs.php" method="POST" class="form-3-container">
                <input style="display: none;" name="idToDelete" type="number" value="%d">
                <input class="form-container__submit" type="submit" value="Delete">
              </form>', $id);
            }
          ?>
        </div>
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