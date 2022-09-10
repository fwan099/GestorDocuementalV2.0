<?php
require_once "controllers/plantillaC.php";
require_once "controllers/usuariosC.php";
require_once "controllers/motivoResC.php";
require_once "controllers/resolucionesC.php";
require_once "controllers/consultaC.php";

require_once "models/usuariosM.php";
require_once "models/motivoResM.php";
require_once "models/resolucionesM.php";
require_once "models/consultaM.php";
$plantilla = new PlantillaC();
$plantilla -> LlamarPlantilla();