<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/About.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title>About</title>
</head>
  <body>
    <?php 
      include './Nav.php';
    ?>
    <main class="about-block">
      <h1 class="about-block__header">About me</h1>
      <section class="about-block__section">
        <h2 class="about-block__section_name">My personality</h2>
        <p class="about-block__section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa placeat ratione molestias eum, quod, voluptatem vero incidunt quae illum doloremque pariatur facere, ad beatae repudiandae tempora. Repellat recusandae deleniti ducimus.</p>
        <img class="about-block__section_image" src="./Assets/Images/me.JPG" alt="">
      </section>
      <section class="about-block__section">
        <h2 class="about-block__section_name">My experience</h2>
        <p class="about-block__section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus fuga cupiditate impedit quaerat quae nemo accusamus, maiores quidem explicabo molestias, maxime enim magni cumque. Nostrum provident molestiae id dolores?</p>
        <img class="about-block__section_image" src="./Assets/Images/code-background.jpg" alt="">
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