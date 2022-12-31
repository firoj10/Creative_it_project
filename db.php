<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'creative_it');

try{
    $connect = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);
}catch(Exception $e){
    echo "error". $e->getMessage();
}


?>