<?php
require '../vendor/autoload.php';
include 'const_key.php';

$key = new Keys;

$user = $key->user();
$password = $key->password();

$client = new MongoDB\Client(
    "mongodb+srv://".USER.":".PASSWORD."@sistema.o6tyt.mongodb.net/?retryWrites=true&w=majority"
); 
$db = $client->sistema_web->produtos;

?>