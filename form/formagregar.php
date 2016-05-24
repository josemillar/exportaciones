<?php
$oProducto=new Producto();
?>

<html>
    <body>

        
        
        
<form method="POST" action="accform/accProductoAgregar.php">

        <div>
		<label for="idproducto">Id Producto:</label><br />
		<input id="idproducto" class="input" name="idproducto"type="text" value="" size="30" /><br />
	</div>
	<div>
		<label for="email">Nombre:</label><br />
		<input id="nombre" class="input" name="nombre"  type="text" value="" size="30" /><br />
	</div>
	<div>
		<label for="total">Total USD:</label><br />
                <input id="total" class="input" name="total" type="text" value="" size="30"></input><br />
	</div>
        <div>
		<label for="ano">AÑO:</label><br />
                <input id="ano" class="input" name="ano" type="text" value="" size="30"></input><br />
	</div>
    
        <input type="submit" value="Agregar">   <input type="button" onclick="history.back()" name="volver" value="volver">     
</form>
    </body>
    </html>