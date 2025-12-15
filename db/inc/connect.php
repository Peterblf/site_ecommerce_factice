<?php

define ('SERVER', 'mysql:server=localhost;dbname=projet');
define('USER', 'root');
define('PASS', '');

try{
    $auth = new PDO(SERVER,USER,PASS);
} catch (Exception $e) {
    echo $e->getMessage();
}