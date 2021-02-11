<?php
include_once ('config.php');

$apiUrl = API_URL."enot-response";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_REQUEST));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = json_decode(curl_exec($ch));

curl_close($ch); // Close the connection

header("Content-Type: application/json; charset=UTF-8");

$response["_REQUEST"] = $_REQUEST;
$response["result"] = $result;

echo json_encode($response);

die();
