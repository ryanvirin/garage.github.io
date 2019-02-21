<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Ryan Choennie">
    <meta charset="UTF-8">
    <title>Garage menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>

<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the garage menu.</h1>
</div>
<p>
    <a href="../login/reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="../login/logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p>

<h1>Garage menu</h1>
<h2>Klant</h2>
<ul>
    <li><a href="gar-create-klant1.php"> Create </a></li>
    <li><a href="gar-read-klant.php"> read </a></li>
    <li><a href="gar-search-klant1.php"> zoeken op klantid </a></li>
    <li><a href="gar-update-klant1.php"> update </a></li>
    <li><a href="gar-delete-klant1.php"> delete </a></li>
</ul>

<h2>Auto</h2>
<ul>
    <li><a href="gar-create-auto1.php"> Create </a></li>
    <li><a href="gar-read-auto.php"> read </a></li>
    <li><a href="gar-search-auto1.php"> zoeken op kenteken </a></li>
    <li><a href="gar-update-auto1.php"> update </a></li>
    <li><a href="gar-delete-auto1.php"> delete </a></li>
</ul>

<h2>Auto2</h2>
<ul>
    <li><a href="gar-eigenaar-auto2.php"> Auto eigenaren </a></li>
</ul>


</body>
</html>