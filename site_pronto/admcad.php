<?php
session_start();
include("php/settings.php");

    $user = $_POST['user'];
    $senha = $_POST['senha'];
    
    $query = mysqli_query($mysqli,  "SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$senha'")or die("erro não foi possivel achar seu usuario");			
    $row = mysqli_fetch_array($query);
    $total  = mysqli_num_rows($query);
    
        if($total >= 1){
            header("Location:areadm.php");
            $_SESSION['logado']="ok";
        }else{
            echo "erro ao conectar.";
        }
    
?>