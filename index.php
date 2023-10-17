<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
echo $output = $bessie->say();

 $bessie->setEyes('oO');
 $bessie->setTongue('U');
 $bessie->setPoop('@@@');
 echo $bessie;
