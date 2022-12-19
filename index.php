<html>
	<head>
		<title> Aplicação PHP </title>
	</head>

	<body>
		<form action method="post" action="index.php">

		Nome: <input type="text" name="nome"> <br>
		Idade: <input type="text" name="idade"> <br>
			<input type="submit" value="enviar">

		</form>

	</body>


</html>

<?php

echo "Olá". $_POST['nome']."<br>";

echo "Você tem:". $idade;

?>
