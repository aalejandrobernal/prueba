<?php
   
    include("cn.php");
   

    $id = $_POST['ID'];
    $matricula = $_POST['MATRICULA'];
    $valor = $_POST['VALOR'];
   
    $insert = "INSERT INTO ventas(ID,MATRICULA,VALOR,)
    VALUES('$id','$matricula','$valor')";
    $resu = mysqli_query($conexion, $insert);


    if($resu){
        echo "<script>alert('REGISTRO INGRESADO CON EXITO');window.location='vehiculos.php';</script>";
    } else{
        echo "<script>alert('REGISTRO NO INGRESADO :('); window.history.go(-1);</script>";
    }