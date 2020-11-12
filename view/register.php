<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registre</title>
    <link rel="icon" type="image/ico" href="../media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../css/registerStyle.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"> </script>
</head>


<body>

<div id="taulell">


    <form id="register" onsubmit="return registraUsuari();" method="post">
        <!--<form action="register.php" method="post">-->
        <h1>Registrar-se</h1>
        <input type="text" placeholder="Nom" id="nom" required="required">
        <input type="date" placeholder="Data de naixement" id="edat" required="required">
        <input type="email" placeholder="Correu electrònic" id="correu" required="required">
        <input type="password" placeholder="Contrasenya" id="contra" required="required">
        <input type="password" placeholder="Repeteix la contrasenya" id="contra2">
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


