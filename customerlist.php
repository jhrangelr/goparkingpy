<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'lib/head.php';

include 'bd/bd.php';
$bd = new bd();



?>
<div class="container">
		<div class="row">
			<div class="col">
                <h1 >Información</h1>
				<table class="table table-striped table-bordered table-hover table-dark">
					<thead>
						<tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Placa</th>
                            <th>Fecha ingreso</th>
                            <th>Fecha Salida</th>
                            <th>Timepo en parqueo</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ratón</td>
							<td>15</td>
							<td>100</td>
						</tr>
						<tr>
							<td>Teclado</td>
							<td>34</td>
							<td>340</td>
						</tr>
						<tr>
							<td>Pantalla</td>
							<td>10</td>
							<td>400</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
<?php 
include 'lib/footer.php';
?>