<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Auth;
$factory = (new Factory)
->withServiceAccount('fir-82aec-firebase-adminsdk-fylv9-ed072f7afb.json')
->withDatabaseUri('https://fir-82aec-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();
?>