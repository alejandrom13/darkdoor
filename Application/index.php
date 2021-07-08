<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--========== SWIPER CSS ==========-->
    <link rel="stylesheet" href="assets/Index/css/swiper-bundle.min.css">

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/Index/css/styles.css">

    <title>Bienvenido a Darkdoor</title>
</head>
<body>
<!--========== HEADER ==========-->
<header class="header">
    <nav class="nav bd-container">
        <a href="#" class="nav__logo"><img src="assets/Index/img/logo.svg" alt=""></a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="#" class="nav__link">Inicio</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Precios</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Sobre Nosotros</a></li>
                <li class="nav__item"><a href="Views/Login/Login.php" class="nav__button">Acceder</a></li>

            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<!--========== MAIN ==========-->
<main class='main'>
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <!--========== SECRET 1 ==========-->
            <section class="islands swiper-slide">
                <img src="assets/Index/img/background_1.svg" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Secretos</h2>
                        <h1 class="islands__title">Seguridad</h1>
                        <p class="islands__description">Darkdoor es el mejor lugar para guardar tus secretos, estarán en un lugar seguro con nosotros.😎</p>
                        <a href="#" class="islands__button">Comenzar <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div>


                </div>
            </section>

            <!--========== SECRET 2 ==========-->
            <section class="islands swiper-slide">
                <img src="assets/Index/img/background_2.svg" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Secretos</h2>
                        <h1 class="islands__title">Rápido</h1>
                        <p class="islands__description">Accede a tus secretos de una forma rápida, siempre a tu alcance.</p>
                        <a href="#" class="islands__button">Comenzar <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div>

                </div>
            </section>

        </div>
    </div>

    <!--========== CONTROLS ==========-->
    <div class="controls gallery-thumbs">
        <div class="controls__container swiper-wrapper">
            <img src="assets/Index/img/1.svg" alt="" class="controls__img swiper-slide">
            <img src="assets/Index/img/2.svg" alt="" class="controls__img swiper-slide">
        </div>
    </div>
</main>

<!--========== GSAP ==========-->
<script src="assets/Index/js/gsap.min.js"></script>

<!--========== SWIPER JS ==========-->
<script src="assets/Index/js/swiper-bundle.min.js"></script>

<!--========== MAIN JS ==========-->
<script src="assets/Index/js/main.js"></script>
</body>
</html>
