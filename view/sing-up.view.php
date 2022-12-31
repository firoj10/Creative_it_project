

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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="users.php">All Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="singup.php">Sing Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">LogOut</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>



    <div class="container ">
        <div class="row justify-content-center">
          <div class="col-lg-8 ">
          <?php 
                    if(isset($s)){
                        // printf('<div class = "text-danger"> %s</div>', $s);
                        echo $s;
                        } 
                        ?>
            <div class="card">
            
              <div class="card-header"><h3>Input form</h3></div>
             
              <div class="card-body">
                    <form method='POST' action='' enctype="multipart/form-data">
                    <div class="mt-3">
                    <label for="" >Frist Name:</label>
                    <input type="text" class="form-control" name="fname" placeholder="name"
                    value="<?php echo $name ?? '' ?>" >
                    <?php 
                    if(isset($error['$erFname'])){
                        echo $error['$erFname'];
                        } 
                        ?>
                  </div>
                  <div class="mt-3">
                    <label for="" >Last Name:</label>
                    <input type="text" class="form-control" name="lname" placeholder=" last name"
                    value="<?php echo $name ?? '' ?>" >
                    <?php 
                    if(isset($error['$erLname'])){
                        echo $error['$erLname'];
                        } 
                        ?>
                  </div>
                  <div class="mt-3">
                    <label for="" >Email address</label>
                    <input type="email" class="form-control" name="email" 
                    id="exampleInputPassword1" value="<?php echo $email ?? '' ?>" >
                    <?php 
                    if(isset($error['$erEmail'])){
                        echo $error['$erEmail'];
                        } 
                        ?>
                  </div>
                  <div class="mt-3">
                    <label for="" >Password</label>
                    <input type="password" class="form-control" name="password" 
                    id="exampleInputPassword1" value="<?php echo $password ?? '' ?>" >
                    <?php 
                    if(isset($error['$erPassword'])){
                        
                        printf('<div class = "text-danger"> %s </div>', $error['$erPassword']);
                        } 
                        ?>
                  </div>
                  <div class="mt-3">
                  <label for="" >image</label>
                  <input class="form-control" type="file" name='image' id="formFile">
                  <?php 
                    if(isset($error['$erImage'])){
                        echo $error['$erImage'];
                        } 
                        ?>
                </div>
                <div class="mt-3">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

             
            </div>
           </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>