<?php
include("../librerias.php");
$nid= $_POST["idProducto"];
$snom= $_POST["Nombre"];
$ntot= $_POST["Total"];
$nano= $_POST["ano"];

$oPro=new Producto($nid,$snom,$ntot,$nano);

?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>