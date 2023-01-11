
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
$query = "SELECT status FROM users WHERE id = $id";

$result = mysqli_query( $connect, $query );

if( mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
}
if($data['status'] == 1){
    $query = "UPDATE users SET status = 2 WHERE id = $id";
    $result = mysqli_query( $connect, $query );

}else{
    $query = "UPDATE users SET status = 1 WHERE id = $id";
    $result = mysqli_query( $connect, $query );
}


header('location:users.php');
?>


