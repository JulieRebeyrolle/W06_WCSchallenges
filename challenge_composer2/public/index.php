<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$message = new Hello();
echo $message -> talk();

$sayHelloMessage = new SayHello();
echo $sayHelloMessage -> world();