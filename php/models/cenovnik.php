<?php

class Cenovnik{

    public static function getCena($apartman){

        @require("php/config.php");

        $statement = $conn->prepare("SELECT * FROM cenovnik WHERE apartman = '$apartman'");

        try{
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $result['cena'];
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }

    }

}