<?php
session_start();
echo "El nombre del usuario creado en sesiones.php es: ".$_SESSION['nombre'];

//Eliminamos una variable de sesión concreta
    // unset($_SESSION['nombre']);
//Eliminamos todas las variables de sesión.
   // session_destroy();

 ?>