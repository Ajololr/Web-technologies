<?php
  $currentScriptName = $_SERVER['SCRIPT_NAME'];
?>
<header class="header-container">
  <ul class="header-container__pages">
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/lab-2/index.php") echo " active"?>"><a href="./index.php">Home</a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/lab-2/About.php") echo " active"?>"><a href="./About.php">About me</a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/lab-2/Education.php") echo " active"?>"><a href="./Education.php">Education</a></li>
    <li class="header-container__pages_item<?php if ($currentScriptName === "/Web-technologies/lab-2/Projects.php") echo " active"?>"><a href="./Projects.php">Projects</a></li>
  </ul>
</header>