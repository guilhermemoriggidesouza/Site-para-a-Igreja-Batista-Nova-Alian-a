<?php

	//Dados do servidor
	$host = "localhost";
	$login = "root";
	$senha = "";
	$banco = "ministerios";


        $mysqli = new mysqli('localhost', 'root', '', 'ministerios');

     if ($mysqli->connect_error) {
          die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
       }


	if(!mysqli_connect($host, $login, $senha)){
		echo "Erro ao conectar ao banco de dados!";
	}
?>