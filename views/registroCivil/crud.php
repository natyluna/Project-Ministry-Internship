
<?php $ministerio="Ministerio de educación"; ?>

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




<div class="container p-4">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2> Constancias</h2></div>
                        <div class="col-sm-4">
                            <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Buscar...">
                            </div>
                        </div>
                       </div>
                    </div>
                </div>

                    <table class="table table-bordered">
                        <thead class=" table-primary">
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Constancia</th>
                                <th>Administrar</th>
                            </tr>
                        </thead>

                     <tbody>
                        <tr>
                            <th>1</th>
                            <td>Juan</td>
                            <td>Perez</td>
                            <td>Matrimonio</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-muted"> <i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
                                <a href="#" class="btn btn-info"> <i class="fas fa-check"></i></a>
                                <a href="#" class="btn btn-danger"> <i class="fas fa-times"></i> </a>

                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jon</td>
                            <td>Soria</td>
                            <td>Defuncion</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-info"> <i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
                                <a href="#" class="btn btn-info"> <i class="fas fa-check"></i></a>
                                <a href="#" class="btn btn-danger"> <i class="fas fa-times"></i> </a>

                            </td>
                        </tr>
                      </tbody>
                    </table>
    </div>