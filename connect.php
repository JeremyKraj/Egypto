<?php
/**
 * Created by PhpStorm.
 * User: jeremka
 * Date: 15/12/16
 * Time: 14:32
 */
//
//$bdd = mysqli_connect("localhost", "root", "root","egypte")
//or die ("connection echoué :".mysqli_connect_error().mysqli_connect_errno());
//echo "Connection réussie";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $bdd = mysqli_connect("localhost", "root", "root", "egypte");
    $bdd->set_charset("utf8");
}
catch(mysqli_sql_exception $e){
    echo "message d'erreur SQL".$e;
}
catch (Exception $e){
        echo "message".$e;
        echo "je sors du programe";
        exit();
}




?>