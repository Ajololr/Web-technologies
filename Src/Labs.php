<?php
  include './Language.php';
?>
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
        <a href="#lab-8"><li class="labs-list_item">Lab 8</li></a>
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
      <section class="form-container" id="lab-8">
        <h2 class="form-container__header">Lab 8, variant 1</h2>
        <h2 class="form-container__header">Translation for this web site is the last lab.</h2>
      </section>
    </main>
    <?php
      include './Footer.php';
    ?>
  </body>
</html>