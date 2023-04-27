<?php

if(isset($_POST['pocetnaSlika'])){
    $images = $_POST['pocetnaSlika'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/album/$image";
            if(file_exists($imagePath)){
                echo "File doesn't exist.";
                if(!unlink($imagePath)){
                    echo "Error with deleting file.";
                }
            }
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}else if(isset($_POST['ap1slika'])){
    $images = $_POST['ap1slika'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/ap1/$image";
            unlink($imagePath);
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}else if(isset($_POST['ap2slika'])){
    $images = $_POST['ap2slika'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/ap2/$image";
            if(file_exists($imagePath)){
                echo "File doesn't exist.";
                if(!unlink($imagePath)){
                    echo "Error with deleting file.";
                }
            }
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}else if(isset($_POST['ap3slika'])){
    $images = $_POST['ap3slika'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/ap3/$image";
            if(file_exists($imagePath)){
                echo "File doesn't exist.";
                if(!unlink($imagePath)){
                    echo "Error with deleting file.";
                }
            }
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}else if(isset($_POST['ap4slika'])){
    $images = $_POST['ap4slika'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/ap4/$image";
            if(file_exists($imagePath)){
                echo "File doesn't exist.";
                if(!unlink($imagePath)){
                    echo "Error with deleting file.";
                }
            }
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}else if(isset($_POST['spa'])){
    $images = $_POST['spa'];
    $apartmanNum = $_POST['apartmanNum'];
    
    @require("../config.php");
    
    $queryString = "";
    
    foreach($images as $image){
        $queryString .= "DELETE FROM apartmani WHERE apartman = '$apartmanNum' and filename = '$image';";
    }
    
    $statement = $conn->prepare($queryString);
    
    try{
        $statement->execute();
        foreach($images as $image){
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/ruza-remastered" . "/" . "images/spa/$image";
            if(file_exists($imagePath)){
                echo "File doesn't exist.";
                if(!unlink($imagePath)){
                    echo "Error with deleting file.";
                }
            }
        }
        header("Location: /ruza-remastered/administracija.php");
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        exit();
    }
}