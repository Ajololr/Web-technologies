<?php
  $currentScriptName = $_SERVER['SCRIPT_NAME'];
?>
<header class="header-container">
  <ul class="header-container__pages">
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/Src/index.php") echo " active"?>"><a href="./index.php"><?php echo $textValues["NAV_HOME"]; ?></a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/Src/About.php") echo " active"?>"><a href="./About.php"><?php echo $textValues["NAV_ABOUT"]; ?></a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/Src/Education.php") echo " active"?>"><a href="./Education.php"><?php echo $textValues["NAV_EDUCATION"]; ?></a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/Src/Projects.php") echo " active"?>"><a href="./Projects.php"><?php echo $textValues["NAV_PROJECTS"]; ?></a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/Src/Labs.php") echo " active"?>"><a href="./Labs.php"><?php echo $textValues["NAV_WT_LABS"]; ?></a></li>
  </ul>
</header>