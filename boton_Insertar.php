<?php
    
    include("cn.php");


    

    $marca = $_POST['marca'];
    
    
   

    
    $insert = "INSERT INTO marca(marca)VALUES('$marca')";
    $resu = mysqli_query($conexion, $insert);


    if($resu){
        echo "<script>alert('REGISTRO INGRESADO CON EXITO');window.location='vehiculos.php';</script>";
    } else{
        echo "<script>alert('REGISTRO NO INGRESADO :('); window.history.go(-1);</script>";
    }