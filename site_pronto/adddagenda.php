<?php
session_start();
include("php/settings.php");

$esegunda = $_POST['esegunda'];
$eterca = $_POST['eterca'];
$equarta = $_POST['equarta'];
$equinta = $_POST['equinta'];
$esexta = $_POST['esexta'];
$esabado = $_POST['esabado'];
$esomingo = $_POST['edomingo'];
$evento = $_POST['evento'];

    $query = mysqli_query($mysqli,"INSERT INTO agenda VALUES (NULL, '$esegunda', '$eterca', '$equarta', '$equinta', '$esexta', '$esabado', '$esomingo', '$evento')") or die(mysqli_error($mysqli));
    header('Location:areadm.php?msg2="Novo evento cadastrado com sucesso"');

?>