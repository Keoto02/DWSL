<?php

$server = "localhost";
$pass = "1234";
$user = "root";
$db = "dbClientes";

$con = mysqli_connect($server, $user, $pass, $db);
if ($con) {
    echo"Conexión realizada";
}
else {
    echo "Error de conexión";
}

function validar($nombre, $pwd){
    echo "hello world";
}

?>