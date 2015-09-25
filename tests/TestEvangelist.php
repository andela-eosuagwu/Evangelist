<?php
ini_set('display_errors',1);

require "app/libraries/Evangelist.php";

$evangelist = new Evangelist('andela-eosuagwu', 'Olanicmi2013');

echo $data = $evangelist->getEvangelist()->url;

?>