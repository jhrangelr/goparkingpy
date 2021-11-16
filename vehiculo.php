<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'lib/head.php';

include 'bd/bd.php';
$bd = new bd();

$documento = $_GET['vehiculo'];
if(empty($documento)){
    header('Location: document.php');
    die();
}

$sql = "SELECT * FROM tipo_vehiculo ORDER BY tipo";
$resultado = $bd->consultar($sql);
$tiposVehiculos = array();
while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
    array_push($tiposVehiculos, $fila);
}

?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/logo_goparking.jpg" id="icon" alt="User Icon" />
    </div>
    <br/ >
    <!-- Document Form -->
    <form>
        <div id="formContent">
        <strong>Bienvenido a Goparking</strong>
        <p>Ingresa los datos de tu vehiculo...</p>
        </div>
        <input type="hidden" name="documento" id="documento" value="<?php echo $documento; ?>" />
        <input type="text" id="placa" class="fadeIn second" name="placa" placeholder="Placa" autocomplete="off" required="required" >
        <select id="tipoDocumento" class="fadeIn second" name="tipoDocumento" required="required">
            <option value="">Tipo documento</option>
            <?php foreach ($tiposVehiculos as $tipoVehiculo){?>
            <option value="<?php echo $tipoVehiculo['id_tipo_vehiculo']; ?>"><?php echo ucfirst(strtolower($tipoVehiculo['tipo'])); ?></option>
            <?php } ?>
        </select>
        <input type="text" id="color" class="fadeIn second" name="color" placeholder="Color" autocomplete="off" required="required" >
        <input type="text" id="marca" class="fadeIn second" name="marca" placeholder="Marca" autocomplete="off" required="required" >
        <input type="submit" class="fadeIn fourth" value="Registrar" id="registrar">
    </form>
    <!-- Info -->
    <div id="formFooter">
        <p class="alert" hidden></p>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#registrar").click(function(){
            let p = $("#placa").val();
            let t = $("#tipoDocumento").val();
            let c = $("#color").val();
            let m = $("#marca").val();
            let d = $("#documento").val();
            if(p == '' || t == '' || c == '' || m == ''){
                let p = $(".alert");
                p.text('Campos incompletos!');
                p.show();
            }else{
                registrar(p, t, c, m, d);
                return false;
            }
        })
    });
    function registrar(p, t, c, m, d){
        $.ajax({
            method: 'POST',
            url: 'ajax/jsonregistrationvehiculo.php',
            cache: false,
            data: {'placa': p, "tipoC": t,"color": c, "marca": m, "doc": d},
            dataType: 'JSON',
            /*beforeSend: function(){

            },*/
            success: function(url){
                window.location.href = url;
            }
        })
    }
</script>
<?php 
include 'lib/footer.php';
?>