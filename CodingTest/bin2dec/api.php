<?php
header("Content-Type:application/json");
include "nomor_1_bin2dec.php";

if (isset($_GET['bin2dec'])) {
    $bin2dec = $_GET['bin2dec'];
    $dec = bin2dec($bin2dec);
    response(200, "Valid", $dec);
} else {
    response(400, "Invalid Request", NULL);
}

// if (!empty($_GET['dec2bin'])) {
//     $dec2bin = $_GET['dec2bin'];
//     response(200, "Hasilnya adalah", $dec2bin);
// } else {
//     response(400, "Invalid Request", NULL);
// }

function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);

    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}
