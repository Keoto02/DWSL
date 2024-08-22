<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY APP</title>
</head>
<body>
    <form action="proceso.php" method="POST">
        <label for="n1">Digite número 1</label>
        <br>
        <br>
        <input type="number" name="n1" id="">
        <br>
        <br>
        <select name="operador" id="">
            <option value="0">Seleccione</option>
            <option value="+">Sumar</option>
            <option value="-">Restar</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <br>
        <label for="n2">Digite número 2</label>
        <br>
        <br>
        <input type="number" name="n2" id="">
        <br>
        <br>

        <input type="submit" value="Calcular">

    </form>
</body>
</html>