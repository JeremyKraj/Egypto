<!DOCTYPE html>
<html lang="FR">
<head>
<!--    <meta charset="UTF-8">-->
    <title>LE TEMPS DES PHARARONS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <?php

   include('connect.php');


$query = "SELECT * FROM lieu";
$response = mysqli_query($bdd,$query);

    /* JEU D'ENREGISTREMENTS */
//    var_dump($response);
//    /* JEU D'ENREGISTRMEENTS 2 */
//    print_r($response);
    /* TABLEAU */
    $tabdata = mysqli_fetch_all($response, MYSQLI_BOTH);

//    var_dump($tabdata);

//
    echo "<a class='button' href='formajoutlieu.php'>AJOUTER UN LIEU</a>";
    echo "<div class='row'>";

    foreach($tabdata as $donnees){
        echo "<div class='cube col-md-4'/>";
        echo '<img class="photo" src="img/'.strtolower(str_replace(" ", "",$donnees['NomLieu'])).'.jpg">';
        echo "<div id='affichage'/>";
        echo "<p>".$donnees[0]."</p>";
        echo "<p>".$donnees['description']."</p>";
        echo "<p>".$donnees[2]."</p>";
        echo "<a href='formmodiflieu.php?NomLieu=".$donnees['NomLieu']."'><button class='button btn-default'>Modifier</button></a>";
        echo "<a href='consupplieu.php?NomLieu=".$donnees['NomLieu']."'><button class='button btn-warning'>Supprimer</button></a>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";

    mysqli_close($bdd);



?>


</div>
<script src="js/bootstrap.min.js" type="text/javascript"/>
</body>
</html>
