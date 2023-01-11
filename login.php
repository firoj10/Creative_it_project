<?php
session_start();
include 'db.php';

$error = [];

if(isset($_POST['submit'])){
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $encPass = md5( $password);


    if( empty($email)){
        $error['$erEmail'] = 'enter your email';

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error['$erEmail'] =  'enter your VALIDATE EMAIL';
    }

    if( empty($password)){
      $error['$erPassword'] = 'enter your password';
  }elseif(strlen($password)<8){
      $error['$erPassword'] =  'Mustbe 8 Characters Password!';
  }


  if(empty($error)){
  $query = "SELECT * FROM users WHERE email= '$email' AND password= '$encPass' ";

$result = mysqli_query( $connect, $query );

if( mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);
    unset( $user['password']);
    $_SESSION['user'] = $user;

    setcookie('user_cookie', 'Login', time() + 60, '/' );

     header( 'location:users.php' );

}else{
    $invalid= "Invalid Users";
}

}

}
?>

<?php
include 'view/login.view.php';
?>