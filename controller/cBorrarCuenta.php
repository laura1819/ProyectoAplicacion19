<?php

/**
 * Fichero cBorrarCuenta.php
 * Este fichero permite borrar una cuenta
 * @author Laura Fernandez
 * @modifiedDate 17/04/2019
 * @version 1.5
 */

error_reporting(E_ALL);
        ini_set('display_errors', '0');
        
if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['pagina'] = 'inicio';
    header("Location: index.php");
} else {
    if (isset($_REQUEST['Confirmar'])) {
        $usuario = $_SESSION['usuario'];
        if ($usuario->borrarUsuario()) {
            unset($_SESSION['usuario']);
            session_destroy();
            $_SESSION['pagina'] = 'login';
            header("Location: index.php");
        }
    } else {
        $_SESSION['pagina'] = 'borrarCuenta';
        $_SESSION['titulo'] = 'Borrar Cuenta';
        require_once $vistas["layout"];
    }
}
?>