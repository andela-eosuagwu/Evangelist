<?php

require "vendor/autoload.php";


use Emeka\Evangelist\Evangelist;

ini_set('display_errors',1);

// require "app/libraries/Evangelist.php";
// require "app/libraries/helper.php";





$evangelist = new Evangelist('andela-eosuagwu', 'Olanicmi2013');

//echo $data = $evangelist->getEvangelist();

echo $data = $evangelist->followers();
echo $data = $evangelist->following();
echo $data = $evangelist->username();

// Set counter
$i = 100;
$closure = function () use ($i){ $i++; };
$closure();
echo $i;


$users = array("John", "Jane", "Sally", "Philip");
array_walk($users, function ($name) {
  echo "Hello $name<br>";
});

?>