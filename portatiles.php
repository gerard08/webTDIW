<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ReTech: PORTATILES</title>
    <link rel="icon" type="image/ico" href="../media/icon.ico" />
    <meta name="author" content="Raúl Avellaneda, Gerard Martínez" />
    <meta name="description" content="compra d'articles electrònics de segona ma"/>
    <meta name="keywords" content="electronica, segona ma" />
    <meta name="=viewport" content="width=device-width; initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <!--<script type="text/javascript" src="funcions.js"> </script>-->
</head>
<body>
    <header id="barraSup">
        <div id="menu">
            <div style="order: 1; flex-grow: 1" id="cat">
                <label class="checkbox" for="check"> <img src="../media/menu.png" idth="40px" height="40px" alt="logo web"> </label>
            </div>
            <div style="order: 1; flex-grow: 1" id="logo">
                <a href="../old/index.html" >
                    <img src="../media/logo.png" alt="logo web">
                </a>
            </div>
            <div style="order: 1; flex-grow: 3" id="bar">
                <input type="text" placeholder="busca..."/>
                <img src="../media/lupa.png" alt="busca">
            </div>
            <div style="order: 1; flex-grow: 1" id="user">
                <img src="../media/user.png">
            </div>
            <div style="order: 1; flex-grow: 1" id="carro">
                <img src="../media/carro.png">
            </div>
        </div>

    </header>
  <section id="muestraportatiles">
      <?php include "controller/seccionportatiles.php"; ?>
  </section>

</body>
</html>