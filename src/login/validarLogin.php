<?php

#Verificamos que el metodo sea el correcto (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #Guardamos los datos enviados
    $email = $_POST["email"];
    $contrasenia = $_POST["password"];

    #Convertimos a Minusculas
    echo strtolower($email);
    exit;

    echo strpos($email, "@gmail.com");

    #Verificamos que los datos enviados esten definidos
    if (!isset($usuario) || !isset($contrasenia)) {
        echo "<p>NO se enviaron los Datos Completos</p>";
        exit;
    }

    #Verificamos si los datos no este vacio
    if (empty($_POST["user"]) || empty($_POST["password"])) {
        echo "<p>Los Datos esta Vacios</p>";
        exit;
    }

    #Enviamos a otro formulario si los datos son correcto
    header("Location: respuesta.php");
} else {
    echo "Error: Metodo Incorrecto";
    exit;
}
