<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/base_admin_operator.css"  >
    <link rel="stylesheet" type="text/css" href="../assets/icons/font-awesome/css/font-awesome.css">
  </head>
  <body>
    <header id="header-ad-op">
      <ul>
        <li>
          <a href="main.php"> <strong>ISM</strong> Sistema de gestión de inventario</a>
        </li>
        <li>
          <a href="../index.php"><i class="fa fa-sign-in"></i></a>
        </li>
      </ul>
    </header>
    <section id="menu-vertical">
<ul>
          <li class="item">
          <i class="fa fa-users"></i>
           <span>Gestionar usuario</span>
          <ul class="sub-menu" >
            <li >
              <i class="fa fa-user"></i>
              <a href="Usuario/regitrar.php">Registrar Usuario</a>
            </li>
            <li>
            <i class="fa fa-search"></i>
              <a href="Usuario/visualizar.php">Buscar Usuario</a>
            </li>
            <li>
            <i class="fa fa-unlock-alt"></i>
              <a href="">Cambiar Clave</a>
            </li>
          </ul>
        </li>
        <li class="item">
          <i class="fa fa-medkit"></i>
          <span>Gestionar Insumos</span>
          <ul class="sub-menu" >
            <li >
              <i class="fa fa-database"></i>
              <a href="">Registrar Insumos</a>
            </li>
            <li>
            <i class="fa fa-search"></i>
            <a href="">Buscar Insumos</a>
            </li>
          </ul>
        </li>
        <li class="item">
        <i class="fa fa-upload"></i>
        <span>Gestionar Despacho</span>
          <ul class="sub-menu">
            <li>
              <i class="fa fa-file-text-o"></i>
              <a href="">Ingresar Solicitud</a>
            </li>
            <li>
              <i class="fa fa-search"></i>
              <a href="">Buscar Solicitud</a>
            </li>
            <li>
            <i class="fa fa-check-square-o"></i>
              <a href="">Solicitudes Aprobadas</a>
            </li>
          </ul>
        </li>
        <li class="item">
        <i class="fa fa-table"></i>
        <span>Gestionar kardex</span>
          <ul class="sub-menu">
            <li>
              <i class="fa fa-search"></i>
              <a href="">Buscar Kardex</a>
            </li>
          </ul>
        </li>
        <li class="item">
        <i class="fa fa-file-text"></i>
         <span>Gestionar Reportes</span>
          <ul class="sub-menu">
            <li>
            <i class="fa fa-search"></i>
            <a href="">............</a>
            </li>
            <li>
            <i class="fa fa-search"></i>
            <a href="">............</a>
            </li>
            <li>
            <i class="fa fa-search"></i>
            <a href="">............</a>
            </li>
          </ul>
        </li>
        <li>
        <i class="fa fa-bar-chart-o"></i>
        <span>Gestionar Graficos</span>
          <ul>
            <li>
              <i class="fa fa-search"></i>
              <a href="">......</a>
            </li>
            <li>
              <i class="fa fa-search"></i>
              <a href="">......</a>
            </li>
            <li>
             <i class="fa fa-search"></i>
              <a href="">......</a>
            </li>
          </ul>
        </li>
        <li>
        <i class="fa fa-cogs"></i>
        <span>Ayuda</span>
          <ul>
            <li>
              <i class="fa fa-wrench"></i>
              <a href="">Soporte Tecnico</a>
            </li>
            <li>
              <i class="fa fa-book"></i>
              <a href="">Manual</a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <section id="contenedor">

    </section>
    <script src="../js/efectosMenuBotones.js"></script>
  </body>
</html>
