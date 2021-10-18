<?php
$palvelin = "localhost";
$kayttaja = "root";
$salasana = "";
$tietokanta = "naytto";

$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);


if ($yhteys->connect_error) {
   die("Yhteyden muodostaminen epäonnistui: " . $yhteys->connect_error);
}

mysqli_set_charset($yhteys,"utf8"); ?>
