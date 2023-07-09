<?php

class Apartman{

    public static function getApartman($apartman){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "drvenakucaruza";

        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }

        $statement = $conn->prepare("SELECT * FROM apartmani WHERE apartman='$apartman' ");

        try{
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if($result != null){
                $conn = null;
                return $result;
            }
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            $conn = null;
            return false;
        }

    }

    public static function addApartmanImage($apartman, $imageName){

        @require("../config.php");

        $statement = $conn->prepare("INSERT INTO apartmani(apartman, filename) VALUES ('$apartman', '$imageName');");

        try{
            $statement->execute();
            return true;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }

    }

}