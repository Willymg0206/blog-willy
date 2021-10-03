<!DOCTYPE html>
<html>
<head>
	<title>Pulsaciones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Pulsaciones Por Persona</h1>
	<form action="Pulsaciones.php" method="POST">
		<fieldset>
			<legend>Cada 10 Segundos</legend>
			<p>Calcular el numero de pulsaciones que debe tener una persona por cada 10 segundos de ejercicio aeróbico, la fórmula que se aplica cuando el sexo es femenino es:<br>
				Numero de pulsaciones = (220 – edad)/10 <br>
				Si el sexo es masculino: <br>
			    Numero de pulsaciones = (210 – edad)/10</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Edad: <input type="numeric" name="E"></p>
			<p>¿Masculino (1) o Femenino (2)?: <input type="numeric" name="MF"></p>

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
		$N1=$_POST["E"];
		$N2=$_POST["MF"];

		if ($N2==1) {
			$P1=(210-$N1)/10;
			echo "<p> {$nom} El numero de pulsaciones que debe tener una persona si es hombre cada 10 segundos de ejercicio aerobico es de: {$P1} </p>";
		}
        elseif ($N2==2) {
	    $P2=(220-$N1)/10;
			echo "<p> {$nom} El numero de pulsaciones que debe tener una persona si es mujer cada 10 segundos de ejercicio aerobico es de: {$P2} </p>";
		}
			
		   }
		
	?>
 </fieldset>

</form>
</p>

</body>
</html>