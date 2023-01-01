<?php
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



// update quary
$error = [];

if(isset($_POST['submit'])){
    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));
    $image = $_FILES['image'];

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


    // image validaction 
    if($image['name']){
   
        $image_ex = explode('.',$image['name']);
        $imageType = ['jpeg', 'jpg', 'png', 'webp','gift'];
        
        if(!in_array(strtolower(end($image_ex)),$imageType)){
            $error['$erImage'] = 'upload valid image'; 
        }elseif($image['size'] > 1048576){
            $error['$erImage'] = ' max upload file size imb';  
        }
        $image_name = uniqid(). '.' .end( $image_ex);

        $file_path = 'uploads/profile/' .$data['photo'];
        if( file_exists( $file_path)){
            unlink($file_path);
        }



        move_uploaded_file($image['tmp_name'], 'uploads/profile/' . $image_name);
        }else{
            $image_name =  $data['photo'];
        }


    if(empty($error)){
        $updateQuary = "UPDATE users SET fname='$fname', lname='$lname',
        email='$email', photo='$image_name' WHERE id = $id";

        $updateQuaryResult = mysqli_query($connect, $updateQuary);
        if($updateQuaryResult ){
            $update = "User update successfull!";
            header('location: users.php');
        }

    }
       }
include 'view/edit.view.php';
?>