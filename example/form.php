<?php

require __DIR__ . "/../vendor/autoload.php";

use CaioLandgraf\Api\RequestApi;

$request = new RequestApi("https://www.form.com/contact");

$request->post([
    "name" => "Name",
    "email" => "email@suporteinformatika.com.br",
    "subject" => "Subject",
    "message" => "Message"
]);

//test and result
if ($request->error()) {
    $request->error(); //object
} else {
    $request->response(); //object
}