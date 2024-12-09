<?php

$autoloadPath = dirname(__DIR__).'/vendor/autoload.php';
require_once $autoloadPath;

$succesfulReleaseEndpoint = new GTKHTTPTester(getenv('STONEWOOD_SERVER')); 

$succesfulReleaseEndpoint->setPath("/socio-alquiladoras/retornos.php");

$succesfulReleaseEndpoint->addQueryParameter('STONEWOOD_AUTH_TOKEN', getenv('STONEWOOD_AUTH_TOKEN'));
$succesfulReleaseEndpoint->addHeader('Accept', 'application/json');
$succesfulReleaseEndpoint->setMethod('POST');

$succesfulReleaseEndpoint->addQueryParameter('fechaInicio', '2024-10-30');
$succesfulReleaseEndpoint->addQueryParameter('fechaFin', '2024-10-31');

$request = $succesfulReleaseEndpoint->request();

$httpCode = $request->httpCode();
$body     = $request->body();

echo "HTTP Code: $httpCode\n";
echo "Body: $body\n";
