<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="contenedor">
            <!-- NO ES NECESARIO DE FIELDSET Y DE LEGEND: son pocos parámetros a pedir en el formulario -->

            <div class="contenedor-formularios">

                <form class="formulario formulario-registrarse" action="" method="post">

                    <span class="formulario-titulo">Regístrate</span>
                    <label for="email">
                        <input class="formulario-input formulario-input_text formulario-input_text-1" id="email-r"
                            type="text" placeholder="Correo">
                    </label>
                    <label>
                        <input class="formulario-input formulario-input_text formulario-input_text-2" type="password"
                            placeholder="Contraseña">
                    </label>
                    <label for="password">
                        <input class="formulario-input formulario-input_text formulario-input_text-2" id="password-r"
                            type="password" placeholder="Repetir contraseña">
                    </label>
                    <input class="formulario-input formulario-submit" type="submit" value="Registrarse">
                    <span>¿Ya tienes una cuenta? <a href="#" class="formulario-link formulario-link_last">Inicia
                            Sesión</a></span>

                </form> <!-- FIN: FORMULARIO REGISTRATE -->

                <form class="formulario formulario-iniciar" action="validarLogin.php" method="post">

                    <div>
                        <span class="formulario-titulo">Iniciar Sesión</span>
                        <label for="email">
                            <input class="formulario-input formulario-input_text formulario-input_text-1" id="email" name="email"
                                type="text" placeholder="Email">
                        </label>
                        <label for="password">
                            <input class="formulario-input formulario-input_text formulario-input_text-2" id="password" name="password"
                                type="password" placeholder="Password">
                        </label>
                        <div class="formulario_utilidades">
                            <div class="recordarme">
                                <input type="checkbox" id="recordarme" name="seleccionar" value="aceptado">
                                <label for="recordarme">Recordarme</label>
                            </div>
                            <a href="#" class="formulario-link">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>

                    <div>
                        <input class="formulario-input formulario-submit" type="submit" value="Enviar">
                        <span>¿No tienes una cuenta? <a href="#"
                                class="formulario-link formulario-link_last">Regístrate</a></span>
                    </div>

                </form> <!-- FIN: FORMULARIO INICIAR SESION -->

            </div>

        </div>
    </main>
</body>

</html>