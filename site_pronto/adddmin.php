<?php
session_start();
include("php/settings.php");

$minist = $_POST['minist'];
$nome = $_POST['nome'];

if($minist == ""){
    echo"selecione o ministério";
}elseif($nome == ""){
    echo" escreva o nome do novo lider";
}else{
    $query = mysqli_query($mysqli,"UPDATE minist SET $minist = '$nome'") or die(mysqli_error($mysqli));
    header('Location:areadm.php?msg1="Novo lider cadastrado com sucesso"');
}
?>