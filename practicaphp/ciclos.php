<!DOCTYPE html>
<html>
<head>
	<title>Ciclos/Bucles</title>
</head>
<body>

<?php 
   /*
    Ciclo o Bucle:
    Es una secuencia que ejecuta repetidas veces un trozo de código, hasta que la condición asignada a dicho bucle deja de cumplirse. 
   */
    echo "Ciclo While <br/>";
    
    $x = 1;
    while ( $x <= 10) {
    	echo "el numero es: ".$x."<br/>";
    	$x++;
    }

   echo "Ciclo do While <br/>";
   $x = 1;
    do {
        echo "el numero es: ".$x."<br/>";
        $x++;
    } while ($x <= 10);


    //CICLO FOR
    echo "<h2>CICLO FOR</h2>";

    for ($i=0; $i < 10; $i++) { 
        echo "el numero es: ".$i."<br/>";
    }

    //FOREACH
    echo "<h2>FOREACH</h2>";
    $personas = array('Juan', 'Luis', 'Maria', 'Jose', 'Bernardo','Julio');

    foreach ($personas as $fila) {
        echo "El nombre de la persona es: ".$fila."<br>" ;
    }

 ?>

</body>
</html>