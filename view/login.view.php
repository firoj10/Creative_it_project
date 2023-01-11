<?php 

include 'layouts/header.php';
?>
<section class="from mt-5 pt-5">
    <div class="container ">
        <div class="row justify-content-center">
          <div class="col-lg-6  ">
          <?php 
                    if(isset($s)){
                        // printf('<div class = "text-danger"> %s</div>', $s);
                        echo $s;
                        } 
                        if(isset($invalid)){
                            // printf('<div class = "text-danger"> %s</div>', $s);
                           printf('<div class="alert alert-success"> %s<div>', $invalid );
                        // echo $invalid;
                            } 
                        ?>
            <div class="card">
            
              <div class="card-header"><h3>Input form</h3></div>
             
              <div class="card-body">
                    <form method='POST' action='' >
                 
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
?>









