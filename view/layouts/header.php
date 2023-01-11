<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">user managment</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <?php
        if(isset($_SESSION['user'])){
          ?>
           <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="users.php">All Users</a>
        </li>
          <li class="nav-item dropdown">
       <div class="dropdown-toggle" data-bs-toggle="dropdown" >
       <img src="uploads/profile/<?=$_SESSION['user']['photo']?>"  width="30" 
       class='rounded-circle' alt=''>
       <span><?= $_SESSION['user']['fname'] ?></span>
        </div>
        <ul class='dropdown-menu'>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">LogOut</a>
        </li>
        </ul>
        </li>
        </div>
        </div>
        <?php
        }else{
          ?>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="singup.php">Sing Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Login</a>
            </li>
          <?php
        }
        ?>
      
       
      
    </div>
  </div>
</nav>