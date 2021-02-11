<?php
include_once ('config.php');

$apiUrl = API_URL."enot-url?";

$url = $apiUrl.http_build_query($_GET);

$response = json_decode(file_get_contents($url));

header("Location: $response->url");

die();