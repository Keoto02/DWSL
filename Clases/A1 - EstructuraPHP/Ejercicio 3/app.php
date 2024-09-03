<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTAL DE ESTUDIANTES</title>
</head>
<body>
    <form action="app.php" method="POST">
        <table>
            <tr>
                <th>MATEMATICAS</th>
                <th>LENGUAJE</th>
                <th>CIENCIAS</th>
                <th>SOCIALES</th>
                <th>MORAL</th>
            </tr>
            <tr>
            <td><input type="number" name="Matematicas" value="<?php echo isset($_POST['Matematicas']) ? $_POST['Matematicas'] : ''; ?>"></td>
                <td><input type="number" name="Lenguaje" value="<?php echo isset($_POST['Lenguaje']) ? $_POST['Lenguaje'] : ''; ?>"></td>
                <td><input type="number" name="Ciencias" value="<?php echo isset($_POST['Ciencias']) ? $_POST['Ciencias'] : ''; ?>"></td>
                <td><input type="number" name="Sociales" value="<?php echo isset($_POST['Sociales']) ? $_POST['Sociales'] : ''; ?>"></td>
                <td><input type="number" name="Moral" value="<?php echo isset($_POST['Moral']) ? $_POST['Moral'] : ''; ?>"></td>
            </tr>
        </table>
        <input type="submit" value="Promediar">
        <input type="reset" value="Promediar uno nuevo" onclick="location.href='app.php';">
    </form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Matematicas = isset($_POST['Matematicas']) ? $_POST['Matematicas']:"";
    $Lenguaje = isset($_POST['Lenguaje']) ? $_POST['Lenguaje']:"";
    $Ciencias = isset($_POST['Ciencias']) ? $_POST['Ciencias']:"";
    $Sociales = isset($_POST['Sociales']) ? $_POST['Sociales']:"";
    $Moral = isset($_POST['Moral']) ? $_POST['Moral']:"";

    $promedio = ($Matematicas + $Lenguaje + $Ciencias + $Sociales + $Moral) / 5;
    echo "EL PROMEDIO DEL ESTUDIANTE ES: " .$promedio;
}

?>