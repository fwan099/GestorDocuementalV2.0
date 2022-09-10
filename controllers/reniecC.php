<?php
// Datos
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoxOTEzLCJjb3JyZW8iOiJmcmVkZHkubGVkaXMwOTlAZ21haWwuY29tIiwiaWF0IjoxNjYwNzUzNjc5fQ.XnDps0WF9-z_MRV99gPp0YYBsQ11rc4KwiWEK7-eZ2A';
$dni = $_REQUEST['dni'];

// Iniciar llamada a API
$curl = curl_init();

$data = array(
  'dni' => $dni
);

$json = json_encode($data);

// Buscar dni
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.softwarelion.xyz/api/reniec/reniec-dni',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 2,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_POSTFIELDS => $json,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $token
  ),
));

$response = curl_exec($curl);
echo $response;

curl_close($curl);
?>