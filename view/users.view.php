<?php 

include 'layouts/header.php';
?>
<section class="py-5">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class='table'>
        <div class="card">
          <div class="card-header">
            <h1>user list</h1>
            </div>
          <div class="card-body">
        <tr>
          <th>ID</th>
          <th>Photo</th>
          <th>Frist Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Action</th>
          
        </tr>
        <?php
         foreach($data as $value){

          ?>
             <tr>
          <td><?=$value['id'] ;?></td>
          <td>
            
            <img src="uploads/profile/<?=$value['photo'] ;?>"  width='50' alt="">
        </td>
          <td><?=$value['fname'] ;?></td>
          <td><?=$value['lname'] ;?></td>
          <td><?=$value['email'] ;?></td>
          <td>
            <a href="edit.php?id=<?=$value['id'] ;?>" class='btn btn-sm btn-primary'>Edit</a>
            <a href="#" class='btn btn-sm btn-success'>View</a>
            <a href="#" class='btn btn-sm btn-danger'>Delete</a>
            </td>
        </tr>
          <?php
         }
        ?>
       
       </div>
      </div>

      </table>
      
  
        </div>
    </div>
  </div>
</div>
</section>

<?php 
include 'layouts/footer.php';
?>