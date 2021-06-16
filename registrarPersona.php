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
        <h2>Registro de Personas</h2>
        <p class="lead">Completa el siguiente formulario con tus datos</p>
      </div>

      <div id="register-row" class="row justify-content-center align-items-center col-sm-10 col-md-8 text-dark">

        <form action="" class="needs-validation" novalidate method="post">

          <div class="row g-3 pt-5">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="<?php if(isset($_POST['nombre'])){echo $_POST['nombre']; }?>" placeholder="" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-sm-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" name="apellido" class="form-control" id="apellido" value="<?php if(isset($_POST['apellido'])){echo $_POST['apellido']; }?>" placeholder="" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-12">
              <label for="dni" class="form-label">DNI</label>
              <div class="input-group has-validation">
                <input type="text" name="dni" class="form-control" id="username" value="<?php if(isset($_POST['dni'])){echo $_POST['dni']; }?>" placeholder="Ingresa tu DNI" required>
                <div class="invalid-feedback">
                  Campo obligatorio
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" class="form-control" id="email" placeholder="tu@ejemplo.com" required>
              <div class="invalid-feedback">
                Ingrese un email valido
              </div>
            </div>

            <div class="col-12">
              <label for="date" class="form-label">Fecha de nacimiento</label>
              <input type="date" class="form-control"  name="nacimiento" min="1900-01-01" required>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-12">
              <label for="tel" class="form-label">Télefono</label>
              <input type="tel" value="<?php if(isset($_POST['telefono'])){echo $_POST['telefono']; }?>" name="telefono" class="form-control">
              <small>Ejemplo: 3834 858585</small>
              <div class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>

            <div class="col-md-4">
              <label for="pais" class="form-label">Nacionalidad</label>
              <select class="form-select" id="pais" name="nacionalidad" required>
                <option value="">Choose...</option>
                <option value="AF">Afganistán</option>
                <option value="AL">Albania</option>
                <option value="DE">Alemania</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antártida</option>
                <option value="AG">Antigua y Barbuda</option>
                <option value="AN">Antillas Holandesas</option>
                <option value="SA">Arabia Saudí</option>
                <option value="DZ">Argelia</option>
                <option value="AR" selected>Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaiyán</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrein</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BE">Bélgica</option>
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
                <option value="BT">Bután</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Camboya</option>
                <option value="CM">Camerún</option>
                <option value="CA">Canadá</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CY">Chipre</option>
                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, República Democrática del</option>
                <option value="KR">Corea</option>
                <option value="KP">Corea del Norte</option>
                <option value="CI">Costa de Marfíl</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croacia (Hrvatska)</option>
                <option value="CU">Cuba</option>
                <option value="DK">Dinamarca</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egipto</option>
                <option value="SV">El Salvador</option>
                <option value="AE">Emiratos Árabes Unidos</option>
                <option value="ER">Eritrea</option>
                <option value="SI">Eslovenia</option>
                <option value="ES">España</option>
                <option value="US">Estados Unidos</option>
                <option value="EE">Estonia</option>
                <option value="ET">Etiopía</option>
                <option value="FJ">Fiji</option>
                <option value="PH">Filipinas</option>
                <option value="FI">Finlandia</option>
                <option value="FR">Francia</option>
                <option value="GA">Gabón</option>
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
                <option value="HT">Haití</option>
                <option value="HN">Honduras</option>
                <option value="HU">Hungría</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IQ">Irak</option>
                <option value="IR">Irán</option>
                <option value="IE">Irlanda</option>
                <option value="BV">Isla Bouvet</option>
                <option value="CX">Isla de Christmas</option>
                <option value="IS">Islandia</option>
                <option value="KY">Islas Caimán</option>
                <option value="CK">Islas Cook</option>
                <option value="CC">Islas de Cocos o Keeling</option>
                <option value="FO">Islas Faroe</option>
                <option value="HM">Islas Heard y McDonald</option>
                <option value="FK">Islas Malvinas</option>
                <option value="MP">Islas Marianas del Norte</option>
                <option value="MH">Islas Marshall</option>
                <option value="UM">Islas menores de Estados Unidos</option>
                <option value="PW">Islas Palau</option>
                <option value="SB">Islas Salomón</option>
                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                <option value="TK">Islas Tokelau</option>
                <option value="TC">Islas Turks y Caicos</option>
                <option value="VI">Islas Vírgenes (EEUU)</option>
                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                <option value="WF">Islas Wallis y Futuna</option>
                <option value="IL">Israel</option>
                <option value="IT">Italia</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japón</option>
                <option value="JO">Jordania</option>
                <option value="KZ">Kazajistán</option>
                <option value="KE">Kenia</option>
                <option value="KG">Kirguizistán</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="LA">Laos</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Letonia</option>
                <option value="LB">Líbano</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituania</option>
                <option value="LU">Luxemburgo</option>
                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malasia</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldivas</option>
                <option value="ML">Malí</option>
                <option value="MT">Malta</option>
                <option value="MA">Marruecos</option>
                <option value="MQ">Martinica</option>
                <option value="MU">Mauricio</option>
                <option value="MR">Mauritania</option>
                <option value="YT">Mayotte</option>
                <option value="MX">México</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavia</option>
                <option value="MC">Mónaco</option>
                <option value="MN">Mongolia</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Níger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk</option>
                <option value="NO">Noruega</option>
                <option value="NC">Nueva Caledonia</option>
                <option value="NZ">Nueva Zelanda</option>
                <option value="OM">Omán</option>
                <option value="NL">Países Bajos</option>
                <option value="PA">Panamá</option>
                <option value="PG">Papúa Nueva Guinea</option>
                <option value="PK">Paquistán</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Perú</option>
                <option value="PN">Pitcairn</option>
                <option value="PF">Polinesia Francesa</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="UK">Reino Unido</option>
                <option value="CF">República Centroafricana</option>
                <option value="CZ">República Checa</option>
                <option value="ZA">República de Sudáfrica</option>
                <option value="DO">República Dominicana</option>
                <option value="SK">República Eslovaca</option>
                <option value="RE">Reunión</option>
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
                <option value="LC">Santa Lucía</option>
                <option value="ST">Santo Tomé y Príncipe</option>
                <option value="SN">Senegal</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leona</option>
                <option value="SG">Singapur</option>
                <option value="SY">Siria</option>
                <option value="SO">Somalia</option>
                <option value="LK">Sri Lanka</option>
                <option value="PM">St Pierre y Miquelon</option>
                <option value="SZ">Suazilandia</option>
                <option value="SD">Sudán</option>
                <option value="SE">Suecia</option>
                <option value="CH">Suiza</option>
                <option value="SR">Surinam</option>
                <option value="TH">Tailandia</option>
                <option value="TW">Taiwán</option>
                <option value="TZ">Tanzania</option>
                <option value="TJ">Tayikistán</option>
                <option value="TF">Territorios franceses del Sur</option>
                <option value="TP">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad y Tobago</option>
                <option value="TN">Túnez</option>
                <option value="TM">Turkmenistán</option>
                <option value="TR">Turquía</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ucrania</option>
                <option value="UG">Uganda</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistán</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="YE">Yemen</option>
                <option value="YU">Yugoslavia</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabue</option>
              </select>

              <div class="invalid-feedback">
                Selecciona un país
              </div>
            </div>

            <div class="col-md-4">
              <label for="number" class="form-label">Latitud</label>
              <input type="number" value="<?php if(isset($_POST['latitud'])){echo $_POST['latitud']; }?>" class="form-control" name="latitud" placeholder="" required>

              <div class="invalid-feedback">
                Dato obligatorio
              </div>
            </div>

            <div class="col-md-4">
              <label for="number" class="form-label">Longitud</label>
              <input type="number" value="<?php if(isset($_POST['longitud'])){echo $_POST['longitud']; }?>" class="form-control" name="longitud" placeholder="" required>
              <div class="invalid-feedback">
                Dato obligatorio
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Sexo</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="femenino" name="sexo" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="femenino">Femenino</label>
            </div>
            <div class="form-check">
              <input id="masculino" name="sexo" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="masculino">Masculino</label>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-info btn-lg" type="submit" name="submit">Registrarme</button>
        </form>
        <?php
        (isset($_POST['submit'])) && Guardar() ?>
      </div>
  </div>
</div>
<?php
include(footer);
$con = null;
$query = null;
?>