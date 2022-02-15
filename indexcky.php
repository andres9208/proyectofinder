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
                <h2>Iniciar Sesión</h2> 

                <form class="mt-5">                    
                    <div class="campo-cky mb-5">
                        <input type="text" name="user" placeholder=" " autocomplete="off" id="user" class="forminput">  
                        <label for="user" class="formlabel">Usuario</label>
                        <div class="campo-cky__icon">
                            <img src="./assets/img/samu-icon-user.svg" alt="Gráfico Finder">
                        </div>
                    </div>
                    
                    <div class="campo-cky mb-5">
                        <input type="password" name="password" placeholder=" " autocomplete="off" id="password" class="forminput">
                        <label class="formlabel">Contraseña</label>
                        <div class="campo-cky__icon">
                            <img src="./assets/img/samu-icon-password.svg" alt="Gráfico Finder">
                        </div>
                    </div>

                    <button class="btn-cky__ingresar mb-4" type="submit">Ingresar</button>   
                    
                    <a href="#">¿Has olvidado tu contraseña?</a>
                </form>
            </div>
        </div>            
    </div>
    

<?php include('foo.php'); ?>
    