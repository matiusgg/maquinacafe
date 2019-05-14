<?php




$cafes = [

    'cafe solo' => 0.8,
    'capuccino' => 1.3,
    'cafe con leche' => 2,
    'cafe americano' => 1
];

// $cafes[$_POST['productos']];



// Condicion para saber si hay datos en los select's


if((isset($_REQUEST['productos']) !="") && isset($_REQUEST['dinero']) !="") {

    // Verificacion si loss datos fueron enviados

echo('<pre>');
print_r($_REQUEST);
echo('</pre>');





    // Dinero pagado

    $dinerointroducido = $_REQUEST['dinero'];

    // Nombre producto

    $producto = $_REQUEST['productos'];

    // Valor producto

$valorproducto = $cafes[$_REQUEST['productos']];
    

        // Condicion si el dinero pagado es igual o mayor que el valor del producto, y el nombre producto es igual al introducido.
    
     //if(($valorproducto >= $dinerointroducido)){

        // Para que nos diriga a
       // header('location: ticketcafe.php');
        
    // Condicion si pagamos menos que el valor del producto


    // }else if($dinerointroducido < $valorproducto){

        // Si el dinero no es sufiente, que nos vuelva a dirigir a index
       // header('location: ../index.php');
       // $faltadinero = 1;
        
    
       
}
}


// Si todo lo anterior no se cumplio pues con un echo indicamos que el dato introducido con el array no coincide,
// pero como vemos esta dentro del if principal porque todo esto esta condicionado tambien por el if principal


// NOTA IMPORTANTE: HAY QUE DIFERENCIAR MUY BIEN QUE FORM NO ES LO MISMO QUE INCLUDE

// FORM, LO QUE TE PERMITE ES ENVIAR LA INFORMACION MAS NO EL CODIGO DE ESE ARCHIVO A OTRO ARCHIVO, MIENTRAS
// INCLUDE ES COMO SI COPIA Y PEGA DE UN ARCHIVO, MAS ESTO NO SIGNIFICA QUE EL FORM DE ARHIVO1 FUE ENVIADO A ARCHIVO2, Y SI PONEMOS UN INCLUDE DEL ARCHIVO2 EN ARCHIVO3, NO SIGNIFICA QUE EL FORM DEL ARCHIVO 1 IRIA AL ARCHIVO3, NO FUNCIONA ASI PORQUE EL FORM SOLO CUPLE SU FUNCION DE ENVIAR A UN ARCHIVO ESPECIFICO NO VA DE IR 'SALTANDO' ENTRE LOS ARCHIVOS CON INCLUDE. POR LO CUAL ESMEJOR QUE EL FORM DE UN INDEX VAYA DIRECTAMENTE AL ARCHIVO QUE QUEREMOS LA INFORMCION PARA QUE LOS DEMAS ARCHIVOS HAGAN SU FUNCION.


?>