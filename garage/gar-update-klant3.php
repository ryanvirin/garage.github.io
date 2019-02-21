<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage update klant 3</title>
</head>
<body>
<h1>Garage update klant 3</h1>
<p>
    Klantgegevens wijzigen in de tabel
    klant van de database garage.
</p>

<?php
// klantgegevens uit het formulier halen -----------------------------
$id = $_POST["klantidvak"];
$klantnaam = $_POST ["klantnaamvak"];
$klantadres = $_POST ["klantadresvak"];
$klantpostcode = $_POST ["klantpostcodevak"];
$klantplaats = $_POST ["klantplaatsvak"];

// klantgegevens invoeren in de tabel ---------------------
require_once "gar-connect.php";

$sql = $conn->prepare("UPDATE klant SET klantnaam = :klantnaam , klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats WHERE id = :id");

$sql->execute([
    "id" => $id,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats
]);

echo "De klant is gewijzigd. <br /br>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>
</body>
</html>