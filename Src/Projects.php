<?php
  include './Language.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Projects.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title><?php echo $textValues["PROJECTS_PAGE_TITLE"]; ?></title>
</head>
  <body>
    <?php 
      include './Nav.php';
    ?>
    <main class="projects-block">
      <h1 class="projects-block__header"><?php echo $textValues["PROJECTS_TITLE"]; ?></h1>
      <section class="projects-block__proj">
        <h2 class="proj__name"><?php echo $textValues["WRITERS_PROJECT"]; ?></h2>
        <a class="proj__link" href="https://culture-portal-rss20.netlify.com/"><img class="proj__image" src="./Assets/Images/Writers.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            <?php echo $textValues["USED_REACT"]; ?>
          </li>
          <li class="features-list__item">
            <?php echo $textValues["USED_BOOTSTRAP"]; ?>
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            <?php echo $textValues["USED_TEAMWORK"]; ?>
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Song bird</h2>
        <a class="proj__link" href="https://song-bird-ajololr.netlify.com/"><img class="proj__image" src="./Assets/Images/Birds.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            <?php echo $textValues["USED_REACT"]; ?>
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            <?php echo $textValues["USED_API"]; ?>
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Fancy weather</h2>
        <a class="proj__link" href="https://ajololr-fancy-weather.netlify.com/"><img class="proj__image" src="./Assets/Images/Weather.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            <?php echo $textValues["USED_JS"]; ?>
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            <?php echo $textValues["USED_API"]; ?>
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Simple piskel clone</h2>
        <a class="proj__link" href="https://ajololr-simple-piskel-clone.netlify.com/app.html"><img class="proj__image" src="./Assets/Images/Piskel.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            <?php echo $textValues["USED_JS"]; ?>
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            <?php echo $textValues["USED_SESSION"]; ?>
          </li>
        </ul>
      </section>
    </main>
    <?php
      include './Footer.php';
    ?>
  </body>
</html>