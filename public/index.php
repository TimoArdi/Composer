<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;
$bonjour = new Hello();
echo $bonjour->talk();


