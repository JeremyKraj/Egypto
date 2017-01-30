<?php
$NomLieu= $_GET["NomLieu"];
include('connect.php');

mysqli_query($bdd,$query);
mysqli_close($bdd);
header('Location: index.php');
?>

