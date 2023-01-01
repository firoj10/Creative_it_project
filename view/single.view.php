<?php 

include 'layouts/header.php';
?>
<section class="py-5">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3><?=$data['fname'].' '.$data['lname'] ?> Info</h3>
            </div>
          <div class="card-body">
            <table class="table">
                <tr>
                    <td>Frist Name</td>
                    <td>:</td>
                    <td><?=$data['fname']?></td>
                </tr>
                <tr>
                    <td>last Name</td>
                    <td>:</td>
                    <td><?=$data['fname']?></td>
                </tr>
                <tr>
                    <td>email </td>
                    <td>:</td>
                    <td><?=$data['email']?></td>
                </tr>
                <tr>
                    <td>Photo </td>
                    <td>:</td>
                    <td><img src="uploads/profile/<?=$data['photo'] ;?>"  width="50" alt=""></td>
                </tr>
                </table>
        </div>
        <div class="card-footer">
            <a href="users.php" class='btn btn-sm btn-primary'>Back</a>
        </div>
    </div>
  </div>
</div>
</section>

<?php 
include 'layouts/footer.php';
?>      