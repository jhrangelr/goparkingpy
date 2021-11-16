<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include '../bd/bd.php';
include '../lib/filaAccion.php';
$bd = new bd();

$nombre = ucfirst(strtolower(trim($_POST['nom'])));
$apellido = ucfirst(strtolower(trim($_POST['ape'])));
$tipoDoc = trim($_POST['tipoDoc']);
$correo = strtolower(trim($_POST['cor']));
$celular = trim($_POST['cel']);
$documento = trim($_POST['doc']);



try{
    $sql = "UPDATE cliente set nombre = '%s', apellido = '%s', id_tipo_documento = %s, email = '%s', celular = '%s' WHERE documento = '%s';";
    $parametros = array(
        $nombre, 
        $apellido, 
        (int) $tipoDoc, 
        $correo, 
        $celular, 
        $documento
    );
    $bd->insertar($sql, $parametros);
    $retorno = 'vehiculo.php?vehiculo='.$documento;
}catch (Exception $e) {
    error_log("Errormessage: %s\n". $e->getMessage(), 3, $_SERVER["DOCUMENT_ROOT"].'/logs/error.log');
}


header('Content-Type: application/json');
echo json_encode($retorno, JSON_FORCE_OBJECT);