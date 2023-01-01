<?php
include 'db.php';
$id = $_GET['id'];
if(!(int)$id){
    header('location:index.php');
}

// select quary
$selectquery = "SELECT  photo FROM users WHERE id = $id";

$resultquery = mysqli_query( $connect, $selectquery );

if( mysqli_num_rows($resultquery) > 0){
    $data = mysqli_fetch_assoc($resultquery);
}

$file_path = 'uploads/profile/' .$data['photo'];
if( file_exists( $file_path)){
    unlink($file_path);
}



// delet query
$query = "DELETE  FROM users WHERE id = $id";

$result = mysqli_query( $connect, $query );


header('location: users.php');


?>