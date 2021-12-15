<?php

use Classes\Locator;

require 'vendor/autoload.php';

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


$shsService = Locator::getSHSService();
$shsService->setHeaders([
    'Authorization' => 'Bearer <token>',
    'Content-type' => 'application/json',
]);


$shsService->setUrl('https://httpbin.org/get');
$getResult = $shsService->get();


$shsService->setUrl('https://httpbin.org/post');
$postResult = $shsService->post();
