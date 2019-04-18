<?php

/**
 * Fichero DBPDO.php
 * 
 * Esta clase permite conectarse con la base de datos
 * 
 * @package model
 * @author Laura Fernandez
 * @modifiedDate 15/04/2019
 * @version 1.5
 */
/**
 * Class DBPDO
 * 
 * Esta clase permite conectarse con la base de datos
 */
class DBPDO {
    
    /**
     * Función ejecutaConsulta
     * 
     * Función para ejecutar consultas contra la base de datos
     * 
     * @function ejecutaConsulta();        
     * @author Laura Fernandez
     * @version 1.0
     * @since 2019-04-15
     * @param $sentenciaSQL sentencia en SQL.
     * @param $parametros parámetros del SQL.
     * @return $consulta resultado.
     */
    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $miDB = new PDO(IPDB, USUARIO, PASS);
            $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consulta = $miDB->prepare($sentenciaSQL); //Preparamos la consulta.
            $consulta->execute($parametros); //Ejecutamos la consulta.
        } catch (PDOException $exc) {
            $consulta = null; //Destruimos la consulta.
            echo $exc->getMessage();
            unset($miDB);
        }
        return $consulta;
    }

}

?>