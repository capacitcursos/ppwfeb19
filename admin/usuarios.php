<?php 
  require '../conexion/conexion.php';

  $sql = "SELECT * FROM usuarios";    //creamos consulta sql
  $query = $connection->prepare($sql);//preparamos la consulta sql
  $query->execute();                  //ejecutamos la consulta sql

  $result= $query->fetchAll();      /* Almacenamos todas las filas obtenidas 
                                       de la base de datos en la variable $result
                                    */   

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
    ?>  

  <!-- INICIO DE CONTENIDO  -->
  <div class="content-wrapper">
    
    <!-- ENCABEZADO DE CONTENIDO -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active">Listado de Usuarios</li>
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
                <h5 class="m-0">Registros</h5>

                <a  class="btn btn-success" href="usuarios-add.php"> Agregar Usuario</a>
              </div>
              
              <div class="card-body">                
                <!-- CONTENIDO -->

                <!-- Inicio de Tabla de Datos en HTML -->
                <table class="table table-bordered table-striped">
                  
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Acciones</th>
                    </tr>
                    
                  </thead>

                  <tbody>
                    <?php   
                    foreach ($result as $fila) {  ?>                
                    
                    <tr>
                      <td><?php  echo $fila['id'] ?></td>
                      <td><?php  echo $fila['nombre'] ?></td>
                      <td><?php  echo $fila['email'] ?></td>
                      <td>
                        <a href="usuarios-delet.php" class="btn btn-danger"> <i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar </a>

                         <a href="usuarios-update.php" class="btn btn-warning "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar</a>
                      </td>
                    </tr>

                    <?php }  ?>

                  </tbody>

                </table>
                <!-- //Fin de Tabla de Datos en HTML -->              

                  
                ?>
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
