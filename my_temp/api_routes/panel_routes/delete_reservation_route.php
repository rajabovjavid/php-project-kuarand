<?php

include "../curl_api.php";

$data_array = array(
    "reservation_id" => $_GET['res_id']
);

$make_call = callAPI('DELETE', 'http://localhost/rest_api_slim/public/api/reservation/deleteReservation', json_encode($data_array));
$response = json_decode($make_call, true);

header("Location:../../nedmin/production/hd_reservations.php");