<?php
if (!empty($_GET["page"])) {
  $page = (bool) $_GET["page"];
} else {
  $page = false;
}

if ($page) {
  if (empty($_POST["nameInput"]) or empty($_POST["surnameInput"]) or empty($_POST["ageInput"])) {
    header("Location: errorLogin.html");
  }
  $nombre = $_POST["nameInput"];
  $apellidos = $_POST["surnameInput"];
  $edad = $_POST["ageInput"];
  
  echo "Bienvenido $nombre $apellidos. Tu edad es $edad";
} else {
  header("Location: errorLogin.html");
}
?>