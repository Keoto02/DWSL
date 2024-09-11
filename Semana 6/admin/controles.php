<?php
    include_once("../conf/conf.php");

    $opcion = isset( $_POST['bandera'] ) ? $_POST['bandera'] :"";
    $opciond = isset( $_GET['opcion'] ) ? $_GET['opcion'] :"";
    $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] :"";
    $tel = isset( $_POST['telefono'] ) ? $_POST['telefono'] :"";
    $dui = isset( $_POST['dui'] ) ? $_POST['dui'] :"";
    $correo = isset( $_POST['correo'] ) ? $_POST['correo'] :"";
    $direccion = isset( $_POST['direccion'] ) ? $_POST['direccion'] :"";
    $id = isset( $_POST["id"] ) ? $_POST["id"] :"";
    $idD = isset( $_GET["id"] ) ? $_GET["id"] :"";

    if( $opcion == 1){
        $consulta = "INSERT INTO Client (ClientID, Name, Tel, DUI, Mail, Address)
        VALUES (NULL, '$nombre', $tel, $dui, '$correo', '$direccion');";
    
     $ejecutar = mysqli_query($con, $consulta);
     if($ejecutar){
        header("Location: index.php");
     }
    }elseif( $opcion == 2){
        $consulta = "UPDATE Client SET Name = '$nombre', Tel = $tel, DUI = $dui, Mail = '$correo', Address = '$direccion' 
        WHERE ClientID = $id;";

        $ejecutar = mysqli_query($con, $consulta);

        if($ejecutar){
           header("Location: index.php");
        }
    }elseif( $opciond == 3){
        $consulta = "DELETE FROM Client WHERE ClientID = $idD;";
        
        $ejecutar = mysqli_query($con, $consulta);

        if($ejecutar){
           header("Location: index.php");
        }else{ 
            echo "Error en la consulta";
        }
    }
    
    $con -> close();
?>