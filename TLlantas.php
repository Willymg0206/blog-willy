<!DOCTYPE html>
<html>
<head>
	<title>TLlantas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Pagar En Una Llanteria</h1>
	<form action="TLlantas.php" method="POST">
		<fieldset>
			<legend>Solucion Pagar Llanteria</legend>
			<p>Calcula el total que una persona debe pagar en una llantera, si el precio de cada llanta es de $80000 si se compran menos de 5 llantas y de $70000 si se compran 5 o más.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Numero de Llantas: <input type="numeric" name="L"></p>

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
		$N1=$_POST["L"];
		if ($N1<5) {
			$L5=$N1*80000;
			echo "<p> {$nom} El total a pagar es de: {$L5} </p>";
		}
		else
		{
			$L=$N1*70000;
			echo "<p> {$nom} El total a pagar es de: {$L} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>