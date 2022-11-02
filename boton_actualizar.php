<?php
    
    include("cn.php");
   

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    

    

    $actualizar = "UPDATE vendedores SET ID='$id',nombre='$nombre',telefono='$telefono',direccion='$direccion' WHERE id='$id'";
    $resultado=mysqli_query($conexion, $actualizar);

    

    if($resultado){
        echo "<script>confirm('REGISTRO ACTUALIZADO CON EXITO');window.location='tabla_ven.php';</script>";
    } else{
        echo "<script>alert('REGISTRO NO ACTUALIZADO :('); window.history.go(-1);</script>";
    }
