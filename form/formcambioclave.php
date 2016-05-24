<?php
$oProducto=new Producto();
?>

<html>
    <body>    
        
<form method="POST" action="accform/accUsuarioUPDClave.php">

        <div>
		<label for="idproducto">Ingrese clave Actual:</label><br />
		<input id="idproducto" class="input" name="idproducto"type="text" value="" size="30" /><br />
	</div>
	<div>
		<label for="email">Ingrese Nueva Clave:</label><br />
		<input id="nombre" class="input" name="newpwd"  type="text" value="" size="30" /><br />
	</div>
	<div>
		<label for="total">Repita la Nueva Clave:</label><br />
                <input id="total" class="input" name="newpwd" type="text" value="" size="30"></input><br />
	</div>
            
        <input type="submit" value="Cambiar">  <input type="button" onclick="history.back()" name="volver" value="volver">        
</form>
    </body>
    </html>