<html>
<head> 
  <meta charset="utf-8">
  <title>SIG</title> 
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/base.css">

</head>  
<body>
<form method="get" action="../../../controllers/usuario/guardar.php" id="form-login" >
<br/>

<ul>
    <li>
    <label for="ci">Cédula:</label>
    <input type="text" name="ci" id="ci" required="" />
    </li>
  
  <li>
    <label for="nom">Nombre:</label>
  <input type="text" name="nom" id=nom required="" />
  </li>
  
   <li>
    <label for="ape">Apellido:</label>
  <input type="text" name="ape" id="ape" required="" />
  </li>
  
  <li>
  <select name="privi" id="privi" size="1">
    <option id="hidden-privi" value="0">Privilegio</option>
    <option value="Administrador">Administrador</option>
    <option value="Operador">Operador</option>
    </select>
  </li>
  
  <li>
  <label for="log">Login:</label>
  <input type="text" name="log" id="log" autocomplete="off" required/>
  </li>
   <li>
   <label for="login">Clave:</label>
   <input type="password" name="clave" id="clave" required/>
   </li>
   <li> 
   <label for="login">Confirme Clave:</label>
   <input type="password" name="clave2" id="clave2" required/>
   </li>
    <li>
  <label for="preg">Pregunta Secreta:</label> 
  <select name="preg" id="preg" size="1">
          <option> </option>
                        <option value="Color favorito">Color favorito</option>
                        <option value="Lugar de nacimiento de la madre">Lugar de nacimiento de la madre</option>
                        <option value="Primera mascota">Primera mascota</option>
                        <option value="Canción preferida">Canción preferida</option>
                        <option value="Equipo deportivo preferido">Equipo deportivo preferido</option>
                        <option value="Marca preferida de Ropa">Marca preferida de Ropa</option>
                    <option value="Nombre del abuelo/a">Nombre del abuelo/a</option>
        </select>
  </li>
    <li>
   <label for="login">Respuesta Secreta:</label>
   <input type="txt" name="reps" id="reps" required/>
   </li>
   <li>
    <button class="submit" type="submit">Guardar</button>
   
</li>
  
</ul>
</form>
</body>

</html>