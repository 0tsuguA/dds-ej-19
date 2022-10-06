<?php

header('Content-Type: application/json');

require_once '../../modelo/persona.php';
require_once 'request/nuevoRequest.php';
require_once 'responses/nuevoResponse.php';
require_once '../../configuracion/database.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$nuevaPersona = new Persona();
$nuevaPersona->Nombre = $req->Nombre;
$nuevaPersona->Apellido = $req->Apellido;
$nuevaPersona->NroDocumento = $req->NroDocumento;
$nuevaPersona->Direccion = $req->Direccion;
$nuevaPersona->Email = $req->Email;
$nuevaPersona->Agregar();

$r = new NuevoResponse();
$r->IsOk = true;

echo json_encode($r);
