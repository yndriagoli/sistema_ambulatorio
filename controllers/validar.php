<?php

include("../models/conectar.php");

    $log=$_POST['log'];
    $clave=MD5($_POST['clave']);

    $sql="SELECT * FROM usuario WHERE log='$log' and clave='$clave'";
    $resultado = pg_exec($sql);

    $cant = pg_num_rows($resultado);

    if($cant > 0){
        
        $fecha_hoy=date("Y-m-d");
        $hora_hoy=date("H:i:s");
        $bitacora=pg_exec("INSERT INTO bitacora (login,accion,fecha_a,hora) VALUES ('$login','Inicio sesión','$fecha_hoy','$hora_hoy');");


        session_start();
        $_SESSION['usuario']=$login;
        $_SESSION['tiempo']=time();
        
        
        $slq2="SELECT privilegio as tipo, estado as estado FROM usuario WHERE login='$login' and clave='$clave'";
        $resultado2=pg_exec($slq2);
        $encontrad=pg_num_rows($resultado2);
        $resultusera=pg_fetch_array($resultado2);
        
        $tipo=$resultusera['tipo'];
        $estado=$resultusera['estado'];
        
        if ($estado=='Inactivo') {
        echo "<script>alert('Usted e encuentra temporalmente inactivo')</script>";
        echo "<script>location.href = '../views/index.php';</script>";
        }
       
       
        elseif ($privi=='Administrador') {
        header("location:../views/pages/admin.php");
        }
        
        
        
        else {
        header("location:../views/pages/admin.php");
        }
        
        }
        
    else
    {
        echo "<script>alert('Los datos son ncorrectos, intente nuevamente!')</script>";
        echo "<script>location.href = '../views/index.php';</script>";
    }
?>
