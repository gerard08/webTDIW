<?php
    include_once __DIR__ . "/../model/connectaBD.php";
    include_once __DIR__ . "/../model/consultaPortatiles.php";

    $conn=connectaBD();
    $portatiles=consultaPortatiles($conn, 1);

include_once __DIR__ . "/../view/muestraPortatiles.php";

?>