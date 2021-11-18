<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ){
    include '../bd/bd.php';
    include '../lib/filaAccion.php';
    $bd = new bd();
    $filaAccion = new filaAccion();

    $admin = trim($_POST['adminAjax']);
    $idCliente = trim($_POST['idClienteAjax']);

    if( $admin == 1){
        $sql = "SELECT 
        c.id_cliente,
        c.nombre,
        c.apellido,
        c.email,
        c.celular,
        v.placa,
        rt.fecha_ingreso,
        rt.fecha_salida,
        rt.tiempo
        FROM cliente c
        INNER JOIN vehiculo v ON v.id_cliente = c.id_cliente
        INNER JOIN registro_tiempo rt ON rt.id_cliente = c.id_cliente
        WHERE c.id_cliente != %s
        ORDER BY rt.fecha_ingreso DESC";
        $parametros = array($idCliente);

    }else{
        $sql = "SELECT 
        c.nombre,
        c.apellido,
        c.email,
        c.celular,
        v.placa,
        rt.fecha_ingreso,
        rt.fecha_salida,
        rt.tiempo
        FROM cliente c
        INNER JOIN vehiculo v ON v.id_cliente = c.id_cliente
        INNER JOIN registro_tiempo rt ON rt.id_cliente = c.id_cliente
        WHERE c.documento = '%s'
        ORDER BY rt.fecha_ingreso DESC";
        $parametros = array($idCliente);
    }
    $usuarios = $filaAccion->getFetchArray($bd->consultar($sql, $parametros));
    foreach ($usuarios as $usuario){?>
        <tr>
            <td><?php echo ucfirst(strtolower($usuario['nombre'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['apellido'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['email'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['celular'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['placa'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['fecha_ingreso'])); ?></td>
            <td><?php echo ucfirst(strtolower($usuario['fecha_salida'])); ?></td>
            <?php if($admin != 1){  ?>
            <td><?php echo (!empty($usuario['tiempo']))? ucfirst(strtolower($usuario['tiempo'])): '<div id="hour">00</div>';?>  </td>
            <td>
            <div id="tiempotrnas"></div>
            </td>
            <td>
                <a href="#" class="btn btn-primary btn-round">Pagar</a>
            </td>
            <input type="hidden" id="hora_desde" value="<?php echo date("H", strtotime($usuario['fecha_ingreso'])); ?>" >
            <input type="hidden" id="minuto_desde" value="<?php echo date("i", strtotime($usuario['fecha_ingreso'])); ?>" >
            <input type="hidden" id="hora_registro" value="<?php echo date("H:i", strtotime($usuario['fecha_ingreso'])); ?>" >
            <input type="hidden" id="hora_hasta" value="<?php echo date("H:i"); ?>" >
            <?php }else{ ?>
            <td>12:14</td>
            <?php } ?>
            <td>
                <button type="button" name=""class="btn btn-danger btn-round" id="<?php echo $usuario["id_cliente"]; ?>" onclick="eliminar(this.id, '<?php echo $admin ?>', '<?php echo $idCliente ?>');" >X</button>
            </td>
        </tr>
<?php
    }
}
?>