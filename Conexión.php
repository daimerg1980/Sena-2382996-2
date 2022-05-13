<?php
    class Conexion{
        private $conexion;
        public function __construct(){
            $server="localhost";
            $DB="Servicios";
            $charSet="UTF8";
            $user="root";
            $pass="";
            try{
                $this->conexion = new PDO("mysql:host=$server; dbname=$DB; charset=$charSet", "$user", "$pass");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                $this->conexion = die ("Ocurrió el siguiente error en la Conexión: ".$e->getMessage());
            }
        }
        public function getConexion(){
            return $this->conexion;  
        }
    }

    function ejecuteSQL($sentenciaSQL, $camposBD, $fetch=""){
        $objConexion = new Conexion();
        $conexionBD = $objConexion->getConexion();
        if($camposBD === 0){
            $sentenciaSQL = $conexionBD->query($sentenciaSQL);
            $sentenciaSQL->execute();
        }else{
            $sentenciaSQL = $conexionBD->prepare($sentenciaSQL);
            $sentenciaSQL->execute($camposBD);
        }
        if ($fetch) return $resultado = $sentenciaSQL->$fetch(PDO::FETCH_OBJ);
    }
?>
