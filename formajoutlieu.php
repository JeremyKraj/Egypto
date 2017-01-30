<?php include('header.php')?>

<form class="form-horizontal" name="ajoutlieu" action="ajoutlieu.php" method="POST" enctype="multipart/form-data">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr class="form-group" align="center">
      <td>Nom du lieu</td>
      <td><input type="text" name="NomLieu"></td>
    </tr>
    <tr class="form-group" align="center">
      <td>Description</td>
      <td><input type="text" name="description"></td>
    </tr>
    <tr class="form-group" align="center">
      <td>Situation</td>
      <td><input type="text" name="situation"></td>
    </tr>
    <tr class="form-group" align="center">
      <td>Image JPG</td>
      <td><input type="file" name="filelieu"></td>
    </tr>
    <tr class="form-group" align="center">
      <td>
      <input type="submit" class="btn btn-default"  name="envoi" value="AJOUTER"/></td>
    </tr>
  </table>
</form>

<?php include('footer.php')?>