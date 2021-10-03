<!DOCTYPE html>
<html>
<head>
	<title>Empresa Bienes Raices</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Casas De Interes Social</h1>
	<form action="Ingresos.php" method="POST">
		<fieldset>
			<legend>Cuotas</legend>
			<p>Una empresa de bienes raices ofrece casas de interes social, bajo las siguientes condiciones: Si los ingresos del comprador son menores de $800000 o más la cuota inicial será del 15% del costo de la casa y el resto se distribuirá en pagos mensuales, a pagar en diez años. Si los ingresos del comprador son de $800000 o más la cuota inicial será del 30% del costo de la casa y el resto se distribuirá en pagos mensuales a pagar en 7 años. La empresa quiere obtener cuanto debe pagar un comprador por concepto de cuota inicial y cuanto por cada pago parcial.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Costo: <input type="numeric" name="C"></p>
			<p>Ingresos: <input type="numeric" name="I"></p>

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
		$N1=$_POST["C"];
		$N2=$_POST["I"];
		if ($N2<800000) {
			$TC1=$N1*0.15;
			$P1=($N1-$TC1)/(12*10);
			echo "<p> {$nom} El comprador debe pagar como cuota inicial: {$TC1} </p>";
			echo "<p> Cada pago parcial sera de un: {$P1} </p>";
		}
		else
		{
			$TC2=$N1*0.30;
			$P2=($N1-$TC2)/(12*7); 
			echo "<p> {$nom} El comprador debe pagar como cuota inicial: {$TC2} </p>";
			echo "<p> Cada pago parcial sera de un: {$P2} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>