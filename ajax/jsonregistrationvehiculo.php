<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include '../bd/bd.php';
include '../lib/filaAccion.php';
$bd = new bd();
$filaAccion = new filaAccion();

$placa = strtolower(trim($_POST['placa']));
$tipoC = trim($_POST['tipoC']);
$color = strtolower(trim($_POST['color']));
$marca = strtolower(trim($_POST['marca']));
$doc = trim($_POST['doc']);
$date = date("Y-m-d H:i:s");

$sql = "SELECT id_cliente FROM cliente WHERE documento = '%s'";
$parametros = array($doc);
$resultado = $filaAccion->getObjeto($bd->consultar($sql, $parametros));
$retorno = '';
if(isset($resultado)){
    try{
        $sql = "INSERT INTO vehiculo (id_cliente, placa, id_tipo_vehiculo, color, marca, fecha_registro) VALUES (%s, '%s', %s, '%s', '%s', '%s')";
        $parametros = array(
            (int) $resultado->id_cliente,
            $placa,
            (int) $tipoC,
            $color,
            $marca,
            $date
        );
        $vehiculoId = $bd->insertar($sql, $parametros);
        $sql = "UPDATE registro_tiempo SET id_vehiculo = %s WHERE id_cliente = %s";
        $parametros = array(
            (int) $vehiculoId, 
            (int) $resultado->id_cliente
        );
        $bd->consultar($sql, $parametros);

    }catch (Exception $e) {
        error_log("Errormessage: %s\n". $e->getMessage(), 3, $_SERVER["DOCUMENT_ROOT"].'/logs/error.log');
    }

}

header('Content-Type: application/json');
echo json_encode('dashboard/tables.php?documento='.$doc, JSON_FORCE_OBJECT);