<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
if(isset($_POST) && !empty($_POST)) {
    include('phpqrcode/qrlib.php'); 
    $codesDir = "codes/";   
    $codeFile = date('d-m-Y-h-i-s').'.png';
    QRcode::png($_POST['formData'], $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
    echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
} else {
    header('location:./');
}
?>