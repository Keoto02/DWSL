<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista de Clientes</title>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-primary">Listado de clientes</h2>
            <a href="add.php" class="btn btn-success">Nuevo registro</a>
        </div>

        <?php
            include ("./conf/conf.php");
            $XObject = new Connection();
            $XConnect = $XObject->Connect();
            $query = "SELECT * FROM client";
            $prepare = $XConnect->prepare($query);  
            $prepare->execute();
            $clients = $prepare->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>DUI</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $Client): ?>
                    <tr>
                        <td><?php echo $Client['id']; ?></td>
                        <td><?php echo $Client['nombre']; ?></td>
                        <td><?php echo $Client['tel']; ?></td>
                        <td><?php echo $Client['dui']; ?></td>
                        <td><?php echo $Client['correo']; ?></td>
                        <td><?php echo $Client['direccion']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $Client['id']; ?>" class="btn btn-warning btn-sm">Modificar</a>
                            <a href="process.php?id=<?php echo $Client['id']; ?>&delFlag=3" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+8Y1WmOUqcVvfYs7ZZrhT2lBgfbK5" crossorigin="anonymous"></script>
</body>
</html>
