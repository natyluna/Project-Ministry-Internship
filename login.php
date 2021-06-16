
<?php 

    include('config/config.php');
    $ministerio="Ministerio de educación"; 
    include(header);

    if(isset($_GET['minis'])){
        echo $_GET['minis'];
        $ministerio = $_GET['minis'];
    } else {
        echo 'No hay GET';
    }

?>

    <div class="container">

        <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">
        
            <div class="col d-flex align-items-center">

                <img class="me-3" src="<?php echo img?>princicon.png" alt="" width="48" height="48">
                <div class="lh-1">
                    <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
                    <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
                </div>

            </div>

        </div>

    </div>
    
    <br>
    <br>
    <br>

    <div class="container">

        <div class="row">

            <div class="col">

                <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        
                        <h2 class="text-center"><?php echo $ministerio ?></h2>	
                        <div class="form-group">
                            <input type="number" class="form-control p-1" placeholder="DNI" required="required">
                            
                            <input type="password" class="form-control p-1" placeholder="Clave" required="required">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary col-12">Iniciar Sesion</button>
                        
                        
                        <p class="text-center"><a href="#">Olvidaste tu Contraseña?</a></p>     
                    </form>
                    <p class="text-center small">No tenes Clave? <a href="#">Registrate</a></p>

                    <?php
                    

                        

                    ?>
                </div>

            </div>

            <div class="col">

                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-3 shadow-lg" style="background-image: url('<?php echo img?>loginbg2.jpg');">
                
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">VIVE, SIENTE, RECORRE</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                            <img src="<?php echo img?>princicon.png" alt="Bootstrap" width="32" height="32" class="rounded-circle">    
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                            <small>Catamarca, Valle Viejo</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                            <small>Cuesta del Portezuelo</small>
                        </li>
                        </ul>

                    </div>
                    
                </div>

            </div>

        </div>

    </div>


<!-- /*
<div class="body-login">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-16 px-5 ">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="text-center">
                            <img class="me-3 justify-content-center" src="<?php /* echo img?>princicon.png" alt="" width="48" height="48">
                            </div>
                            <h3 class="text-center text-light"><?php echo "$ministerio"; */ ?></h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Contraseña:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="remember-me" class="text-light "><span>Recuerdame</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            </div>
                            <div class="d-grid gap-2">
                            <input type="submit" name="submit" class="btn btn-info btn-md btn-block " value="Ingresar">
                            </div>
                            <div id="register-link" class="text-center">
                                <a href="#" class="text-light ">Registrarse aqui</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
-->
<?php

include(footer);

?>