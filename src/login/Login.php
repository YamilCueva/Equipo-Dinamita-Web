<?php

require_once("Login.php");

#Obtener los datos
$user = $_POST["GET"];
$password = $_POST["GET"];

echo "<pre>";
echo $user;
echo "</pre>";
exit;

#Comprobar los datos
if (empty($user)) echo "El Usuario esta vacio";
if (empty($password)) echo "La Contraseña esta vacio";
