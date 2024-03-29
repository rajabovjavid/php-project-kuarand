<?php

ob_start();
session_start();

include "../curl_api.php";
include "../write_to_file.php";

//include "";

$panel_type = $_POST["panel_type"];

if($panel_type == "0"){ // admin girişi
    $data_array = array(
        "admin_email" => $_POST['email'],
        "admin_password" => $_POST['password']
    );

    $make_call = callAPI('POST', 'http://localhost/rest_api_slim/public/api/admin/signinAdmin', json_encode($data_array));
    $response = json_decode($make_call, true);
    $message = $response["message"];
    $status = $response["status"];

    if($status == null){
        apcu_store("message", "sistem hatası");
        header("Location:../../nedmin/production/login.php");
        exit;
    }
    elseif($status == "error"){
        apcu_store("message", $message);
        header("Location:../../nedmin/production/login.php");
        exit;
    }
    else {
        $_SESSION['email'] = $response["data"]["adminEmail"];
        $_SESSION['auth'] = "1"; // admin yetkisi
        apcu_store("message", $message);
        apcu_store("is_panel_user", "1");
        apcu_store("user_data", $response["data"]);
        header("Location:../../nedmin/production/index.php");
    }

}
elseif ($panel_type == "1"){ // kuaför girişi

    $data_array = array(
        "hd_email" => $_POST['email'],
        "hd_password" => $_POST['password']
    );


    $make_call = callAPI('POST', 'http://localhost/rest_api_slim/public/api/hairdresser/signinHairdresser', json_encode($data_array));
    $response = json_decode($make_call, true);
    $message = $response["message"];
    $status = $response["status"];


    if($status == null){
        apcu_store("message", "sistem hatası");
        header("Location:../../nedmin/production/login.php");
        exit;
    }
    elseif($status == "error"){
        apcu_store("message", $message);
        header("Location:../../nedmin/production/login.php");
        exit;
    }
    else {
        $_SESSION['email'] = $response["data"]["hdEmail"];
        $_SESSION['auth'] = "2"; // hairdresser yetkisi
//        apcu_store("message", $message);
        apcu_store("is_panel_user", "1");
        apcu_store("user_data", $response["data"]);
        header("Location:../../nedmin/production/index.php");
    }

}

