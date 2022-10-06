<?php
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/consultarTodasResponse.php';
require_once '../../configuracion/database.php';

$resp = new ConsultarTodasResponse();
$r->ListPersonas = Persona::BuscarTodas();

echo json_encode($r);
