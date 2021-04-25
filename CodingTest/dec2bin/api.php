<?php
header("Content-Type:application/json");
include "nomor_1_dec2bin.php";

if (isset($_GET['dec2bin'])) {
    $dec2bin = $_GET['dec2bin'];
    $bin = dec2bin($dec2bin);
    response(200, "Valid", $bin);
} else {
    response(400, "Invalid Request", NULL);
}
function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);

    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}
