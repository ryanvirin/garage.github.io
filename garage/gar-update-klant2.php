<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage update klant2</title>
</head>
<body>
<h1>Garage update klant 2</h1>
<p>
    Dit formulier word gebruikt om klantgegevens te wijzigen.
    in de tabel klant van de database garage.
</p>

<?php
$klantid = $_POST ["klantidvak"];

require_once "gar-connect.php";

$klanten = $conn->prepare("SELECT id, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE id = :id");

$klanten->execute(["id" => $klantid]);

echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant) {
    // klantid mag niet gewijzigd worden
    echo " klantid:" . $klant["id"];
    echo " <input type='hidden' name='klantidvak' ";
    echo "value=' " . $klant["id"] . " '> <br /> ";

    echo "klantnaam: <input type='text' ";
    echo "name = 'klantnaamvak' ";
    echo "value = '" . $klant["klantnaam"] . "' ";
    echo "<br />";

    echo "klantadres: <input type='text' ";
    echo "name = 'klantadresvak' ";
    echo "value = '" . $klant["klantadres"] . "' ";
    echo "<br />";

    echo "klantpostcode: <input type='text' ";
    echo "name = 'klantpostcodevak' ";
    echo "value = '" . $klant["klantpostcode"] . "' ";
    echo "<br />";

    echo "klantplaats: <input type='text' ";
    echo "name = 'klantplaatsvak' ";
    echo "value = '" . $klant["klantplaats"] . "' ";
    echo "<br />";
}
echo "<input type='submit'>";
echo "</form>"

?>

</body>
</html>