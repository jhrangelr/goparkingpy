<?php 
	session_start();
	unset ($_SESSION['activo']);
	unset ($_SESSION['id_cliente']);
	unset ($_SESSION['nombre']);
	unset ($_SESSION['apellido']);
	unset ($_SESSION['userAgent']);
	unset ($_SESSION['SKey']);
	unset ($_SESSION['rol']);
	unset ($_SESSION['LastActivity']);
	session_unset();
	session_destroy();
	header('Location: index.php');
?>
