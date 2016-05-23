<?php
include("../librerias.php");
$oPro=new Producto(NULL, NULL, NULL);
foreach ($_POST as $id){
	$oPro->Elimina($id);	
};
?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_del.php";
</script>