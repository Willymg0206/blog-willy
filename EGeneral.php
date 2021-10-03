<!DOCTYPE html>
<html>
<head>
	<title>EGeneral</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Ecuacion General de Segundo Grado</h1>
	<form action="EGeneral.php" method="POST">
		<fieldset>
			<legend>Solucion Ecuacion General</legend>
			<p>Se desea hallar el valor x1 y x2 de una ecuacion, digite los datos y diga los valores o si no tiene solucion.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Valor de a: <input type="numeric" name="a"></p>
			<p>Valor de b: <input type="numeric" name="b"></p>
			<p>Valor de c: <input type="numeric" name="c"></p>

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
		$N1=$_POST["a"];
		$N2=$_POST["b"];
		$N3=$_POST["c"];
		$D=$N2*$N2-4*$N1*$N3;
		if ($D>=0){
			$x1=(-$N2+sqrt($D))/(2*$N1);
			$x2=(-$N2-sqrt($D))/(2*$N1);
			echo "<p> {$nom} El valor de x1 es: {$x1} </p>";
			echo "<p> {$nom} El valor de x2 es: {$x2} </p>";
            }
		else
		{
				echo "<p> {$nom} La ecuación no tiene solución </p>";
			}
		}
	?>
 </fieldset>

</form>
</p>

</body>
</html>
