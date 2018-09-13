<?php if ($_SESSION['result']=='addsuc'): ?>
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> It was successfully added.
  </div>  
<?php $_SESSION['result']=''; ?>
<?php endif ?>

<?php if ($_SESSION['result']=='editsuc'): ?>
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> It was successfully edited.
  </div>  
<?php $_SESSION['result']=''; ?>
<?php endif ?>

<?php if ($_SESSION['result']=='deletesuc'): ?>
  <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> It was successfully deleted.
  </div>  
<?php $_SESSION['result']=''; ?>
<?php endif ?>

<?php if ($_SESSION['result']=='fail'): ?>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert!</strong> Something went wrong.
  </div>  
<?php $_SESSION['result']=''; ?>
<?php endif ?>
