<?php

include('config/config.php');
include(header);
include("models/PersonaModel.php");

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

<div id="register">
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2 class="font-weight-bold">Edicion de Personas</h2>
        <p class="lead">Modifica los datos de la persona</p>
      </div>

      <div id="register-row" class="row justify-content-center align-items-center col-sm-10 col-md-8 text-dark">

        <form action="" class="needs-validation" novalidate method="post">

          <div class="row g-3 pt-5">
          <small>(<strong class="text-danger h-1">*</strong>) Campos obligatorios</small>
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre <strong class="text-danger h-1">*</strong></label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="<?php if(isset($_GET['nombre'])){echo $_GET['nombre']; }?>" placeholder="" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-sm-6">
              <label for="apellido" class="form-label">Apellido <strong class="text-danger h-1">*</strong></label>
              <input type="text" name="apellido" class="form-control" id="apellido" value="<?php if(isset($_GET['apellido'])){echo $_GET['apellido']; }?>" placeholder="" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-12">
              <label for="dni" class="form-label">DNI <strong class="text-danger h-1">*</strong></label>
              <div class="input-group has-validation">
                <input type="text" name="dni" class="form-control" id="username" value="<?php if(isset($_GET['dni'])){echo $_GET['dni']; }?>" placeholder="Ingresa tu DNI" required>
                <div class="invalid-feedback">
                  Campo obligatorio
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <strong class="text-danger h-1">*</strong></label>
              <input type="email" name="email" value="<?php if(isset($_GET['email'])){echo $_GET['email']; }?>" class="form-control" id="email" placeholder="tu@ejemplo.com" required>
              <div class="invalid-feedback">
                Ingrese un email valido
              </div>
            </div>

            <div class="col-12">
              <label for="date" class="form-label">Fecha de nacimiento <strong class="text-danger h-1">*</strong></label>
              <input type="date" class="form-control" value="<?php if(isset($_GET['nacimiento'])){echo $_GET['nacimiento']; }?>" name="nacimiento" min="1900-01-01" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-12">
              <label for="tel" class="form-label">T??lefono <strong class="text-danger h-1">*</strong></label>
              <input type="tel" value="<?php if(isset($_GET['telefono'])){echo $_GET['telefono']; }?>" name="telefono" class="form-control">
              <small>Ejemplo: 3834 858585</small>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-md-4">
              <label for="pais" class="form-label">Nacionalidad <strong class="text-danger h-1">*</strong></label>
              <select class="form-select" id="pais" name="nacionalidad" required>
                <option value="">Choose...</option>
                <option value="AF">Afganist??n</option>
                <option value="AL">Albania</option>
                <option value="DE">Alemania</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Ant??rtida</option>
                <option value="AG">Antigua y Barbuda</option>
                <option value="AN">Antillas Holandesas</option>
                <option value="SA">Arabia Saud??</option>
                <option value="DZ">Argelia</option>
                <option value="AR" selected>Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaiy??n</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrein</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BE">B??lgica</option>
                <option value="BZ">Belice</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermudas</option>
                <option value="BY">Bielorrusia</option>
                <option value="MM">Birmania</option>
                <option value="BO">Bolivia</option>
                <option value="BA">Bosnia y Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brasil</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="BT">But??n</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Camboya</option>
                <option value="CM">Camer??n</option>
                <option value="CA">Canad??</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CY">Chipre</option>
                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, Rep??blica Democr??tica del</option>
                <option value="KR">Corea</option>
                <option value="KP">Corea del Norte</option>
                <option value="CI">Costa de Marf??l</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croacia (Hrvatska)</option>
                <option value="CU">Cuba</option>
                <option value="DK">Dinamarca</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egipto</option>
                <option value="SV">El Salvador</option>
                <option value="AE">Emiratos ??rabes Unidos</option>
                <option value="ER">Eritrea</option>
                <option value="SI">Eslovenia</option>
                <option value="ES">Espa??a</option>
                <option value="US">Estados Unidos</option>
                <option value="EE">Estonia</option>
                <option value="ET">Etiop??a</option>
                <option value="FJ">Fiji</option>
                <option value="PH">Filipinas</option>
                <option value="FI">Finlandia</option>
                <option value="FR">Francia</option>
                <option value="GA">Gab??n</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GD">Granada</option>
                <option value="GR">Grecia</option>
                <option value="GL">Groenlandia</option>
                <option value="GP">Guadalupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GY">Guayana</option>
                <option value="GF">Guayana Francesa</option>
                <option value="GN">Guinea</option>
                <option value="GQ">Guinea Ecuatorial</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="HT">Hait??</option>
                <option value="HN">Honduras</option>
                <option value="HU">Hungr??a</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IQ">Irak</option>
                <option value="IR">Ir??n</option>
                <option value="IE">Irlanda</option>
                <option value="BV">Isla Bouvet</option>
                <option value="CX">Isla de Christmas</option>
                <option value="IS">Islandia</option>
                <option value="KY">Islas Caim??n</option>
                <option value="CK">Islas Cook</option>
                <option value="CC">Islas de Cocos o Keeling</option>
                <option value="FO">Islas Faroe</option>
                <option value="HM">Islas Heard y McDonald</option>
                <option value="FK">Islas Malvinas</option>
                <option value="MP">Islas Marianas del Norte</option>
                <option value="MH">Islas Marshall</option>
                <option value="UM">Islas menores de Estados Unidos</option>
                <option value="PW">Islas Palau</option>
                <option value="SB">Islas Salom??n</option>
                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                <option value="TK">Islas Tokelau</option>
                <option value="TC">Islas Turks y Caicos</option>
                <option value="VI">Islas V??rgenes (EEUU)</option>
                <option value="VG">Islas V??rgenes (Reino Unido)</option>
                <option value="WF">Islas Wallis y Futuna</option>
                <option value="IL">Israel</option>
                <option value="IT">Italia</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Jap??n</option>
                <option value="JO">Jordania</option>
                <option value="KZ">Kazajist??n</option>
                <option value="KE">Kenia</option>
                <option value="KG">Kirguizist??n</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="LA">Laos</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Letonia</option>
                <option value="LB">L??bano</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituania</option>
                <option value="LU">Luxemburgo</option>
                <option value="MK">Macedonia, Ex-Rep??blica Yugoslava de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malasia</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldivas</option>
                <option value="ML">Mal??</option>
                <option value="MT">Malta</option>
                <option value="MA">Marruecos</option>
                <option value="MQ">Martinica</option>
                <option value="MU">Mauricio</option>
                <option value="MR">Mauritania</option>
                <option value="YT">Mayotte</option>
                <option value="MX">M??xico</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavia</option>
                <option value="MC">M??naco</option>
                <option value="MN">Mongolia</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">N??ger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk</option>
                <option value="NO">Noruega</option>
                <option value="NC">Nueva Caledonia</option>
                <option value="NZ">Nueva Zelanda</option>
                <option value="OM">Om??n</option>
                <option value="NL">Pa??ses Bajos</option>
                <option value="PA">Panam??</option>
                <option value="PG">Pap??a Nueva Guinea</option>
                <option value="PK">Paquist??n</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Per??</option>
                <option value="PN">Pitcairn</option>
                <option value="PF">Polinesia Francesa</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="UK">Reino Unido</option>
                <option value="CF">Rep??blica Centroafricana</option>
                <option value="CZ">Rep??blica Checa</option>
                <option value="ZA">Rep??blica de Sud??frica</option>
                <option value="DO">Rep??blica Dominicana</option>
                <option value="SK">Rep??blica Eslovaca</option>
                <option value="RE">Reuni??n</option>
                <option value="RW">Ruanda</option>
                <option value="RO">Rumania</option>
                <option value="RU">Rusia</option>
                <option value="EH">Sahara Occidental</option>
                <option value="KN">Saint Kitts y Nevis</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa Americana</option>
                <option value="SM">San Marino</option>
                <option value="VC">San Vicente y Granadinas</option>
                <option value="SH">Santa Helena</option>
                <option value="LC">Santa Luc??a</option>
                <option value="ST">Santo Tom?? y Pr??ncipe</option>
                <option value="SN">Senegal</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leona</option>
                <option value="SG">Singapur</option>
                <option value="SY">Siria</option>
                <option value="SO">Somalia</option>
                <option value="LK">Sri Lanka</option>
                <option value="PM">St Pierre y Miquelon</option>
                <option value="SZ">Suazilandia</option>
                <option value="SD">Sud??n</option>
                <option value="SE">Suecia</option>
                <option value="CH">Suiza</option>
                <option value="SR">Surinam</option>
                <option value="TH">Tailandia</option>
                <option value="TW">Taiw??n</option>
                <option value="TZ">Tanzania</option>
                <option value="TJ">Tayikist??n</option>
                <option value="TF">Territorios franceses del Sur</option>
                <option value="TP">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad y Tobago</option>
                <option value="TN">T??nez</option>
                <option value="TM">Turkmenist??n</option>
                <option value="TR">Turqu??a</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ucrania</option>
                <option value="UG">Uganda</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekist??n</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="YE">Yemen</option>
                <option value="YU">Yugoslavia</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabue</option>
              </select>

              <div class="invalid-feedback">
                Selecciona un pa??s
              </div>
            </div>

            <div class="col-md-4">
              <label for="number" class="form-label">Latitud</label>
              <input type="number" value="<?php if(isset($_GET['latitud'])){echo $_GET['latitud']; }?>" class="form-control" name="latitud" placeholder="" required>

              <div class="invalid-feedback">
                Dato obligatorio
              </div>
            </div>

            <div class="col-md-4">
              <label for="number" class="form-label">Longitud</label>
              <input type="number" value="<?php if(isset($_GET['longitud'])){echo $_GET['longitud']; }?>" class="form-control" name="longitud" placeholder="" required>
              <div class="invalid-feedback">
                Dato obligatorio
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Sexo <strong class="text-danger h-1">*</strong></h4>

          <div class="my-3">
            <div class="form-check">
              <input id="femenino" name="sexo" type="radio" class="form-check-input" value="femenino" checked required>
              <label class="form-check-label" for="femenino">Femenino</label>
            </div>
            <div class="form-check">
              <input id="masculino" name="sexo" type="radio" class="form-check-input" value="masculino" required>
              <label class="form-check-label" for="masculino">Masculino</label>
            </div>
          </div>
          <hr class="my-4">
          <div class="row">
            <div class="col">
              <a class="w-100 btn btn-danger btn-lg text-white" href="listado_personas.php">Cancelar</a>
            </div>
            <div class="col">
              <button class="w-100 btn btn-success btn-lg text-white" type="submit" name="submit">Guardar</button>
            </div>
          </div>
          
          
        </form>
        <?php
        (isset($_POST['submit'])) && Guardar($con) ?>
      </div>
  </div>
</div>
<br>
<?php
include(footer);
$con = null;
$query = null;
?>