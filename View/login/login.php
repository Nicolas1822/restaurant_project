<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food soft</title>
    <link rel="stylesheet" href="../Public/css/styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Poppins:wght@400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container__all">
            <div class="box__back">
                <div class="box__back--login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__star-session">Iniciar sesión</button>
                </div>

                <div class="box__back--register">
                    <h3>¿Aun no tiene una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__register">Registrarse</button>
                </div>
            </div>

            <!-- Form of login and register -->
            <div class="container__login--register">
                <!-- Login -->
                <form action="UsersController.php" class="form__login" method="POST">
                    <h2>Iniciar Sesión</h2>
                    <input type="hidden" name="action" value="login">
                    <input type="text" name="userName" placeholder="Nombre de usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <?php
                        if (isset($_SESSION['error']))
                        {
                            echo $_SESSION['error'];
                        }
                    ?>
                    <button>Entrar</button>
                </form>
                <!-- Register -->
                <form action="UsersController.php" class="form__register" method="POST">
                    <h2>Registrate</h2>
                    <input type="hidden" name="action" value="register">
                    <input type="text" placeholder="Nombre Completo" name="fullName" required>
                    <input type="email" placeholder="Correo Electronico" name="email" required>
                    <input type="text" placeholder="Nombre de usuario" name="userName" required>
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>

    <script src="../public/js/login.js"></script>
</body>
</html>