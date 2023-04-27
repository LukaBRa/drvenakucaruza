<?php

class Administrator{

    public static function validateAdministrator($adminusername, $adminpassword){

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

        $statement = $conn->prepare("SELECT * FROM administrator WHERE username = '$adminusername' and password = '$adminpassword'");

        try{
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if($result != null and count($result) > 0){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return false;
        }

    }

}

?>