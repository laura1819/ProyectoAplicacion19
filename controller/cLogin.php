<?php

/**
 * Fichero cLogin.php
 * Este fichero permite controlar el login de la aplicación
 * @author Laura Fernandez
 * @modifiedDate 15/04/2019
 * @version 1.5
 */

$entradaOk = true;
$aFormulario = [usuario => null,
    pass => null];
$aErrores = [usuario => null,
    pass => null]; //Guarda posibles errores.
if (isset($_REQUEST['Salir'])) {
    header("Location: ../indexProyectoDWES.php");
    exit;
}
if (isset($_REQUEST['Registrarse'])) {
    $_SESSION['pagina'] = 'registroUsuario';
    header("Location: index.php");
    exit;
}
if (isset($_REQUEST['Acceder'])) {
    $aErrores[usuario] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 15, 3, 1);
    $aErrores[pass] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['pass'], 15, 3, 1);
    foreach ($aErrores as $campo => $error) { //Recorre el array de errores en busca de algún mensaje de error.
        if ($error != null) {
            $entradaOk = false; //Si encuentra algún mensaje de error cambia el valor de la variable $entradaOK a false.
            $_REQUEST[$campo] = "";
        }
    }
}
if (isset($_REQUEST['Acceder']) && $entradaOk) {
    $aFormulario[usuario] = $_REQUEST['usuario'];
    $aFormulario[pass] = $_REQUEST['pass'];
    $usuario = Usuario::validarUsuario($aFormulario[usuario], $aFormulario[pass]);
    if (is_null($usuario)) {
        $aErrores[pass] = $aErrores[pass] . " Usuario o contraseña incorrectos";
    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['pagina'] = 'inicio';
        $_SESSION['visitas'] = $usuario->registrarUltimaConexion();
        header("Location: index.php");
        exit;
    }
}
$_SESSION['pagina'] = 'login';
$_SESSION['titulo'] = 'Inicio de Sesión';
require_once $vistas["layout"];
?>