<<<<<<< HEAD
<?php

require_once "Controller/bukucontroler.php";

//menjalankan controler
$app = new bukucontroler();
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/index.php':
        $app->jalankan();
        break;
    case '/index.php/edit':
        $app->edit();
        break;
    case '/index.php/update':
        $app->update();
        break;
    case '/index.php/hapus':
        $app->hapus();
        break;
    case '/index.php/simpan':
        $app->simpan();
        break;
=======
<?php

require_once "Controller/bukucontroler.php";

//menjalankan controler
$app = new bukucontroler();
$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/index.php':
        $app->jalankan();
        break;
    case '/index.php/edit':
        $app->edit();
        break;
    case '/index.php/update':
        $app->update();
        break;
    case '/index.php/hapus':
        $app->hapus();
        break;
    case '/index.php/simpan':
        $app->simpan();
        break;
>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
}