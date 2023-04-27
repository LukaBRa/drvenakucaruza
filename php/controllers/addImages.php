<?php

$image = $_FILES['img']['name'];
$apartmanNum = $_POST['apartmanNum'];
var_dump($image);
var_dump($apartmanNum);
if($apartmanNum == "0"){

    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/album/$image");
        header("Location: /ruza-remastered/administracija.php");
    }

}else if($apartmanNum == "1"){
    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/ap1/$image");
        header("Location: /ruza-remastered/administracija.php");
    }
}else if($apartmanNum == "2"){
    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/ap2/$image");
        header("Location: /ruza-remastered/administracija.php");
    }
}else if($apartmanNum == "3"){
    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/ap3/$image");
        header("Location: /ruza-remastered/administracija.php");
    }
}else if($apartmanNum == "4"){
    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/ap4/$image");
        header("Location: /ruza-remastered/administracija.php");
    }
}else if($apartmanNum == "5"){
    @require("../models/apartman.php");

    $success = Apartman::addApartmanImage($apartmanNum, $image);
    
    if($success){
        move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/" . "ruza-remastered/" . "images/spa/$image");
        header("Location: /ruza-remastered/administracija.php");
    }
}