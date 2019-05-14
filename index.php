<?php

$faltadinero = 0;

if($faltadinero == 1) {

    echo('Tu dinero introducido no es suficiente para hacer la compra');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/indexcafe.css">
</head>
<!-- Header con LOGO-->
<header>

<h1>
<img src="img/logocafe.jpg" alt="">
</h1>

<h1>
MAQUINA CAFE
</h1>

</header>

<body>

<!-- FORM a ticketcafe.php-->

<form action="php/datoscafe.php" method="post">

<section>
    <article>
    
    <!-- select dinero-->


    <select name="dinero" id="">
    <option value="">
    </option>
    <option value="0.2">
    0.2€
    </option>
    <option value="0.5">
    0.5€
    </option>
    <option value="0.10">
    0.10€
    </option>
    <option value="0.20">
    0.20€
    </option>
    <option value="0.50">
    0.50€
    </option>
    <option value="1">
    1€
    </option>
    <option value="2">
    2€
    </option>
    <option value="5">
    5€
    </option>
    <option value="10">
    10€
    </option>
    <option value="20">
    20€
    </option>
    <option value="30">
    30€
    </option>
    <option value="40">
    40€
    </option>
    </select>

<!-- select productos-->

    <select name="productos" id="">
    <option value="">
    </option>
    <option value="cafe solo">
    Cafe Solo
    </option>
    <option value="capuccino">
    Capuccino
    </option>
    <option value="cafe con leche">
    Cafe con leche
    </option>
    <option value="cafe americano">
    Cafe americano
    </option>
    </select>
    
    </article>

    </article>

    <!-- Botones-->

<button type="submit">
COMPRAR
</button>
<button type="reset">
BORRAR
</button>


</section>

</form>
    
</body>
</html>



