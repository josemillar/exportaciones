﻿<?php
include ('librerias.php');
session_start();
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <title>Exportaciones</title>
</head>
<body>
<?php 
include('menu.php');
/*
 * Verificación del usuario y clave
* */
if (!isset($_SESSION["oUsuario"])){
include('form/formlogin.php');
}
else{
$oUsr=$_SESSION["oUsuario"];
?>


<form method="POST" action=" logout.php">
    <h2>BIENVENIDO: <?=$oUsr->getNombre();?></h2>
    <input type="submit" value="SALIR">   
    
</form>

<?php }?>
</body>
</html>
