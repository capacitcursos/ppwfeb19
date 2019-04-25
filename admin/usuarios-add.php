<?php 
session_start();
if(!isset($_SESSION['logueado']) ){
 header('Location: login.php');
} 

require '../conexion/conexion.php';
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini">

<div class="wrapper">

   <?php 
      include 'includes/nav.php';
      include 'includes/aside.php';

      if (isset($_POST)) {
      	
      	
      	if ($_POST['nombre'] != '' && $_POST['password'] != '') {
      		
      		//definimos la variable sql para insertar los datos
      		$sql ="INSERT INTO usuarios(nombre, email, password, avatar, activo, fecha_add) VALUES (:nombre, :email, :password, :avatar, :activo, NOW())";

      		//DEFINIMOS una variable $data con los valores para la consulta sql
      		$data = array(
      			'nombre' => $_POST['nombre'],
      			'email' => $_POST['email'],
      			'password' => $_POST['password'],
      			'avatar' => $_POST['avatar'],
      			'activo' => $_POST['activo']

      		); 
      	     
      	     //PREPARAMOS la conexion
      		 $query = $connection->prepare($sql);
      		 if ($query->execute($data)) {
      		      	
      		      	$mensaje = '<p class="alert alert-success">Registro guardado correctamente :)</p>';

      		  		} else {
      		  	     
      		  	    $mensaje = '<p class="alert alert-danger">Ocurrio un error al guardar</p>';
      		  }     

      	}
      
      }


    ?>  

  <!-- INICIO DE CONTENIDO  -->
  <div class="content-wrapper">
    
    <!-- ENCABEZADO DE CONTENIDO -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agregar Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="usuarios.php">Usuarios</a></li>
              <li class="breadcrumb-item active">Add Usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.FIN DE ENCABEZADO DE CONTENIDO -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Formulario de Registro</h5>
              </div>
              <div class="card-body">
              	<?php if (isset($mensaje)): ?>
              		<?php echo $mensaje ?>
              	<?php endif ?>
                
                <!-- CONTENIDO -->
                <form action="" method="POST" class="form-control">                	
                	<!-- campo nombre -->
                	<label>Nombre del Usuario</label>
                	<input type="text" name="nombre" class="form-control" required>

                	<!-- campo email -->
                	<label>Email</label>
                	<input type="email" name="email" class="form-control" required>

                	<!-- campo Contraseña -->
                	<label>Contraseña</label>
                	<input type="password" name="password" class="form-control" required>

                	<!-- campo Avatar -->
                	<label>Avatar</label>
                	<input type="text" name="avatar" class="form-control" required>

                	<!-- campo Activo -->
                	<label>Activo</label>
                	<select class="form-control" name="activo">
                		<option value="1">SI</option>
                		<option value="0">NO</option>                		
                	</select>

                	<br><!-- Boton de Envio -->
                	<input type="submit" name="enviar" value="Guardar Registro" class="btn btn-success">
                	
                </form>


              </div>
            </div>

            

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>informacion</h5>
      <p>Contenido Informativo</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <?php
  include 'includes/footer.php'; 
   ?>
</body>
</html>
