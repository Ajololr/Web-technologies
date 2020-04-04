<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Projects.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title>About</title>
</head>
  <body>
    <?php 
      include './Nav.php';
    ?>
    <main class="projects-block">
      <h1 class="projects-block__header">My completed projects<br>Just click on the image</h1>
      <section class="projects-block__proj">
        <h2 class="proj__name">Writer of Belarus</h2>
        <a class="proj__link" href="https://culture-portal-rss20.netlify.com/"><img class="proj__image" src="./Assets/Images/Writers.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            Build with React
          </li>
          <li class="features-list__item">
            Used bootstrap
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            Teamwork
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Song bird</h2>
        <a class="proj__link" href="https://song-bird-ajololr.netlify.com/"><img class="proj__image" src="./Assets/Images/Birds.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            Build with React
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            API usage
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Fancy weather</h2>
        <a class="proj__link" href="https://ajololr-fancy-weather.netlify.com/"><img class="proj__image" src="./Assets/Images/Weather.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            Pure JS
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            API usage
          </li>
        </ul>
      </section>
      <section class="projects-block__proj">
        <h2 class="proj__name">Simple piskel clone</h2>
        <a class="proj__link" href="https://ajololr-simple-piskel-clone.netlify.com/app.html"><img class="proj__image" src="./Assets/Images/Piskel.png" alt=""></a>
        <ul class="proj__features-list">
          <li class="features-list__item">
            Pure JS
          </li>
          <li class="features-list__item">
            Sass
          </li>
          <li class="features-list__item">
            Saved user session
          </li>
        </ul>
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