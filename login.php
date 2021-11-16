<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include 'lib/head.php';
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
      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Correo" autocomplete="off" required="required">
      <input type="password" id="clave" class="fadeIn second" name="clave" placeholder="Clave" autocomplete="off" required="required">
      <input type="submit" class="fadeIn fourth" value="Ingresar" id="registrar">
    </form>

    <!-- Info -->
    <div id="formFooter">
      <div class="alert alert-warning" role="alert" id="alert"></div>
      <strong>Bienvenido a Goparking</strong>
      <p>Ingresa tus datos para el registro...</p>
    </div>

  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#alert').hide();
    $("#registrar").click(function(){
      let e = $("#email").val();
      let c = $("#clave").val();
      validar(e,c);
      return false;
    });
  });
  function validar(e,c){
    $.ajax({
      method: 'POST',
      url: 'ajax/jsonlogin.php',
      data: {'email':e, 'clave':c},
      dataType: 'json',
      success: function(data){
        if( data.error == true){
          $('#alert').text(data.accion);
          $('#alert').fadeIn();
        }else{
          window.location.href = data.accion; 
        }
      }
    });
  }
</script>
<?php 
include 'lib/footer.php';
?>