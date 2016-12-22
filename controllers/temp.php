<?php

session_start();
if (!isset($_SESSION['usuario']))
    header("../views/pages/admin.php");
    
$login=$_SESSION['usuario'];


?>