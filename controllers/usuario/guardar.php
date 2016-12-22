<?php

include_once("../../models/conectar.php"); 

$ci=$_GET['ci'];
$privi=$_GET['privi'];
$esta='Activo';
$log=$_GET['log'];
$clave=MD5($_GET['clave']);
$nom=$_GET['nom']; 
$ape=$_GET['ape'];
$pre=$_GET['pre'];
$reps=$_GET['reps'];
date_default_timezone_set('America/Caracas');
$fecha_hoy=date("Y-m-d");
$hora_hoy=date("H:i:s");
$login=$_SESSION['usuario'];
$INSERTAR=pg_exec("INSERT INTO usuario (ci, privi, esta, log, clave, nom, ape, pre, reps)
VALUES ('$ci','$privi','$esta','$log','$clave','$nom','$ape','$pre','$reps')");

if (!$INSERTAR) { 
    print ("<script>alert('Los datos no pudieron ser almacenados');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../views/pages/admin.php">');

    }

else { 
  $bitacora=pg_exec("INSERT INTO bitacora (login,accion,fecha_a,hora) VALUES ('$login','Registro Usuario  $log','$fecha_hoy','$hora_hoy');");
    print ("<script>alert('Los datos fueron almacenados exitosamente');</script>");
    print('<meta http-equiv="refresh" content="0; URL=../../views/pages/admin.php">');
    
    }



?>