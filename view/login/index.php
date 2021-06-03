

<?php include('../layout/links.php') ?>

<?php $ministerio="Ministerio de educación"; ?>
<body class="body-login">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-16 px-5 ">
                        <form id="login-form" class="form" action="" method="post">
                            <div class="text-center">
                            <img class="me-3 justify-content-center" src="../assets/img/princicon.png" alt="" width="48" height="48">
                            </div>
                            <h3 class="text-center text-light"><?php echo "$ministerio";  ?></h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Contraseña:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label for="remember-me" class="text-light "><span>Recuerdame</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
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
</body>

<?php include('../layout/footer.php') ?>