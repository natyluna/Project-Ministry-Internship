<?php 

include('view/layout/header.php');

?>

<div class="container">

    <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">
    
        <div class="col d-flex align-items-center">

            <img class="me-3" src="view/assets/img/princicon.png" alt="" width="48" height="48">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
                <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
            </div>

        </div>
        
        <div class="col d-flex align-items-center flex-row-reverse">
            <a href="" class="btn btn-primary">Iniciar Sesion</a>
        </div>
       

    </div>
    

</div>
    

<div class="container">

    <div id="carouselExampleDark" class="carousel slide shadow-sm" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="view/assets/img/banners/uno.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="view/assets/img/banners/dos.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>
        <div class="carousel-item">
        <img src="view/assets/img/banners/tres.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>




    <div class="my-3 p-5 bg-body rounded-3 shadow-sm">

        <br>

        <div class="row">

            <div class="col-sm m-2">
                <div class="card tarje-main tarje-regcivil border-warning">
                    <div class="card-header bg-warning">
                        <i class="fas fa-fingerprint text-white fs-1"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="text-center text-white m-3 font-bebas">Registro Civil</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2">
                            <a href="" class="btn btn-warning text-white">INGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-sm m-2">
                <div class="card tarje-main tarje-segminis border-primary">
                    <div class="card-header color-bluecat">
                        <i class="fas fa-shield-alt text-white fs-1"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="text-center text-white m-3 font-bebas">Ministerio de Seguridad</h2>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2">
                            
                            <a href="" class="btn btn-primary">INGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm m-2">
                <div class="card tarje-main tarje-salminis border-danger">
                    <div class="card-header bg-danger">
                        <i class="fas fa-notes-medical text-white fs-1"></i>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="text-center text-white m-3 font-bebas">Ministerio de Salud</h2>  
                    </div>
                    <div class="card-footer text-muted">
                        <div class="d-grid gap-2">
                            <a href="" class="btn btn-danger">INGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br>
    
    </div>

    <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Contactos</h5>

                    <!-- Facebook -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#!"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">LINEA DIRECTA!</h5>

            <p>TELEFONO: +54 383 400-0000</p>
            <p>DIRECCION: CASA DE GOBIERNO</p>
        </div>
        <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Derechos de Autor @
        <a class="text-dark" href="#">Tuy Software</a>
    </div>
    <!-- Copyright -->
    </footer>

</div>








<?php 

include('view/layout/footer.php');

?>