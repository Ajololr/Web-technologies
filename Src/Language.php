<?php
  if (isset($_POST['lang_select']) && ($_POST['lang_select'] === 'en' || $_POST['lang_select'] === 'ru')) {
    $lang = $_POST['lang_select'];
    setcookie("lang", $_POST['lang_select']);
  } elseif (isset($_COOKIE['lang']) && ($_COOKIE['lang'] === 'en' || $_COOKIE['lang'] === 'ru')) {
    $lang = $_COOKIE['lang'];
  } 

  if (isset($lang)) {
    $textValues = parse_ini_file("./Languages/" . $lang . ".ini");
  } else {
    $langSelection = sprintf('<form class="lang-form-container" method="POST" action="%s">', $_SERVER['SCRIPT_NAME']);
    $langSelection .= '<h2 class="form-container__header">Choose website language:</h2>';
    $langSelection .= '<select class="form-container__input" id="lang_select" name="lang_select">';
    $langSelection .= '<option class="form-container__input" value="en">English</option>';
    $langSelection .= '<option class="form-container__input" value="ru">Русский</option>';
    $langSelection .= '</select>';
    $langSelection .= '<input class="form-container__submit" type="submit" value="Select">';
    $langSelection .= '</form>';

    echo $langSelection;
  }
?>

  
    
   
      
      
    
    
  