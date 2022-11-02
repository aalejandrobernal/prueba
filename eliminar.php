<?php

    include("cn.php");



    $id = $_GET['id'];



    $eliminar = "DELETE FROM vendedores WHERE id ='$id'";

    $resultadoEliminar=mysqli_query($conexion, $eliminar);



    if($resultadoEliminar){

        echo "<script>alert('REGISTRO ELIMINADO');window.location='tabla_ven.php';</script>";

    } else{

        echo "<script>alert('NO SE ELIMINO'); window.history.go(-1);</script>";

    }