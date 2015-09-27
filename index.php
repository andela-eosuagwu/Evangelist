<?php

ini_set('display_errors',1);

require "vendor/autoload.php";

use Emeka\Evangelist\Client\GetUser;

$t = new GetUser('andela-eosuagwu');

echo $t->getCompany();




?>