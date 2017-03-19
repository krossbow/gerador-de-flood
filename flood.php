<!doctype html>
<html>

<head>
<meta charset="utf-8" />
<title>Gerador de Flood</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body><center>
<form method="post">
<input type="text" placeholder="palavra para floodar" name="palavra" autocomplete="off" />

<br />

<select name="separador">
<option value="espaco">separar com espaço</option>
<option value="enter">separar com enter</option>
</select>

<br />

<input type="number" placeholder="quantidade" name="numero" />

<br />

<input type="submit" value="gerar" />
</form><br /><br />

<?php
	$separadores = array("espaco" => " ", "enter" => "\n");

	if ($_POST["palavra"] && $_POST["numero"] != "") {
		while ($_POST["numero"]) {
			echo $_POST["palavra"] . $separadores[$_POST["separador"]];
			$_POST["numero"]--;
		}
	}
?>

</center></body>

</html>
