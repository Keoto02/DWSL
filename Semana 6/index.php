<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
<body>
    <form action="index.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
    <?php
        echo isset($error);
    ?>
</body>
</html>

<?php
    include_once "./conf/conf.php";

    if($_SERVER['REQUEST_METHOD' ] == 'POST'){
        $usuario=isset($_POST['usuario'])? $_POST['usuario']:"";
        $pwd= isset($_POST['pwd'])? $_POST['pwd']:"";
        $consulta ="SELECT nombre, username, pwd FROM usuario WHERE username='".$usuario."' && pwd='".md5($pwd)."'";
        $ejecutar= mysqli_query($con, $consulta);
        if($ejecutar->num_rows == 1 ){
            session_start();
            while($user = mysqli_fetch_assoc($ejecutar)) {
                $_SESSION["usuario"] = $user['nombre'];
            }
            header('Location: ./admin/index.php');
        }else{
            $error ="Error en el inicio de sesión";
        }
}
?>