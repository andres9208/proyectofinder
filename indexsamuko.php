<?php include('head.php'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/choma.css">

    <div class="the-container">
        <div class="the-container__left">
            <div class="the-container__left__inner">
                <h1>Maneja la info de tus clientes de una manera fácil y rápida</h1>
                <img class="mt-5" src="./assets/img/senorpng.png" alt="Gráfico Finder">
            </div>
        </div>

        <div class="the-container__right">
            <div class="the-container__right__header">
                <a href="#">
                    <img src="./assets/img/logofinder.png" alt="Finder Logo">
                </a>
                <a href="#" class="samuBtn__register">Registrarme</a>
            </div>
            <div class="the-container__right__inner">
                <h2>Iniciar Sesión </h2>

                <form class="mt-5"> 
                    <div class="the-field mb-5">
                        <input type="text" name="user" placeholder=" " autocomplete="off" id="user" class="forminput">
                        <label for="user" class="formlabel">Usuario</label>
                        <div class="the-field__icon">
                            <img src="./assets/img/samu-icon-user.svg" alt="Gráfico Finder">
                        </div>
                    </div>

                    <div class="the-field mb-5">
                        <input type="password" name="password" placeholder=" " autocomplete="off" id="password" class="forminput">
                        <label class="formlabel" for="password">Contraseña</label>
                        <div class="the-field__icon">
                            <img src="./assets/img/samu-icon-password.svg" alt="Gráfico Finder">
                        </div>
                    </div>

                    <button class="samuBtn__signin mb-4">Ingresar</button>

                    <a href="#">¿Has olvidado tu contraseña?</a>
                </form>
            </div>
        </div>
    </div>

<?php include('foo.php'); ?>