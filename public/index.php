<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Wcs/Hello.php';

use App\Wcs\Hello;

$hello = new Hello;

echo $hello->talk();