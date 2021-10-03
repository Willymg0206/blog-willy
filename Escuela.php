<!DOCTYPE html>
<html>
<head>
	<title>Matricula Escuela</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Costo Matricula</h1>
	<form action="Escuela.php" method="POST">
		<fieldset>
			<legend>Escuela</legend>
			<p>En una escuela el costo de matricula de los alumnos se determina segun el numero de materias que cursan. El costo de todas las materias es el mismo. Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: Si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual a 4.5, se le hara un descuento del 30% sobre la matricula y no se le cobrara IVA; Si el promedio obtenido es menor que 4.5 debera pagar la matricula completa, la cual incluye el 10% del IVA. Obtener cuanto debe pagar un alumno.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Promedio: <input type="numeric" name="P"></p>
			<p>Costo Matricula: <input type="numeric" name="CM"></p>

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
		$N1=$_POST["P"];
		$N2=$_POST["CM"];
		if ($N1>=4.5) {
			$D1=$N2*0.30;
			$T1=$N2-$D1;
			echo "<p> {$nom} El total que debes pagar con un descuento del 30% y SIN IVA es de: {$T1} </p>";
		}
		else
		{
			$T2=$N2+($N2*0.10);
			echo "<p> {$nom} El total que debes pagar mas el IVA es de: {$T2} </p>";
		    }
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>