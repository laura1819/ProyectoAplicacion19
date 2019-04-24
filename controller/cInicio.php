<?php

/**
 * Fichero cInicio.php
 * Este fichero permite controlar la página de inicio del programa
 * @author Christian Muñiz de la Huerga
 * @modifiedDate 28/01/2019
 * @version 1.5
 */

/**
 * @author Laura Fernandez
 * @modifiedDate 15/04/2019
 * Fecha ultima revision 16-01-2019
 */
error_reporting(E_ALL);
        ini_set('display_errors', '0');
if (isset($_REQUEST['Salir'])) {
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location: index.php");
    exit;
}


if (isset($_REQUEST['edPerfil'])) {
    $_SESSION['pagina'] = 'miCuenta';
    header("Location: index.php");
    exit;
}

if (isset($_REQUEST['borrarCuenta'])) {
    $_SESSION['pagina'] = 'borrarCuenta';
    header("Location: index.php");
    exit;
}
if (isset($_REQUEST['cambiarPass'])) {
    $_SESSION['pagina'] = 'cambiarPassword';
    header("Location: index.php");
    exit;
}



if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
} else {
    $_SESSION['titulo'] = 'Inicio del Programa';
    require_once $vistas["layout"];
}
?>