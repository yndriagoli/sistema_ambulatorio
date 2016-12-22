<html> 
<head> 
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="../../css/base.css">
<link rel="stylesheet" type="text/css" href="../../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../../assets/icons/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../../css/tabla.css">
</head>

<body>
<?php
include_once("../../../models/conectar.php");

$BUSCAR="SELECT * FROM usuario ";
$EJECUTAR=pg_exec($BUSCAR);
$LOCALIZAR=pg_num_rows($EJECUTAR);
if($LOCALIZAR>0) {
          


echo '


<br/>

<center>

<table>
<h1>Buscar Usuario</h1>
<br/>
<tr class="encabezado">
  
    <td id="cedula">Cédula</td>
    <td id="login">Login</td>
    <td id="privilegio">Privilegio</td>
    <td id="estado">Estado</td>
    <td id="nombre">Nombre</td>
    <td id="apellido">Apellido</td>
    <td id="opcion"> Opcion</td>
</tr>

<tbody>';
 
while($ATRIBUTO=pg_fetch_array($EJECUTAR))
 {

    echo '<tr id="filas-datos">
        <td class="cedula">'.$ATRIBUTO['ci'].'</td>
        <td class="login">'.$ATRIBUTO['log'].'</td>
        <td class="privilegio">'.$ATRIBUTO['privi'].'</td>
        <td class="estado">'.$ATRIBUTO['esta'].'</td>
        <td class="nombre">'.$ATRIBUTO['nom'].'</td>
        <td class="apellido">'.$ATRIBUTO['ape'].'</td>';
    echo "       
         <td>
            <form action='editar.php' method='POST'>
                 <input type='hidden' name='usuario' value='".$ATRIBUTO["ci"]."'>
                 <button class='fa fa-pencil' type='submit'></button>
            </form>
        </td>
        </tr>";

} 

echo '   
</tbody>

</table>

</center>';
}

elseif ($LOCALIZAR==0) {

    echo "<center><br>El registro se encuantra vacio</center>";
}

else {
    echo "<center><br>Ocurrio un error al intentar visualizar los datos</center>";
}

?>
<script type="text/javascript" src="../../js/efectosTabla.js"></script>
</body>
</html>