
<!DOCTYPE html>
<html>
<head>
	<title>
		Condicionales
	</title>
</head>
<body>
	<?php //CONDICIONALES
	echo "<h1>CONDICIONALES EN PHP</h1> 
	<br> <h2>Conficional If</h2>" ;

	$edad= 18;
	
	if ($edad <= 18) {
		echo "Es menor de Edad";
		}

   echo "<h2> Condicional if.. else.. </h2>";
   
   $hora=12.5;
   
   if ($hora < 12) {
   	   echo "Buen Dia";
   } else {
   	   echo "Buenas tardes";
   }

   echo "<h2> Condicional if.. else if.. else.. </h2>";

	   if ($hora < 12) { 
			echo "La hora es menor a 12";
		} else if ($hora >= 12 && $hora <= 13 ){
			echo "Medio dia";
	    } else {
     		echo "La Hora es mayor a 13";
		}

    echo "<h2> Condicional switch </h2>";
        
        $accion= "g";

	    switch ($accion) {
	    	case 'guardar':
	    		echo "El usuario eligio GUARDAR";
	    		break;
	        case 'modificar':
	    		echo "El usuario eligio MODIFICAR";
	    		break;
	    	
	    	case 'eliminar':
	    		echo "El usuario eligio ELIMINAR";
	    		break;

	    	default:
	    		echo "El usuario no realizo ninguna accion";
	    		break;
	    }
   

	?>
</body>
</html>