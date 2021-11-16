<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include '../bd/bd.php';
include '../lib/filaAccion.php';
include '../controller/customer.php';

$bd = new bd();
$filaAccion = new filaAccion();
$customer = new customer();

$num = trim($_POST['numJson']);
$date = date("Y-m-d H:i:s");

$sql = "SELECT id_cliente FROM cliente WHERE documento = '%s'";
$parametros = array((int) $num);
$resultado = $filaAccion->getObjeto($bd->consultar($sql, $parametros));

$retorno = '';
if(empty($resultado)){
    //Ingresa el cliente
    try{
        $sql = "INSERT INTO cliente (documento, fecha_registro, id_rol, clave) VALUES (%s, '%s', 2, '%s');";
        $parametros = array(
            (int) $num, 
            $date,
            $customer->getClave()
        );
        $id_cliente = $bd->insertar($sql, $parametros);
        //Ingresa el registro
        $sql = "INSERT INTO registro_tiempo (id_cliente, fecha_ingreso) VALUES (%s, '%s');";
        $parametros = array((int) $id_cliente, $date);
        $bd->insertar($sql, $parametros);
        $retorno = 'registration.php?documento='.$num;
    }catch (Exception $e) {
        error_log("Errormessage: %s\n". $e->getMessage(), 3, $_SERVER["DOCUMENT_ROOT"].'/logs/error.log');
    }
}else{
    try{
        $sql = "INSERT INTO registro_tiempo (id_cliente, fecha_ingreso) VALUES (%s, '%s);";
        $parametros = array(
            (int) $resultado->id_cliente, 
            $date
        );
        $bd->insertar($sql, $parametros);
        $retorno = 'registration';
    }catch (Exception $e) {
        error_log("Errormessage: %s\n". $e->getMessage(), 3, $_SERVER["DOCUMENT_ROOT"].'/logs/error.log');
    }
}

header('Content-Type: application/json');
echo json_encode($retorno, JSON_FORCE_OBJECT);