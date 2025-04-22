<?php

#Verificamos que el metodo sea el correcto (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #Verificamos que los datos enviados esten definidos
    if (!isset($_POST["email"]) || !isset($_POST["password"])) {
        echo "<p>NO se enviaron los Datos Completos</p>";
        exit;
    }

    #Guardamos los datos enviados
    $email = $_POST["email"];
    $contrasenia = $_POST["password"];

    #Convertimos a Minusculas el email
    $email = strtolower($email);

    #Verificamos si los datos no este vacio
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo "<p>Los Datos están Vacios</p>";
        exit;
    }

    #Buscamos si el @gmail.com existe en el dato
    if (!str_contains($email, "@gmail.com")) {
        echo "<p>Error: Email {$email} INCORRECTO</p>";
        exit;
    }

    #Verificamos el checkbox esta marcado
    if (!isset($_POST["seleccionar"])) {
        echo "<p>Error: Debe seleccionar Recordarme</p>";
        exit;
    }
    $seleccionar = $_POST["seleccionar"];

    #Enviamos a otro formulario si los datos son correcto
    header("Location: respuesta.php");
} else {
    echo "Error: Metodo Incorrecto";
    exit;
}
