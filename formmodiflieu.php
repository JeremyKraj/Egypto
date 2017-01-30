<?php
include('header.php');
include('connect.php');
$selec=$_GET["NomLieu"];
echo '<center><img style="max-width: 500px;" class="photo" src="img/'.strtolower(str_replace(" ", "",$selec)).'.jpg"></center>';

$query = "SELECT * FROM lieu WHERE NomLieu = '$selec'";

$response = mysqli_query($bdd,$query);

if( $monlieu = mysqli_fetch_object($response) )
{
    ?>

    <form class="form-horizontal" name="modificationlieu" action="modiflieu.php" method="POST">
        <table border="0" align="center" cellspacing="2" cellpadding="2">
            <tr class="form-group" align="center">
                <td>NomLieu</td>
                <td><label> <?php echo($monlieu->NomLieu) ;?></label></td>
            </tr>
            <tr class="form-group" align="center">
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo($monlieu->description) ;?>"></td>
            </tr>
            <tr class="form-group" align="center">
                <td>Situation</td>
                <td><input type="text" name="situation" value="<?php echo($monlieu->situation) ;?>"></td>
            </tr>
            <tr class="form-group" align="center">
                <td><input type="submit" name="modifier" class="btn btn-default" value="MODIFIER"></td>
            </tr>
        </table>
    </form>
    <?php
}
 include('footer.php')
?>
