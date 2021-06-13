<div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">

    <div class="col d-flex align-items-center">

        <img class="me-3" src="<?php echo img ?>princicon.png" alt="" width="48" height="48">
        <div class="lh-1">
            <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
            <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
        </div>

    </div>

</div>

<div id="register">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Solicitud de Partidas</h2>
                <p class="lead">Completa el siguiente formulario con tus datos</p>
            </div>


            <div id="register-row" class="row justify-content-center align-items-baseline col-sm-10 col-md-8 text-light">
                <form action="" method="post" class="needs-validation pt-5" novalidate>

                    <div class="row g-3 ">
                        <div class="col-sm-6">
                            <label for="nombre" name="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Campo obligatorio
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Campo obligatorio
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">DNI</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" placeholder="Ingresa tu DNI" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="tu@ejemplo.com" required>
                            <div class="invalid-feedback">
                                Ingrese un email valido
                            </div>
                        </div>




                        <hr class="my-4">

                        <h4 class="mb-3 mt-0">Tipo de Partida</h4>

                        <div class="my-2 ">
                            <div class="form-check">
                                <input id="nacimiento" name="partida" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="nacimiento">Nacimiento</label>
                            </div>
                            <div class="form-check">
                                <input id="matrimonio" name="partida" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="matrimonio">Matrimonio</label>
                            </div>
                            <div class="form-check">
                                <input id="defuncion" name="partida" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="defuncion">Defuncion</label>
                            </div>
                        </div>

                        <div id="nacimiento" class="hide">
                            <div class="col-sm-6">
                                <label for="nombre" name="fecha" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" id="fecha" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                        </div>
                        <div id="matrimonio" class="hide">
                            <div class="col-sm-6">
                                <label for="matrimonio" name="libreta" class="form-label">N° de Libreta</label>
                                <input type="text" class="form-control" id="nombre" placeholder="" value="" maxlength="8" required >
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="matrimonio" name="acta" class="form-label">N° de Acta</label>
                                <input type="text" class="form-control" id="nombre" placeholder="" value="" maxlength="6" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                        </div>

                        <div id="defuncion" class="hide">
                            <div class="col-sm-6">
                                <label for="nombre" name="fechadef" class="form-label">Fecha de Defuncion</label>
                                <input type="date" class="form-control" id="nombre" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Campo obligatorio
                                </div>
                            </div>

                        </div>
                        <hr class="mt-3 ">

                        <button class="w-100 btn btn-info btn-lg " type="submit">Solicitar</button>
                </form>
            </div>
    </div>
</div>