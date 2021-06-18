<?php
include('config/config.php');
include(header);
?>


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
                    <h2 class="text-uppercase"> Gestion de Roles</h2>
                </div>

                <div class="col-sm-4 ">
                    <form action="" class="form-buscar float-end ">
                        <input type="text" placeholder="">
                        <input type="button" value="Buscar" class="btn color-bluecat text-white">

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
                <th>Rol</th>
                <th>Agregar Rol</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>40123456</th>
                <td>Juan</td>
                <td>Perez</td>
                <td>Empleado <a href="#" class="btn btn-danger btn-sm " style="font-size:7px;"> <i class="fas fa-times"></i> </a></td>
                <td>
                <div class="row d-flex justify-content-center">
                    <div class="col-5 pe-0">
                        <select class="form-select " id="roles" required>

                            <option value="">Administrador</option>
                            <option value="">Empleado</option>
                            <option value="">Usuario</option>
                            <option value="">Funcionario</option>
                        </select>
                    </div>
                    <div class="col-4 d-flex justify-content-start ">
                       <input class="btn btn-success text-white fw-bold " type="button" value="+">
                    </div>
                    </div>

                </td>


            </tr>
            <tr>
                <th>41258369</th>
                <td>Maria</td>
                <td>Soria</td>
                <td>Administrador <a href="#" class="btn btn-danger btn-sm "  style="font-size:7px;"> <i class="fas fa-times"></i> </a></td>

                <td>

                    <div class="row d-flex justify-content-center">
                    <div class="col-5 pe-0">
                        <select class="form-select " id="roles" required>

                            <option value="">Administrador</option>
                            <option value="">Empleado</option>
                            <option value="">Usuario</option>
                            <option value="">Funcionario</option>
                        </select>
                    </div>
                    <div class="col-4 d-flex justify-content-start ">
                       <input class="btn btn-success  text-white fw-bold" type="button" value="+">
                    </div>
                    </div>
                    




                </td>
            </tr>


        </tbody>
    </table>
</div>

<?php

include(footer);

?>