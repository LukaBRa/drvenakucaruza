<?php

$ponudaTxt = $_POST['specijalnaPonuda'];
$link = $_POST['linkPonuda'];

@require("../config.php");

$statement = $conn->prepare("UPDATE specijalnaponuda SET ponuda = '$ponudaTxt', link = '$link'");

try{
    $statement->execute();
    header("Location: /ruza-remastered/administracija.php");
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    exit();
}