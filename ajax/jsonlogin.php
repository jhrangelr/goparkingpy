<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
    include '../bd/bd.php';
    include '../controller/filaAccion.php';

    $bd = new bd();
    $filaAccion = new filaAccion();

    $email = trim(strtolower($_POST['email']));
    $clave = trim($_POST['clave']);

    $sql = "SELECT id_cliente, nombre, apellido, id_rol FROM cliente WHERE email = '%s' AND clave = '%s';";
    $parametros = array(
        $email,
        $clave
    );
    $accion = null;
    $error = null;
    $login = $filaAccion->getObjeto($bd->consultar($sql, $parametros));
    if(isset($login)){
        session_start();
        $date = date('Y-m-d H:i:s');
        $_SESSION['id_cliente'] = $login->id_cliente;
        $_SESSION['nombre']     = $login->nombre;
        $_SESSION['apellido']   = $login->apellido;
        $_SESSION['userAgent']  = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['SKey'] 		= uniqid(mt_rand(), true);
        $_SESSION['rol']        = $login->id_rol;
        $_SESSION['LastActivity'] = $_SERVER['REQUEST_TIME'];
        $sql = "UPDATE cliente SET fecha_actualizar = '%s' WHERE id_cliente = '%s';";
        $parametros = array(
            $date,
            $login->id_cliente
        );
        $bd->consultar($sql,$parametros);
        $accion = 'dashboard/user.php';
    }else{
        $error = true;
        $accion = "¡Usuario o clave incorrecto!";
    }
    $array = array(
        'error' => $error,
        'accion' => $accion
    );
    header('Content-Type: application/json');
    echo json_encode($array, JSON_FORCE_OBJECT);
}