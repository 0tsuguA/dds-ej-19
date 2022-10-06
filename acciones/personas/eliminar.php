<?php
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/eliminarResponse.php';
require_once 'request/eliminarRequest.php';
require_once '../../configuracion/database.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$eliminarPersona = new Persona();
$eliminarPersona->Id = $req->Id;
$eliminarPersona->Eliminar();

$r = new EliminarResponse();
$r->IsOk = true;

echo json_encode($r);
