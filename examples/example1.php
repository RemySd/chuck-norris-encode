<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/src/Encoder.php');

echo \ChuckNorrisEncode\Encoder::encode("C");
