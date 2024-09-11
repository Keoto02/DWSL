<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
    <?php
        include_once("./conf/conf.php");
        $id=isset($_GET['id']) ? $_GET['id' ]:"";
        $consultadev= "SELECT * FROM Client WHERE ClientID=".$id;
        $ejecutar= mysqli_query($con, $consultadev);
        while($row = mysqli_fetch_array($ejecutar)){
    ?>
    <form action="controles.php" method="POST">
        <div class="form-control">
            <input type="text" name="bandera" value="2" hidden>
            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
            <input class="form-control" type="text" name="nombre" value="<?php echo $row[1]; ?>"><br>
            <input class="form-control" type="text" name="telefono" value="<?php echo $row[2]; ?>"><br>
            <input class="form-control" type="text" name="dui" value="<?php echo $row[3]; ?>"><br>
            <input class="form-control" type="text" name="correo" value="<?php echo $row[4]; ?>"><br>
            <input class="form-control" type="text" name="direccion" value="<?php echo $row[5]; ?>"><br>
    <?php
        }
    ?>    
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>