<?php
include('header.php');
include('connect.php');
$NomLieu=$_GET["NomLieu"];

echo '<center><img style="max-width: 500px;" class="photo" src="img/'.strtolower(str_replace(" ", "",$NomLieu)).'.jpg"></center>';
?>
            <div class="alert alert-danger">
                <strong>Attention!</strong> Cette action supprimera le lieu à tout jamais  <?php $NomLieu; ?> ET SURTOUT les sites qui lui sont liés.
                </br> Etes vous réellement certain de vouloir le supprimer ?
            </div>
            <div class="form-group" align="center">
                <a href="index.php"><button class="btn btn-danger">FINALEMENT, JE ME DEGONFLE ET JE NE SUPPRIME PAS</button></a>
                <a href="supplieu.php?NomLieu='.$donnees['NomLieu'].'"><button class="btn btn-info">OUAIS, J'AI PARFAITEMENT CONSCIENCE DES RISQUES QU'ENCOURS LA SUPPRESSION DE CE LIEU</button></a>
            </div>
<?php


include('footer.php')
?>
