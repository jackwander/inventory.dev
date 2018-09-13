<div class="card">
  <div class="card-header">
    <h2>
      Users
      <a href="#" data-toggle="modal" data-target="#addUser" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
    </h2>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th></th>
      </thead>
      <tbody>
        <?php 
          $user = new User();
          $users = $user->get_users();
          foreach ($users as $usr):
        ?>
          <tr>
            <td><a href="index.php?act=users&pro=view&id=<?php echo $usr['user_id'] ?>"><?php echo $usr['fname'].' '.$usr['lname']?></a></td>
            <td><?php echo $usr['email'] ?></td>
            <td><?php echo $usr['position'] ?></td>
            <td></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
