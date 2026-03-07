<?php
    class Conexion{
        private $host;
        private $user;
        private $pass;
        private $db;
        private $con;

        public function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "root";
            $this->db = "usuarios";

            $this->con =mysqli_connect($this->host, $this->user, $this->pass, $this->db );
            if(mysqli_errno($this->con)){
                echo "Fallo en la conexion a $this->db";
            }
            else{
                echo "La conexion a $this->db fue exitosa";
            }

        } // fin del constructor

        public function consultaSimple($sql){
            mysqli_query($this->con, $sql);
        }

        public function consultaRetorno($sql){
            return mysqli_query($this->con, $sql); 
        }


    } // Finalizacion de la clase conexion

    /* $miConexion = new Conexion(); */ 
?>