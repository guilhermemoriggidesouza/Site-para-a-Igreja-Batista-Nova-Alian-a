<?php
session_start();
include("php/settings.php");

$dados=$_GET['id'];
$coluna=$_GET['coluna'];

echo $dados;
echo $coluna;

$query = mysqli_query($mysqli, "DELETE FROM agenda WHERE $coluna = '$dados'")or die(mysqli_error($query));
if(mysqli_query($mysqli, "DELETE FROM agenda WHERE $coluna = '$dados'")){
    header("Location:areadm.php?msg3=Evento excluido com sucesso");
}

?>