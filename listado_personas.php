<?php 


include_once('config/config.php');
include("models/PersonaModel.php");


if(isset($_POST['busqueda'])) {
    $metodoVista = 'Busqueda';
    $busk = $_POST['busqueda'];
    $personas = BuscarPersonas($con,$busk);
} else {
    $metodoVista = 'Todo';
    $personas = MostrarPersonas($con);
}


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
                    <p class="color-bluecat p-1 d-inline-block rounded text-white">Personas: <?php echo sizeof($personas)?></p>

                   
                </div>


                
                <div class="col-sm-4 ">

                    <form action="listado_personas.php" method="post">
                        <div class="form-group d-flex">
                            <input type="text" name='busqueda' class="form-control p-1" placeholder="busqueda" required="required">
                            <button type="submit" class="btn btn-success text-white">Buscar</button>
                        </div>
                        <br>
                        <?php if($metodoVista == 'Busqueda'){echo '<a href="listado_personas.php" class="btn btn-warning text-white col-12">Ver Todo</a>';} ?>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="my-3 p-5 bg-body rounded-3 shadow-sm">

   
    <?php if($metodoVista == 'Busqueda'){echo '<h6 class="d-flex justify-content-end">Filtrado Por:  <strong>'.$busk.'</strong></h6>';} ?>
    <table class="table table-bordered text-center">
        <thead class="color-bluecat text-white">
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nac.</th>
                <th>Sexo</th>
                <th>Ubicacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
              
                foreach ($personas as $persona) { ?>

                    <th><?php echo $persona['dni'] ?></th>
                    <th class="text-capitalize"><?php echo $persona['nombre'] ?></th>
                    <th class="text-capitalize"><?php echo $persona['apellido'] ?></th>
                    <th><?php echo $persona['fecha_nac'] ?></th>
                    <th><?php 
                    if($persona['sexo'] == 'masculino'){
                        echo '<i class="fas fa-mars text-primary"></i>';
                    } else {
                        echo '<i class="fas fa-venus text-danger"></i>';
                    }
                    ?></th>
                    <th><?php echo 'lat:'.$persona['latitud']; echo ' lon:'.$persona['longitud'] ?></th>

                    <td class="text-center">
                        <!--  <a href="#" class="btn btn-muted"> <i class="far fa-eye"></i></a> -->
                        <a href="editarPersona.php?nombre=<?php echo $persona['nombre'] ?>&apellido=<?php echo $persona['apellido'] ?>&dni=<?php echo $persona['dni']?>" class="btn color-bluecat text-white btn-sm"> <i class="far fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger btn-sm"> <i class="fas fa-times"></i> </a>
                        <a href="#" class="btn btn-success btn-sm"> <i class="fas fa-user-circle"></i> Perfil</a>

                    </td>
            </tr>

        <?php  } ?>

        </tbody>
    </table>
    </div>
</div>

<?php include_once(footer); ?>