<!DOCTYPE html>
<html>
<head>
	<title>Programa SAR</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<h1>Gobierno Programa SAR</h1>
	<form action="SAR.php" method="POST">
		<fieldset>
			<legend>Dinero Depositado</legend>
			<p>El gobierno ha establecido el programa SAR (Sistema de Ahorro para el Retiro) que consiste en que los dueños de la empresa deben obligatoriamente depositar en una cuenta bancaria un porcentaje del salario de los trabajadores; adicionalmente los trabajadores pueden solicitar a la empresa que deposite directamente una cuota fija o un porcentaje de su salario en la cuenta del SAR, la cual le será descontada de su pago. Un trabajador que ha decidido aportar a su cuenta del SAR desea saber la cantidad total de dinero que estará depositado a esa cuenta cada mes, y el pago mensual que recibirá.</p>
			<p>Nombre: <input type="text" name="N"></p>
			<p>Salario: <input type="numeric" name="S"></p>
			<p>Porcentaje: <input type="numeric" name="P"></p>
			<p>¿Depositado Cuenta Cada Mes SAR (1) o Pago Mensual Que Recibira (2)?: <input type="numeric" name="O"></p>

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
		$N1=$_POST["S"];
		$N2=$_POST["P"];
		$N3=$_POST["O"];

		if ($N3==1) {
			$S1=($N1*$N2)/100;
			echo "<p> {$nom} La cantidad de dinero que deposita cada mes para SAR es: {$S1} </p>";
		}
        elseif ($N3==2) {
	    $S2=($N1*$N2)/100;
        $M1=$N1-$S2;
			echo "<p> {$nom} Tu pago mensual es: {$M1} </p>";
		}
			
		   }
		
	?>
 </fieldset>

</form>
</p>

</body>
</html>