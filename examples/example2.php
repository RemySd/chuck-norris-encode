<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require __ROOT__.'./vendor/autoload.php';

use ChuckNorrisEncode\Encoder;

echo Encoder::encode("C");
