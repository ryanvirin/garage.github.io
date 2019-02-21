<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage delete klant 3</title>
</head>
<body>
<h1>Garage delete klant 3</h1>
<p>
    Op klantid gegevens zoeken uit de
    tabel klanten van de database garage
    zodat ze verwijderd kunnen worden,
</p>

<?php
// klantgegevens uit het formulier halen -----------------------------
$id = $_POST["klantvakid"];
$verwijderen = $_POST ["verwijdervak"];

// klantgegevens verwijderen ---------------------
if ($verwijderen){

    require_once "gar-connect.php";

    $sql = $conn->prepare("DELETE FROM klant WHERE id = :id");

    $sql->execute([
        "id" => $id,]);

    echo "De gegevens zijn verwijderd. <br />";
}else{
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='gar-menu.php'> terug naar het menu </a>";

?>
</body>
</html>