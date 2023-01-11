
<?php 

include 'layouts/header.php';
?>
<section class="from mt-5 pt-5">
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
    </section>
    <?php 

include 'layouts/footer.php';
?>>