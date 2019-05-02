<?php 
  // print_r($_POST); 
  //var_dump($_POST);
  session_start();
  
  require('../conexion/conexion.php');

  if (isset($_POST['Enviar'])) {
      
      if($_POST['email'] != '' && $_POST['password'] != ''){

        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
         $query = $connection->prepare($sql);
         $query->execute();
         
         //si devuelve mas de 0 filas
         if ($query->rowCount() > 0) {
          //almacenamos todas las filas en la variable usuario
           $usuarios = $query->fetchAll();
           
           //recorremos la variable usuarios
           foreach ($usuarios as $fila) {
             //almacenamos los datos del usuario en variables de session
             $_SESSION['logueado'] = 'logueado';

             $_SESSION['usuario_id'] = $fila['id'];
             $_SESSION['usuario'] = $fila['nombre'];
             $_SESSION['avatar'] = $fila['avatar'];
             //redireccionamos a la pagina principal
             header('Location: index.php');
           }
         } else{
            $mensaje = '<p class="alert alert-danger">Los Datos son incorrectos! :( </p>';
         }

        //echo("Email: ".$_POST['email']);
        //echo("Password: ".$_POST['password']);


      }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <?php if(isset($mensaje)) { 
            
            if($mensaje != '') { 
               echo $mensaje;
               $mensaje = ''; 
              }

      } ?> 

    <a href="index.php"><b>Admin</b>Capacit</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Complete tus datos para iniciar sesión</p>

      <form action="" method="post">
        
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>

        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="row">
          
          <!-- /.col -->
          <div class="col-6">
            <input type="submit" class="btn btn-primary btn-block btn-flat" name="Enviar" value="Iniciar Sesion">
          </div>
          <!-- /.col -->
        </div>
      </form>   
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
