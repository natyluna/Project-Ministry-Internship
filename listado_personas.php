<?php 


include_once('config/config.php');


include("models/PersonaModel.php");
$personas = MostrarPersonas($con);

include(header);


?>

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
                <th>Fecha Nac.</th>
                <th>Sexo</th>
                <th>Latitud</th>
                <th>Longitud</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
              
                foreach ($personas as $persona) { ?>

                    <th><?php echo $persona['dni'] ?></th>
                    <th><?php echo $persona['nombre'] ?></th>
                    <th><?php echo $persona['apellido'] ?></th>
                    <th><?php echo $persona['fecha_nac'] ?></th>
                    <th><?php echo $persona['sexo'] ?></th>
                    <th><?php echo $persona['latitud'] ?></th>
                    <th><?php echo $persona['longitud'] ?></th>

                    <td class="text-center">
                        <!--  <a href="#" class="btn btn-muted"> <i class="far fa-eye"></i></a> -->
                        <a href="editarPersona.php?nombre=<?php echo $persona['nombre'] ?>&apellido=<?php echo $persona['apellido'] ?>&dni=<?php echo $persona['dni']?>" class="btn color-bluecat text-white btn-sm"> <i class="far fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </a>
                        <a href="#" class="btn btn-success btn-sm"> <i class="fas fa-check"></i></a>

                    </td>
            </tr>

        <?php  } ?>

        </tbody>
    </table>
    <p class="color-bluecat p-1 d-inline-block  rounded text-white">Personas: <?php echo sizeof($personas)?></p>
</div>

<?php include_once(footer); ?>