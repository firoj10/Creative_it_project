<?php
include 'db.php';
// echo $_GET['id'];
$id = $_GET['id'];
if(!(int)$id){
    header('location:index.php');
}





// update quary
$error = [];

if(isset($_POST['submit'])){
    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));

    if( empty($fname)){
        $error['$erFname'] = 'enter your name';
    }
    if( empty($lname)){
      $error['$erLname'] = 'enter your name';
  }
    if( empty($email)){
        $error['$erEmail'] = 'enter your email';

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['$erEmail'] =  'enter your VALIDATE EMAIL';
    }

    if(empty($error)){
        $updateQuary = "UPDATE users SET fname='$fname',`lname`='$lname',
        email='$email' WHERE id = $id";

        $updateQuaryResult = mysqli_query($connect, $updateQuary);
        if($updateQuaryResult ){
            $update = "User update successfull!";
        }
       
    }
       }

       // select quary

$query = "SELECT id, fname, lname, email, photo FROM users WHERE id = $id";

$result = mysqli_query( $connect, $query );

if( mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
}


include 'view/edit.view.php';
?>