<?php

    $nom =  $_GET["nom"];
    $edat =  $_GET["edat"];
    $correu =  $_GET["correu"];
    $contra =  $_GET["contra"];
    $contra2 =  $_GET["contra2"];

    $err = "";

    if($contra != $contra2)
    {
        $err = "Les contrasenyes son diferents!";
    }
    else
    {

        /////////BBDD//////////////

        try
        {
            include_once __DIR__ . '/connectaBD.php';
            $connexio = connectaBD();

            $query = "SELECT * FROM Usuari WHERE correu = '" .$correu. "'";
            $consulta = $connexio->prepare($query);

            $consulta->execute();
            $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($resultat))
            {
                include_once __DIR__ . '/../view/regResults/regNOK.php';
                return -1;
            }
            else
            {
                $query = "INSERT INTO Usuari (id, nom, dataNaixement, contrasenya, correu, direccio, DNI)";
                $query .= "VALUES(0, '$nom', '$edat', '$contra', '$correu', 'NULL', 'NULL')";
                $consulta = $connexio->prepare($query);
                $consulta->execute();

                echo "usuari afegit";
            }

        }catch(PDOException $e)
        {
            echo "Error " . $e->getMessage();
        }
        $connexio = null;


echo $err;
}?>
