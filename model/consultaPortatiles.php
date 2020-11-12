<?php
    function consultaPortatiles($connexio, $ID)
    {
        $portatiles = null;
        try {
            $query = "SELECT p.id, p.nom FROM Producte p, Categoria c WHERE c.id='" . $ID . "' and p.id=c.id";
            $consultaPortatiles = $connexio->prepare($query);
            $consultaPortatiles->execute();
            $portatiles = $consultaPortatiles->fetchALL(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return ($portatiles);
    } ?>