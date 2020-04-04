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
      <div class="intro-block">
        <div class="info-block">
          <h2 class="info-block__description">Hello, glad to see you here! I'm</h2>
          <h1 class="info-block__name">Ilya Androsov</h1>
        </div>
        <a href="#contact-me" class="intro-block__button">Contact me</a>
      </div>
      <form action="" id="contact-me" class="form-container">
        <h2 class="form-container__header">Contact me</h2>
        <label class="form-container__label" for="name">Your name:</label>
        <input class="form-container__input" type="text" name="contact-info" id="name">
        <label class="form-container__label" for="tel">Your telephone:</label>
        <input class="form-container__input" type="tel" name="contact-info" id="tel">
        <label class="form-container__label" for="email">Your mail:</label>
        <input class="form-container__input" type="email" name="contact-info" id="email">
        <label class="form-container__label" for="message">Enter message:</label>
        <textarea class="form-container_message" name="message" id="message" cols="60" rows="10"></textarea>
        <input class="form-container__submit" type="submit" value="Send">
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