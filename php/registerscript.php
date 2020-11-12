<html>
<body>
<?php

//function registra()
{
    $nom =  $_REQUEST["nom"];
    $edat =  $_REQUEST["edat"];
    $correu =  $_REQUEST["correu"];
    $contra =  $_REQUEST["contra"];
    $contra2 =  $_REQUEST["contra2"];

    $err = "";

    if($contra != $contra2)
    {
        $err = "Les contrasenyes son diferents!";
    }
    else
    {

        /*$aux = strpos($correu, '@');
        if($aux != false)
        {
            $correu[$aux] = chr(120);
        }*/
        /////////BBDD//////////////

        $servidor = "localhost";
        $usuari = "tdiw-c9";//@localhost";
        $clau = "6oCefozW";

        try
        {
            echo chr($correu);
            $connexio = new PDO("mysql:host=$servidor;dbname=tdiwc9;charset=UTF8", $usuari, $clau);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "SELECT * FROM usuari WHERE correu = '" .$correu. "'";
            $consulta = $connexio->prepare($query);
            //$resultat = $select_comment_query = mysqli_query($connexio, $var);

            $consulta->execute();
            $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($resultat))
            {
                echo "L'usuari ja existeix";
            }
            else
            {
                $query = "INSERT INTO usuari (id, nom, data_naixement, contrasenya, tarjeta_credito, correu, direccio, DNI)";
                $query .= "VALUES(0, '$nom', '$edat', '$contra', 'NULL', '$correu', 'NULL', 'NULL')";
                $consulta = $connexio->prepare($query);
                $consulta->execute();
                //$resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);
                echo "usuari afegit";
            }

        }catch(PDOException $e)
        {
            echo "Error " . $e->getMessage();
        }
        $connexio = null;

    }

echo $err;
}?>
</body>
</html>
