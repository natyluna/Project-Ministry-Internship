<?php 

include('view/layout/header.php');

?>

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




    <div class="my-3 p-5 bg-body rounded shadow-sm">

        <br>

        <div class="row">

            <div class="col m-2">
                <div class="card tarje-main tarje-regcivil">
                    <h3 class="text-center text-white m-3">Registro Civil</h3>
                </div>
            </div>
    
            <div class="col m-2">
                <div class="card tarje-main tarje-segminis">
                    <h3 class="text-center text-white m-3">Ministerio de Seguridad</h3>
                </div>
            </div>

            <div class="col m-2">
                <div class="card tarje-main tarje-salminis">
                    <h3 class="text-center text-white m-3">Ministerio de Salud</h3>
                </div>
            </div>

        </div>

        <br>
    
    </div>

</div>









<?php 

include('view/layout/footer.php');

?>