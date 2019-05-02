<?php 
 require  '../conexion/conexion.php';

 $id= $_GET['id'];

 $sql = "DELETE FROM usuarios WHERE id = '$id'";
 $query = $connection->prepare($sql);
           // $query->execute();

 try {
    $query->execute();
    echo "<script>
    alert('Registro Eliminado Correctamente');
    window.location = 'usuarios.php';
    </script>"
    ;
        
     //$mensaje = '<p class="alert alert-success">Usuario Eliminado</p>';

    } catch (PDOException $e) {
        $mensaje = '<p class="alert alert-warning">Error al eliminar Usuario '. $e->getMessage() .' </p>';       
    }
   // echo($mensaje);
?>