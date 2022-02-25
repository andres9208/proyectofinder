<?php include('head.php'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap" rel="stylesheet">
                                       
    <div class="container-cky">
        <div class="container-cky__izquierda"> 
            <div class="container-cky__izquierda__inner">                           
                <h1>Maneja la info de tus clientes de una manera fácil y rápida</h1>                    
                <img class="mt-5" src="./assets/img/senorpng.png"  alt="grafico finder">   
            </div>                                                                
        </div>

        <div class="container-cky__derecha">
            <div class="container-cky__derecha__header">
                <a href="#">
                    <img src="./assets/img/logofinder.png"  alt="Finder logo"> 
                </a>                
                <a href="#" class="btn-cky__registro">Registrarme</a>                
            </div>  

            <div class="container-cky__derecha__inner">
                <h2>Restablece tu contraseña</h2> 
                <h3>Te enviaremos un enlace para restablecer tu contraseña</h3>

                <form class="mt-5">                    
                    <div class="campo-cky mb-5">
                        <input type="text" name="correo" placeholder=" " autocomplete="off" id="correo" class="forminput">  
                        <label for="correo" class="formlabel">Correo</label>
                        <div class="campo-cky__icon">
                            <img src="./assets/img/samu-icon-email.svg" alt="Correo Finder">
                        </div>
                    </div>

                    <button class="btn-cky__enviarcorreo mb-4" type="submit">Enviar correo electrónico</button>   
                    
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </form>
                <a href="#" class="btn-cky__login mt-5">Iniciar Sesión</a>   
            </div>
        </div>            
    </div>
    

<?php include('foo.php'); ?>
    