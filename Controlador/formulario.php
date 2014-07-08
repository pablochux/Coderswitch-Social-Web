<!DOCTYPE html>
<html>
<head>
<title> Registro </title>
</head>
<body>

<?php

$user = $_POST["user"];

$pass = $_POST["pass"];

echo "<h1>";
var_dump($user);
echo "</h1>";
echo "<br>";
echo "<h1>";
var_dump($pass);
echo "</h1>";

?>

</body>
</html>