<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'lib/head.php';

include 'bd/bd.php';
$bd = new bd();

$documentoGet = trim($_GET['documento']);
if(empty($documentoGet)){
    header('Location: document.php');
    die();
}

$documento = $_GET['documento'];
$sql = "SELECT * FROM tipo_documento ORDER BY tipo";
$resultado = $bd->consultar($sql);
$tiposDocumentos = array();
while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
    array_push($tiposDocumentos, $fila);
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
        <strong>Registro</strong>
        <p>Ingresa tus datos para el registro...</p>
        </div>
        <input type="hidden" name="documento" id="documento" value="<?php echo $documento; ?>" />
        <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombres" autocomplete="off" required="required" >
        <input type="text" id="apellido" class="fadeIn second" name="apellido" placeholder="Apellido" autocomplete="off" required="required" >
        <select id="tipoDocumento" class="fadeIn second" name="tipoDocumento" required="required">
            <option value="">Tipo documento</option>
            <?php foreach ($tiposDocumentos as $tipoDocumento){?>
            <option value="<?php echo $tipoDocumento['id_tipo_doc']; ?>"><?php echo ucfirst(strtolower($tipoDocumento['tipo'])); ?></option>
            <?php } ?>
        </select>
        <input type="email" id="correo" class="fadeIn second" name="correo" placeholder="Correo" autocomplete="off" required="required" >
        <input type="text" id="celular" class="fadeIn second" name="celular" placeholder="Celular" autocomplete="off" required="required" onkeypress="return valideKey(event);">
        <input type="submit" class="fadeIn fourth" value="Registrar" id="registrar">
    </form>
    <!-- Info -->
    <div id="formFooter">
        <p class="alert" hidden></p>
    </div>
  </div>
</div>
<script type="text/javascript">
    function valideKey(evt){
        var code = (evt.which) ? evt.which : evt.keyCode;
        if(code==8) { // backspace.
            return true;
        } else if(code>=48 && code<=57) {
            return true;
        } else{
            return false;
        }
    }
    $(document).ready(function(){
        $("#registrar").click(function(){
            let n = $("#nombre").val();
            let a = $("#apellido").val();
            let t = $("#tipoDocumento").val();
            let c = $("#correo").val();
            let e = $("#celular").val();
            let d = $("#documento").val();
            if(n == '' || a == '' || t == '' || c == '' || e == ''){
                let p = $(".alert");
                p.text('Campos incompletos!');
                p.show();
            }else{
                registrar(n, a, t, c, e, d);
                return false;
            }
        })
    });
    function registrar(n, a, t, c, e, d){
        $.ajax({
            method: 'POST',
            url: 'ajax/jsonregistration.php',
            cache: false,
            data: {'nom': n, "ape": a,"tipoDoc": t, "cor": c, "cel":e, "doc": d},
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