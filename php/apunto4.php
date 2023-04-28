<!DOCTYPE html>
<html>
<head>
	<title>Calculo de Promedio de Notas</title>
</head>
<body>
	<h1>Calculo de Promedio de Notas</h1>

	<form method="POST" action="apunto4.php">
		<label>Ingrese la primera nota:</label>
		<input type="number" name="nota1" required><br><br>
		<label>Ingrese la segunda nota:</label>
		<input type="number" name="nota2" required><br><br>
		<label>Ingrese la tercera nota:</label>
		<input type="number" name="nota3" required><br><br>
		<input type="submit" value="Calcular Promedio">
	</form>
	
    <?php
        if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {
            $nota1 = (int)$_POST['nota1'];
            $nota2 = (int)$_POST['nota2'];
            $nota3 = (int)$_POST['nota3'];
            $promedio = ($nota1 + $nota2 + $nota3) / 3;
            echo "El promedio de las notas es: " . $promedio;
        }
    ?>
</body>
</html>


