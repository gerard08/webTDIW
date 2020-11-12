<html>
<head>
    <link rel="icon" type="image/ico" href="/media/icon.ico" />
</head>
</html>
<?php

if(isset($_GET['p']))
{
    $action = $_GET['p'];
}
else
{
    $action = '';
}


switch($action)
{
    case 'portatils':
    {
        include_once __DIR__ . '/view/portatiles.php';
        break;
    }
    case 'login':
    {
        include_once __DIR__ . '/view/register.php';
        break;
    }
    default:
    {
        include_once __DIR__ . '/view/main.php';
        break;
    }
}
?>

