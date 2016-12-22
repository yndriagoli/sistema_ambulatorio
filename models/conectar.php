<?php
    $host='localhost';
    $port='5432';
    $user='postgres';
    $password='2297175';
    $bdname='ambulatorio';

    class conectar
        {
        private $host;
        private $port;
        private $user;
        private $password;
        private $bdname;

        public function __construct($h,$p,$u,$pa,$bd)
        {
        $this->host=$h;
        $this->port=$p;
        $this->user=$u;
        $this->password=$pa;
        $this->bdname=$bd;
        }

        public function conectar()
        {
        $cadena = "host='$this->host' port='$this->port' dbname='$this->bdname' user='$this->user' password='$this->password'";
        $this->conec= pg_connect ($cadena)or die("Error de conexion".pg_last_error());
        //echo "conexion exitosa";
        $con=$this->conec;
        return $con;
        }
    }
    $class= new conectar($host,$port,$user,$password,$bdname);
    $r=$class->conectar();
?>
