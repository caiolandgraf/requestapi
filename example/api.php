<?php

require __DIR__ . "/../vendor/autoload.php";

use CaioLandgraf\Api\RequestApi;

$request = new RequestApi("https://www.apiurl.com");

// login
$request->post([
    "login" => "email@suporteinformatika.com.br",
    "password" => "password"
], "login");

// read
$user = $request->get([
    "id" => "1"
], "user");

//update
$user->put([
    "first_name" => "Caio",
    "last_name" => "Landgraf",
    "genre" => "male",
    "datebirth" => "1980-01-02",
    "document" => "888888888"
], "user/update");

//test and result
if ($user->error()) {
    $user->error(); //object
} else {
    $user->response(); //object
}