<?php

/**
 * Created by PhpStorm.
 * User: jeremka
 * Date: 15/12/16
 * Time: 17:33
 */

$NomLieu     = $_POST["NomLieu"];
$description = $_POST["description"];
$situation = $_POST["situation"];

if(isset($_FILES['filelieu']))
{
    $dossier = 'img/';
    $fichier = basename($_FILES['filelieu']['name']);
    $fichierjpg ="$NomLieu.jpg";
    strtolower($fichierjpg);
    if(move_uploaded_file($_FILES['filelieu']['tmp_name'], $dossier . $fichierjpg))
    {
        echo 'Upload effectué avec succès !';
    }
    else
    {
        echo 'Echec de l\'upload !';
    }
}

include('connect.php');

    $query="INSERT INTO lieu (NomLieu,description,situation) VALUES('$NomLieu','$description','$situation');";
    mysqli_query($bdd, $query);
    mysqli_close($bdd);
    header('Location: index.php');

?>