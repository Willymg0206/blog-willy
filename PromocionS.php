<!DOCTYPE html>
<html>
<head>
	<title>PromocionS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Pagar En Un Supermercado</h1>
	<form action="PromocionS.php" method="POST">
		<fieldset>
			<legend>Solucion Pagar Supermercado</legend>
			<p>En un supermercado se hace una promocion, mediante la cual el cliente obtiene un descuento dependiendo de un número que se escoge al azar. Si el número escogido es menor que 74 el descuento es del 15% sobre el total de la compra, si es  mayor  o  igual  a  74  el  descuento  es  del  20%. Obtener cuánto dinero se le descuenta.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Numero al Azar (2 Cifras): <input type="numeric" name="NA"></p>
			<p>Total Compra: <input type="numeric" name="TA"></p>			

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
		$N1=$_POST["NA"];
		$N2=$_POST["TA"];
		if ($N1>=74) {
			$T20=0.20*$N2;
			$D1=$N2-$T20;
			echo "<p> {$nom} El total a pagar es de: {$N2} </p>";
			echo "<p> {$nom} El total a pagar con promocion del 20% es de: {$D1} </p>";
		}
		else
		{
			$T15=0.15*$N2;
			$D2=$N2-$T15;
			echo "<p> {$nom} El total a pagar es de: {$N2} </p>";
			echo "<p> {$nom} El total a pagar con promocion del 15% es de: {$D2} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>