<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Styles/Education.css">
  <link rel="stylesheet" type="text/css" href="./Styles/Main.css">
  <title>About</title>
</head>
  <body>
    <?php 
     include './Nav.php';
    ?>
    <main class="education-block">
      <h1 class="education-block__header">My Education</h1>
      <section class="education-block__section">
        <h2 class="education-block__section_header">Gymnasium №5</h2>
        <img class="education-block__section_image" src="./Assets/Images/gimn_5.jpg" alt="">
        <p class="education-block__section_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nostrum nihil voluptatum fugit ipsum minima animi est? Necessitatibus debitis deleniti ducimus optio, nam voluptatibus molestias, iste nulla adipisci aut incidunt.</p>
      </section>
      <section class="education-block__section">
        <h2 class="education-block__section_header">BSUIR</h2>
        <img class="education-block__section_image" src="./Assets/Images/BSUIR.jpg" alt="">
        <p class="education-block__section_description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio delectus facilis ratione doloribus? Quo autem libero vitae, nisi rerum at tenetur ipsum asperiores ipsa, totam obcaecati sint! Temporibus, eaque eveniet?</p>
      </section>
      <section class="education-block__section">
        <h2 class="education-block__section_header">RSSchool</h2>
        <img class="education-block__section_image" src="./Assets/Icons/RSS.svg" alt="">
        <p class="education-block__section_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, esse enim! Voluptate dolorum, illum reprehenderit fugit vitae quae ipsam nam illo in alias cupiditate at maxime. Maiores deleniti nobis dolorem?</p>
      </section>
    </main>
    <footer class="footer-wrapper">
      <div class="socials-block">
        <span class="socials-block__text">Social media:</span>
        <ul class="socials-block__list">
          <li class="socials-block__list_item"><a href="https://github.com/Ajololr"><img src="../Assets/Icons/github.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://vk.com/andrik0099"><img src="../Assets/Icons/vk.svg" alt=""></a></li>
          <li class="socials-block__list_item"><a href="https://www.linkedin.com/in/%D0%B8%D0%BB%D1%8C%D1%8F-%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D1%81%D0%BE%D0%B2-48ba35198/"><img src="../Assets/Icons/linkedin.svg" alt=""></a></li>
        </ul>
      </div>
      <div class="tel-block">
        <span class="tel-block_text">Telephone:</span>
        <a class="tel-block__value" href="tel:+375-29-804-26-89">+375-29-804-26-89</a>
      </div>
    </footer>
  </body>
</html>