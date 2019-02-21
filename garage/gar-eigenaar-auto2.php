<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage read klant</title>
</head>
<body>
<h1>Garage read klant</h1>
<p>
    Dit zijn alle gegevens uit de
    tabel klanten van de database garage.
</p>

<?php
// tabel uitlezen en netjes afdrukken
require_once "gar-connect.php";

$klanten = $conn->prepare("SELECT id, klantnaam, klantadres, klantpostcode, klantplaats FROM klant");


$klanten->execute();

echo "<table>";
foreach ($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["id"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
}
$autos = $conn->prepare("SELECT autokenteken, automerk, autotype, autokmstand, klantid FROM auto");

$autos->execute();

echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "<td>" . $auto["klantid"] . "</td>";
}
echo "</table>";
echo "<a href='gar-menu.php'> Terug naar het menu </a>";

?>
</body>
</html>