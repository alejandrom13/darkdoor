<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../../assets/Login/css/styles.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Accede a Darkdoor</title>
</head>
<body>
<div class="logo">
    <a href="">
        <img src="../../assets/Login/img/logo.svg" alt="">
    </a>
</div>


<div class="login">
    <div class="login__content">
        <div class="login__img">
            <img src="../../assets/Login/img/img-login.svg" alt="">
        </div>

        <div class="login__forms">
            <form action="" class="login__registre" id="login-in">
                <h1 class="login__title">Iniciar Sesión</h1>

                <div class="login__box">
                    <i class='bx bx-at login__icon'></i>
                    <input type="text" placeholder="Correo electrónico" class="login__input">
                </div>

                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                    <input type="password" placeholder="Contraseña" class="login__input">
                </div>

                <a href="#" class="login__forgot">Olvidaste tu contraseña?</a>

                <a href="#" class="login__button">Acceder</a>

                <div>
                    <span class="login__account">Aun no tienes cuenta ?</span>
                    <span class="login__signin" id="sign-up">Registrarse</span>
                </div>
            </form>

            <form action="" class="login__create none" id="login-up">
                <h1 class="login__title">Crear una cuenta</h1>

                <div class="login__box">
                    <i class='bx bx-user login__icon'></i>
                    <input type="text" placeholder="Nombre" class="login__input">
                </div>

                <div class="login__box">
                    <i class='bx bx-at login__icon'></i>
                    <input type="text" placeholder="Correo electrónico" class="login__input">
                </div>

                <div class="login__box">
                    <i class='bx bx-lock-alt login__icon'></i>
                    <input type="password" placeholder="Contraseña" class="login__input">
                </div>

                <a href="#" class="login__button">Crear cuenta</a>

                <div>
                    <span class="login__account">Ya tienes cuenta ?</span>
                    <span class="login__signup" id="sign-in">Iniciar sesión</span>
                </div>


            </form>
        </div>
    </div>
</div>

<!--===== MAIN JS =====-->
<script src="../../assets/Login/js/main.js"></script>
</body>
</html>