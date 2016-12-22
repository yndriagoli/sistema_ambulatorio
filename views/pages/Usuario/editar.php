<?php  ?>
<html>
<head>
<meta charset="UTF-8" />
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/base.css">
  <link rel="stylesheet" type="text/css" href="../../css/form.css">
  <link rel="stylesheet" type="text/css" href="../../assets/fonts/OpenSans-Light.ttf">
  <link rel="stylesheet" type="text/css" href="../../assets/icons/font-awesome/css/font-awesome.css">
</head>

<body>  
<?php
 

include_once("../../../models/conectar.php");

	  
	$ci=$_POST["usuario"];
	$sql="SELECT *FROM usuario WHERE ci='$ci'";
	$select=pg_exec($sql);
	
	while($r=pg_fetch_array($select)) 
	{
	$ci=$r['ci'];
	$privi=$r['privi'];
	$esta=$r['esta'];
	$log=$r['log'];
	$clave=$r['clave'];
	$nom=$r['nom'];
	$ape=$r['ape'];
		
echo "
	<h3>Modificar datos de Usuario</h3>
<form method='POST' action='../../../controllers/usuario/modificar.php' class='contenedor-form' name='form1'>
<ul>
    <li>
  	  <label for='cedula'>Cédula:</label>
    	<input type='text' name='ci' id='ci' value='$ci'   onKeyPress='return solo_numeros(event)'  maxlength='9' minlength='8' autofocus autocomplete='off' required/>
    </li>

 	 <li>
		 <label for='privilegio'>Privilegio:</label>
 		<select name='privi' id='privi' size='1'>
	 		<option value='$privi'>$privi</option>
    		<option value='Administrador'>Administrador</option>
    		<option value='Operador'>Operador</option>
   		 </select>
 	 </li>

   	 <li>
   		<label for='estado'>Estado:</label>
  		<select name='esta' id='esta' size='1'>
		 <option value='$esta'>$esta</option>
   		 <option value='Activo'>Activo</option>
   		 <option value='Inactivo'>Inactivo</option>
   		 </select> 
  	 </li>
	
	 <li>
  		<label for='login'>Login</label>
		<input type='text' name='log' value='$log' id='log' onKeyPress='return solo_letras(event)'  maxlength='15' autocomplete='off' required/>
 	 </li>
  	
  	 <li>
  		<label for='login'>Nombre</label>
		<input type='text' name='nom' value='$nom' id='nom' onKeyPress='return solo_letras(event)'  maxlength='15' minlength='3' autocomplete='off' required/>
  	 </li>	
     <li>
     	<label for='login'>Apellido</label>
	    <input type='text' name='ape' value='$ape' id='ape' onKeyPress='return solo_letras(event)'  maxlength='15' minlength='3' autocomplete='off' required>
 	 </li>

  	<li>
    	<input type='submit' value='Guardar'>
	</li>

</ul>

	</form>";
	}
	
	
?>
	
<script type="text/javascript" src="../../js/validar.js"></script> 
 <script type="text/javascript" src="../../js/efectosForm.js"></script>

</body>

</html>
