
<?php
session_start();
if(!isset( $_SESSION['user'])){
    header( 'location:login.php' ); 
}

if(!isset( $_COOKIE['user_cookie'])){
    header( 'location:logout.php' ); 
}


include 'db.php';
$query = "SELECT id, fname, lname, email, photo, status FROM users ORDER BY id DESC";

$result = mysqli_query( $connect, $query );

if( mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_all($result, true);
}

 






include 'view/users.view.php';
?>