<?php

//echo $num1 = isset($_GET['n1']) ? $_GET['n1']:"";
$num1 = isset($_POST['n1']) ? $_POST['n1']:"";
$num2 = isset($_POST['n2']) ? $_POST['n2']:"";
$operador = isset($_POST['operador']) ? $_POST['operador']:"";

switch ($operador) {
    case '+':
        $respuesta = $num1 + $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '-':
        $respuesta = $num1 - $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '*':
        $respuesta = $num1 * $num2;
        echo "La respuesta de la operación es: " . $respuesta;
        break;
    case '/':
        if ($num2 == 0) {
            echo "No se puede dividir entre 0.";
        } else {
            $respuesta = $num1 / $num2;
            echo "La respuesta de la operación es: " . $respuesta;
            break;
        }
        break;
    default:
        echo $respuesta = "No existe esa condición.";
        break;
}

?>