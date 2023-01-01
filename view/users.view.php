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
          <th>Status</th>
          <th>Action</th>
          
        </tr>
        <?php
         foreach($data as $value){

          ?>
             <tr>
          <td><?=$value['id'] ;?></td>
          <td>
            
            <img src="uploads/profile/<?=$value['photo'] ;?>"  width="50" alt="">
        </td>
          <td><?=$value['fname'] ;?></td>
          <td><?=$value['lname'] ;?></td>
          <td><?=$value['email'] ;?></td>
          <td><?=$value['status'] == 1 ? '<span class="badge text-bg-success">active</span>' : '<span class="badge text-bg-warning">deactive</span>';?></td>
          <td>
            <a href="edit.php?id=<?=$value['id'] ;?>" class='btn btn-sm btn-primary'>Edit</a>
            <a href="single.php?id=<?=$value['id'] ;?>" class='btn btn-sm btn-success'>View</a>
            <a  href="delete.php?id=<?=$value['id'] ;?>" class='btn btn-sm btn-danger'>Delete</a>
            <a  href="status.php?id=<?=$value['id'] ;?>" class='btn btn-sm <?=$value['status'] == 1 ? 'btn-warning' : 'btn-success'?>'>
            <?=$value['status'] == 1 ? 'deactive' : 'active'?>
         

            </a>
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