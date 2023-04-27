<?php 

class Ponuda{

    public static function getPonuda(){

        @require("php/config.php");

        $statement = $conn->prepare("SELECT * FROM specijalnaponuda");

        try{
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }

    }

}


?>