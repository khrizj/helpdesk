<?php 
    session_start();

    class Conectar{

        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:hostname=34.125.255.249;dbname=helpdesk","root","Computer2021);
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!" . $e->getMessage(). "<br>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://calidadsoftware.tk/helpdesk/";
        }
    }

?>