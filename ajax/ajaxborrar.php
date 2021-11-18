<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
    include '../bd/bd.php';
    include '../lib/filaAccion.php';
    $bd = new bd();
    $filaAccion = new filaAccion();

    $idCliente = trim($_POST['idClienteAjax']);
    
    $sql = "DELETE FROM registro_tiempo WHERE id_cliente = %s;";
    $parametros = array((int)$idCliente);
    $bd->consultar($sql, $parametros);

    $sql = "DELETE FROM vehiculo WHERE id_cliente = %s;";
    $parametros = array((int)$idCliente);
    $bd->consultar($sql, $parametros);

    $sql = "DELETE FROM cliente WHERE id_cliente = %s;";
    $parametros = array((int)$idCliente);
    $bd->consultar($sql, $parametros);

    header('Content-Type: application/json');
    echo json_encode('ok', JSON_FORCE_OBJECT);

}