<?php

class Album{

    public static function getImages(){
        @require("../config.php");
        
        $statement = $conn->prepare("SELECT * FROM album");

        try{
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            $conn = null;
            return false;
        }
    }

}

?>