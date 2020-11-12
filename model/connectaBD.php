<?php
    function connectaBD(){
        $servidor = "localhost";
        $usuari = "tdiw-c9";//@localhost";
        $clau = "6oCefozW";
        $dbname = "tdiwc9";

        try {
            $connexio = new PDO("mysql:host=$servidor;dbname=tdiwc9;charset=UTF8", $usuari, $clau);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        return $connexio;
    }
?>