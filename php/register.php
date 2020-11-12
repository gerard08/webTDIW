<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registre</title>
    <link rel="icon" type="image/ico" href="../media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../css/registerStyle.css"/>
</head>


<body>

<?php
function register()
{
    $si = "hola";
    $nom =  $_REQUEST["nom"];
    $edat =  $_REQUEST["edat"];
    $correu =  $_REQUEST["correu"];
    $contra =  $_REQUEST["contra"];
    $contra2 =  $_REQUEST["contra2"];

    $err = "";

    if(contra != contra2)
    {
        $err = "Les contrasenyes son diferents!";
    }
    else
    {
        $err = "";
        /////////BBDD//////////////

        $servidor = "localhost";
        $usuari = "tdiw-c9";
        $clau = "6oCefozW";

        try
        {
            $connexio = new PDO("mysql:host=$servidor;dbname=myDB;charset=UTF8", $usuari, $clau);
            $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $connexio->prepare("SELECT correu FROM usuari WHERE correu == $correu");
            $consulta->execute();
            $resultat = $consulta->fetchAll(PDO::FETCH_ASSOC);

            if($resultat != "")
            {
                echo "hi ha algo";
            }
            else
            {
                echo "no hi ha res";
            }

        }catch(PDOException $e)
        {
            echo "Error " . $e->getMessage();
        }
        $connexio = null;
    }
}
?>

<div id="taulell">

    <form id="register" action="registerscript.php" method="post">
        <!--<form action="register.php" method="post">-->
        <h1>Registrar-se</h1>
        <input type="text" placeholder="Nom" name="nom" required="required">
        <input type="date" placeholder="Data de naixement" name="edat" required="required">
        <input type="email" placeholder="Correu electrònic" name="correu" required="required">
        <input type="password" placeholder="Contrasenya" name="contra" required="required">
        <input type="password" placeholder="Repeteix la contrasenya" name="contra2">
        <button type="submit" id="registrar">
            <b>REGISTRA'T</b>
        </button>
        <!--</form>-->
    </form>

    <div id="separador">

    </div>

    <div id="login">
        <h1>Iniciar sessió</h1>
        <input type="email" placeholder="Correu electrònic" id="correuLOG">
        <input type="password" placeholder="Contrasenya" id="contraLOG">
        <button type="submit" id="loginB">
            <b>LOG IN </b>
        </button>
    </div>


</div>


</body>
</html>


