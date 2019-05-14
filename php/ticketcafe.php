
<?php


include_once('funcionescafe.php');
include_once('datoscafe.php');

//**********



// encabezado

echo('<pre>');
echo('<hr>' . '$cafes = ');
print_r($cafes);
//var_dump($cafes);

echo('</pre>');

//No era tan importante porque es fijo no dinamico



// ****************
// Lista de productos con sus precios y su total. Que es lo que nos interesa

// Hacemos echos con pre(para quenos salga con intros, espacios, mas organizados). Porque nos interesa que salga la supervariable $_REQUEST(te crea un  array automaticamente con la informacion ydatos que nos envian de otro lado).

//Entonces cuando las personas envien la informacion, esta informacion se va a poner en un array organizado con los datos enviados. Nos permite visualizar el envio mejor.

echo('<pre>');
print_r($_REQUEST);
// Podemos llmar con $request todos los input que hemos creado con la informacion intriducida anteriormente
// print_r($_REQUEST['unidad00']);
echo('</pre>');


echo('<br>');

// Llamamos a el array de datoscafe.php en donde con REQUEST entre la informacion enviada al array para que este identifique cual es el producto y nos elecciones el valor, en este caso los precios

echo($cafes[$_REQUEST['productos']]);




    // Dinero pagado

    $dinerointroducido = $_REQUEST['dinero'];

    // Nombre producto

    $producto = $_REQUEST['productos'];

    // Valor producto

$valorproducto = $cafes[$_REQUEST['productos']];
    
//Desgloce

 

?>


