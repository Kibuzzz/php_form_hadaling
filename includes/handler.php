<?php

if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
}

echo "This are the data, that the user submitted<br>";
echo "<br>First name -> $firstname<br>";
echo "<br>Last name -> $lastname<br>";
echo "<br>Favourite pet -> $favouritepet<br>";