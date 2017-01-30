<?php
$NomLieu     = $_POST["NomLieu"];
$description = $_POST["description"];
$situation = $_POST["situation"];

include('connect.php');

$query = "UPDATE lieu SET description = '$description', situation = '$situation' WHERE NomLieu = '$NomLieu'";
mysqli_query($bdd,$query);
mysqli_close($bdd);
header('Location: index.php');
?>

