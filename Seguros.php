<!DOCTYPE html>
<html>
<head>
	<title>Compañia de Seguros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Cuota Finanza</h1>
	<form action="Seguros.php" method="POST">
		<fieldset>
			<legend>Afianzadora</legend>
			<p>Una compañia de seguros está abriendo un departamento de finanzas y estableció un programa para captar clientes que consiste en lo siguiente: si el monto por el que se efectúa la finanza es menor que $500000 la cuota a pagar será por el 3% del monto, y si el monto es mayor que $500000 la cuota a pagar será del 2%. La afianzadora desea determinar cuál será la cuota que debe pagar un cliente.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Monto de Fianza: <input type="numeric" name="MF"></p>

		</fieldset>
		<p><input type="submit" name="Enviar"></p>
		<p><a href="index2.html">Menu Principal</a></p>
	</form>

<p>
<form>
	<fieldset>
		<?php
		if (isset($_POST['Enviar'])) 
		{
		$nom=$_POST["N"];
		$N1=$_POST["MF"];
		if ($N1<500000) {
			$C1=$N1*0.03;
			echo "<p> {$nom} La cuota que debes pagar con un 3% del monto es de: {$C1} </p>";
		}
		else
		{
			$C2=$N1*0.02;
			echo "<p> {$nom} La cuota que debes pagar con un 2% del monto es de: {$C2} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>