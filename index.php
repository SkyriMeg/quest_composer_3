<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Wilder!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setUdder('W');
echo $bessie;
