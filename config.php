<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'omdb');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$link){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo '@@';
}
/*echo 'connected';*/
?>