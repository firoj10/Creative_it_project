<?php
include 'db.php';

$error = [];

if(isset($_POST['submit'])){
    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $image = $_FILES['image'];
    $encPass = md5( $password);

    $image_name = null;
    if($image['name']){
   
    $image_ex = explode('.',$image['name']);
    $imageType = ['jpeg', 'jpg', 'png', 'webp','gift'];
    
    if(!in_array(strtolower(end($image_ex)),$imageType)){
        $error['$erImage'] = 'upload valid image'; 
    }elseif($image['size'] > 1048576){
        $error['$erImage'] = ' max upload file size imb';  
    }
    $image_name = uniqid(). '.' .end( $image_ex);
    move_uploaded_file($image['tmp_name'], 'uploads/profile/' . $image_name);
    }

    // validaction
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

    if( empty($password)){
      $error['$erPassword'] = 'enter your password';
  }elseif(strlen($password)<8){
      $error['$erPassword'] =  'Mustbe 8 Characters Password!';
  }



  if(empty($error)){
 $query = "INSERT INTO users (fname, lname, email, password, photo) 
 VALUES ( '$fname', '$lname', '$email', '$encPass', '$image_name')";
 $result= mysqli_query($connect, $query);

  if($result){
 $s = "User sing up Successfully done";
//  header( 'location:index.php' );
 
}
}
}
// echo  $erName;

include 'view/sing-up.view.php';
?>



