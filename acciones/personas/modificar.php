<?php
header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'responses/modificarResponse.php';
require_once '../../configuracion/database.php';
require_once 'request/modificarRequest.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$modificarPersona = new Persona();
$personaModificar->Id = $req->Id;
$personaModificar->Nombre = $req->Nombre;
$personaModificar->Apellido = $req->Apellido;
$personaModificar->NroDocumento = $req->NroDocumento;
$personaModificar->Direccion = $req->Direccion;
$personaModificar->Email = $req->Email;
$personaModificar->Modificar();

$r = new ModificarResponse();
$r->IsOk = true;

echo json_encode($r);
