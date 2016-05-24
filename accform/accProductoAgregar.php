<?php
include("../librerias.php");
session_start();
$oUsr=$_SESSION["oUsuario"];
$nidproducto= $_POST["idProducto"];
$snombre= $_POST["Nombre"];
$ntotalusd= $_POST["Total"];
$nano= $_POST["ano"];
$oPro=new Producto($nidproducto,$snombre,$ntotalusd,$nano);

?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>