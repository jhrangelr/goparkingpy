<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include '../bd/bd.php';
$bd=new bd();

$nombre = $_POST['nombreAjax'];
 

$sql="SELECT * FROM empleado ";
if($nombre != ''){
    $sql .= "WHERE nombre LIKE '%".$nombre."%'";
}
$resultado=$bd->consultar($sql);  
$usuarios=array();
while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)) {
    array_push($usuarios,$fila);
}
?>

<?php
foreach($usuarios as $usuario){
?>
<tr>
 <td><?php echo $usuario['IDempleado']?></td>
 <td><?php echo $usuario['nombre']?></td>
 <td><?php echo $usuario['documento']?></td>
 <td><?php echo $usuario['IDcargo']?></td>
 <td><?php echo $usuario['genero']?></td>
</tr>
<?php
} 
?>