<?php
    include_once ("./conf/conf.php");
    $objeto = new Connection();

    $XConnect = $objeto->Connect();

    $opcion = isset($_POST["bandera"]) ? $_POST["bandera"] :"";
    $nombre = isset($_POST["nombre"]) ? $_POST["Name"] :"";
    $tel = isset($_POST["telefono"]) ? $_POST["telefono"] :"";
    $dui = isset($_POST["dui"]) ? $_POST["dui"] :"";
    $correo = isset($_POST["correo"]) ? $_POST["correo"] :"";
    $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] :"";
    $banderaO = 0;
    $banderaO = isset($_GET["banderaO"]) ? $_GET["banderaO"] :"";

    if($opcion == 1){
        $query = "INSERT INTO cliente (id, nombre, tel, dui, correo, direccion)
                 VALUES (NULL, :nombre, :tel, :dui, :correo, :direcion)";
        $result= $XConnect->prepare($query);
        $result->bindParam(':nombre', $nombre); $result->bindParam(':tel', $tel);
        $result->bindParam(':dui', $dui); $result->bindParam(':correo', $correo);
        $result->bindParam(':direccion', $direccion);

        if($result->execute()){
            header('Location: index.php');
        }else{
            echo'Error';
        }
    }else if($opcion == 2){
        
        $ID = isset($_POST["id"]) ? $_POST["id"] :"";
        $query = "UPDATE cliente SET nombre = :nombre, tel = :tel, dui = :dui, correo = :correo, direccion = :direccion WHERE id = :id";
        $result= $XConnect->prepare($query);
        $result->bindParam(':nombre', $nombre); $result->bindParam(':tel', $tel);
        $result->bindParam(':dui', $dui); $result->bindParam(':correo', $correo);
        $result->bindParam(':direccion', $direccion); $result->bindParam(':ID', $ID);

        if($result->execute()){
        header('Location: index.php');
        }else{
        echo'Error';
        }
    }else if($opcion == 3){
        $delID = isset($_GET["id"]) ? $_GET["id"] :"";
        $query = "DELETE FROM cliente WHERE id = :id";
        $result= $XConnect->prepare($query);
        $result->bindParam(':id', $delID);
        
        if($result->execute()){
            header('Location: index.php');
        }else{
            echo'Error';
        }
    }else{
        echo 'Por si acaso';
    }
?>
