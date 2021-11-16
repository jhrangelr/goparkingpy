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
      <input type="text" id="document" class="fadeIn second" name="document" placeholder="Documento" autocomplete="off" required="required" onkeypress="return valideKey(event);" maxlength="10" minlength="5">
      <input type="submit" class="fadeIn fourth" value="Ingresar" id="registrar">
    </form>

    <!-- Info -->
    <div id="formFooter">
      <strong>Bienvenido a Goparking</strong>
      <p>Ingresa tus datos para el registro...</p>
    </div>

  </div>
</div>
<script type="text/javascript">

    function valideKey(evt){
      $('#document').css('border','2px solid #f6f6f6');
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
        $('#registrar').click(function(){
            let v = $('#document');
            if(v.val() == ''){
              v.css('border','2px solid red');
            }else{
              numero(v.val());
            }
            return false;
        });
    });

    function numero(n){
        $.ajax({
            method: 'POST',
            url: 'ajax/jsondocumento.php',
            cache: false,
            data: {'numJson': n},
            dataType: 'JSON',
            /*beforeSend: function(){

            },*/
            success: function(url){
                  window.location.href = url; 
            }
        });
    }
</script>
<?php 
include 'lib/footer.php';
?>