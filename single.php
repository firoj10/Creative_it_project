<?php
session_start();
if(!isset( $_SESSION['user'])){
    header( 'location:login.php' ); 
}


include 'db.php';
// echo $_GET['id'];
$id = $_GET['id'];
if(!(int)$id){
    header('location:index.php');
}
  // select quary
$query = "SELECT id, fname, lname, email, photo FROM users WHERE id = $id";

$result = mysqli_query( $connect, $query );

if( mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
}
include 'view/single.view.php';