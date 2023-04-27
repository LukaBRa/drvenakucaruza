<?php

$apartman = $_POST['brojApartmana'];
$novaCena = $_POST['cena'];

@require("../config.php");

$statement = $conn->prepare("UPDATE cenovnik
SET cena = '$novaCena'
WHERE apartman = '$apartman';");

try{
    $statement->execute();
    header("Location: /ruza-remastered/administracija.php");
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    exit();
}