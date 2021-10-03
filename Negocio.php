<!DOCTYPE html>
<html>
<head>
	<title>Negocio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Negocio De Una Persona</h1>
	<form action="Negocio.php" method="POST">
		<fieldset>
			<legend>Hipoteca Y Monto</legend>
			<p>Una persona desea iniciar un negocio, para lo cual piensa verificar cuánto dinero le prestara el banco por hipotecar su casa. Tiene una cuenta bancaria, pero no quiere disponer de ella a menos que el monto por hipotecar su casa sea muy pequeña. Si el monto de la hipoteca es menor que $100.000.000 entonces invertirá el 50% de la inversión total y un socio invertirá el otro 50%. Si el monto de la hipoteca es de $100.000.000 o más, entonces invertirá el monto total de la hipoteca y el resto del dinero que se necesite para cubrir la inversión total se repartirá a partes iguales entre el socio y el.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Monto Del Negocio: <input type="numeric" name="MN"></p>
			<p>Monto De La Hipoteca: <input type="numeric" name="MH"></p>

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
		$N1=$_POST["MN"];
		$N2=$_POST["MH"];
		if ($N2<100000000) {
			$I1=$N1*0.50;
			echo "<p> {$nom} El 50% de la inversion de cada socio es: {$I1} </p>";
		}
		else
		{
			$I2=($N1-$N2)/2;
			echo "<p> {$nom} La inversión total de la hipoteca es: {$N2} </p>";
			echo "<p> La inversión que corresponde a cada socio es: {$I2} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>