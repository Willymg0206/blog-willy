<!DOCTYPE html>
<html>

<head>
	<title>Notas de Modalidad</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>

<body>
	<h1>Notas de Modalidad</h1>

	<form method="POST" action="Notas.php">

	<fieldset>
		<legend>Notas de Modalidad</legend>
		<p>Se desea hallar el promedio de una persona, halle el promedio usando las notas del cuestionario, exposicion y trabajo.</p>
		<p>Nombre: <input type="text" name="N"></p>
		<p>Cuestionario: <input type="numeric" name="C"></p>
		<p>Exposición: <input type="numeric" name="E"></p>
		<p>Trabajo: <input type="numeric" name="T"></p>
	</fieldset>

	<p>Enviar: <input type="submit" name="Enviar"></p>
	<p><a href="index2.html">Menu</a></p>
	</form>
<p>
<form>
	<fieldset>
		<?php
		if (isset($_POST['Enviar']))
		{
		$nom=$_POST["N"];
		$N1=$_POST["C"];
		$N2=$_POST["E"];
		$N3=$_POST["T"];

	$PromedioMod=$N1*0.2+$N2*0.3+$N3*0.5;
	echo "<p> {$nom} Tu promedio es: {$PromedioMod} </p>";
    }
	?>
	</fieldset>

</form>
</p>

</body>
</html>