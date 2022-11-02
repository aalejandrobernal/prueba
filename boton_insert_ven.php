<?php
   
    include("cn.php");
    


    $id = $_POST['ID'];
    $nombre = $_POST['NOMBRE'];
    $telefono = $_POST['TELEFONO'];
    $direccion = $_POST['DIRECCION'];
   
    $insert = "INSERT INTO vendedores(ID,NOMBRE,TELEFONO,DIRECCION)
    VALUES('$id','$nombre','$telefono','$direccion')";
    $resu = mysqli_query($conexion, $insert);


    if($resu){
        echo "<script>alert('REGISTRO INGRESADO CON EXITO');window.location='tabla_ven.php';</script>";
    } else{
        echo "<script>alert('REGISTRO NO INGRESADO :('); window.history.go(-1);</script>";
    }