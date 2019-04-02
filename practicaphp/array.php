<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>

	<?php 
	//ARRAYS 
	// Array de 7 elementos con el nombre de un día de la semana en cada uno de ellos:
	echo "<h2>Array Indexado</h2>";

	$aDias = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

	// Mostrar datos de un array Indexado:
	echo "El primer día de la semana es el: ".$aDias[1]."<br/>";
 

	// Array de 4 elementos con un número contenido en cada posición:
	$aNumeros = array(33, 12, 83, 55);
	echo "El segundo numero es el: ".$aNumeros[1]."<br/>";

    /***************************************/
	/* ********ARRAYS ASOCIATIVOS ******** */
	/***************************************/
		echo "<h2>ARRAYS ASOCIATIVOS</h2>";

		$aColores = array( "color1" => "rojo", "color2" => "verde", "color3" => "azul" );
		//PARA IMPRIMIR UTILIZAMOS LA CLAVE
		echo "Color 3: ".$aColores["color3"]."<br/>";
		
		//array con claves numericas y alfanumericas
		$aCosas = array( "color1" => "rojo", "importe" => 300, "activo" => true, 3 => 55 );

		echo "Activo: ".$aCosas["activo"]."<br/>";
		echo "3: ".$aCosas[3]."<br/>";

	/***************************************/
	/* ** ARRAYS MULTIDIMENCIONALES ******* */
	/***************************************/
	$colores = array(
		'frutas' => array('manzana' => 'roja', 'ciruela' => 'púrpura'),
		'flores' => array('rosa' => 'rosada', 'violeta' => 'azul')
	);

	echo "Una ciruela es ".$colores['frutas']['ciruela']." 
y una violeta es " .$colores['flores']['violeta'];

/***************************************/
echo("<br/>");
var_dump($aDias);
echo("<br/>");
print_r($aDias);
?>

</body>
</html>
