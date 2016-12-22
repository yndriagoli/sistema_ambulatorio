<?php
$ci=$_POST["ci"];
$privi=$_POST["privi"]; 
$esta=$_POST["esta"];
$log=$_POST["log"]; 
$nom=$_POST['nom'];
$ape=$_POST['ape'];
include_once("../../models/conectar.php");
$busca="UPDATE usuario SET privi='$privi', esta='$esta', log='$log' , nom='$nom' , ape='$ape' WHERE ci='$ci'";
$ejecuta=pg_query($busca);
date_default_timezone_set('America/Caracas');


	            $fecha_hoy=date("Y-m-d");
        $hora_hoy=date("H:i:s");

			if($ejecuta) 
			{
				        $bitacora=pg_exec("INSERT INTO bitacora (login,accion,fecha_a,hora) VALUES ('$login','Modifico Usuario $login1','$fecha_hoy','$hora_hoy');");

				echo "<script>alert('Usuario modificado exitosamente')</script>";
					echo "<script>window.location='../../views/pages/admin.php'</script>";
				}
			else 
		{ 
	echo"<script>alert('Error al modificar usuario')</script>";
echo "<script>window.location='../../views/pages/Usuario/editar.php'</script>";
}
?>
