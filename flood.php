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
if ($_POST["palavra"] != "" && $_POST["separador"] == "espaco" && $_POST["numero"] != "") {
$f = 0;
while ($f < $_POST["numero"]) {
echo $_POST["palavra"] . " ";
$f++;
}
}
elseif ($_POST["palavra"] != "" && $_POST["separador"] == "enter" && $_POST["numero"] != "") {
$f = 0;
while ($f < $_POST["numero"]) {
echo $_POST["palavra"] . "<br />";
$f++;
}
}
?>

</center></body>

</html>