<?php $ministerio = "Ministerio de educación"; ?>

<div class="container">

    <div class="d-flex align-items-center p-3 my-3 text-white rounded shadow-sm color-bluecat">

        <div class="col d-flex align-items-center">

            <img class="me-3" src="<?php echo img ?>princicon.png" alt="" width="48" height="48">
            <div class="lh-1">
                <h1 class="h5 mb-0 text-white lh-1 animate__animated animate__headShake">Ministerios y Tramites</h1>
                <h6 class="animate__animated animate__headShake">Gobierno de Catamarca</h6>
            </div>

        </div>

    </div>

</div>




<div class="container p-4">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row ">
                <div class="col-sm-8">
                    <h2 class="text-uppercase"> Listado de Personas</h2>
                </div>

                <div class="col-sm-4 ">
                    <form action="" class="form-buscar float-end ">
                        <input type="text" placeholder="">
                        <input type="button" value="Buscar" class="btn color-bluecat text-white" >


                    </form>



                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <thead class="color-bluecat text-white">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nac.</th>
                <th>Sexo</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>40123456</th>
                <td>Juan</td>
                <td>Perez</td>
                <td>10/10/1997</td>
                <td>Masculino</td>
                <td>Maipu 680</td>
                <td class="text-center">
                    <!--  <a href="#" class="btn btn-muted"> <i class="far fa-eye"></i></a> -->
                    <a href="#" class="btn color-bluecat text-white btn-sm"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </a>
                    <a href="#" class="btn btn-success btn-sm"> <i class="fas fa-check"></i></a>

                </td>
            </tr>
            <tr>
                <th>41258369</th>
                <td>Maria</td>
                <td>Soria</td>
                <td>20/05/1994</td>
                <td>Femenino</td>
                <td>Junin 430</td>
                <td class="text-center">
                    <!-- <a href="#" class="btn btn-info"> <i class="far fa-eye"></i></a> -->
                    <a href="#" class="btn color-bluecat text-white btn-sm"> <i class="far fa-edit"></i> </a>
                    <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </a>
                    <a href="#" class="btn btn-success btn-sm"> <i class="fas fa-check"></i></a>

                </td>
            </tr>


        </tbody>
    </table>
</div>