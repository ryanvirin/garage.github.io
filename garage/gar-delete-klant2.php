<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage delete klant2</title>
</head>
<body>
<h1>Garage delete klant 2</h1>
<p>
    op klantid gegevens zoeken uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden.
</p>

<?php
$klantid = $_POST ["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("SELECT id, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE id = :id");

$klanten->execute(["id" => $klantid]);

echo "<table>";
foreach ($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["id"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}

echo "</table><br />";

echo "<form action='gar-delete-klant3.php' method='post'>";

echo "<input type='hidden' name='klantvakid' value=$klantid>";

echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder deze klant. <br />";
echo "<input type='submit'>";

?>

</body>
</html>
