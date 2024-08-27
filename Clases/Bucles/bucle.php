<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center">Generador de Tablas de Multiplicar</h3>

                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="numero" class="form-label">Ingresa un número:</label>
                            <input type="number" name="numero" id="numero" min="1" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Mostrar Tabla</button>
                        </div>
                    </form>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $numero = $_POST['numero']; 

                        echo "<h4 class='mt-4'>Tabla de multiplicar del $numero</h4>";
                        echo "<ul class='list-group'>";

                        for ($i = 1; $i <= 10; $i++) {
                            $resultado = $numero * $i;
                            echo "<li class='list-group-item'>$numero x $i = $resultado</li>";
                        }

                        echo "</ul>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
