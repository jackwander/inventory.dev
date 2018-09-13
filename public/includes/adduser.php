<form action="/processes/process.user.php?action=new" method="POST" onsubmit="return confirm('Are you sure you want to add this?')">
<div class="row">
 <div class="col-md-6">
    <div class="form-group">
      <label>First Name</label>
      <input type="text" name="fname" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>Middle Name</label>
      <input type="text" name="mname" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" name="lname" required=""  class="form-control" />
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Email Address</label>
      <input type="email" name="email" class="form-control" required="">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>Position</label>
      <select name="position" class="form-control">
        <option value="admin">Admin</option>
        <option value="company">Company</option>
        <option value="user">User</option>
      </select>
    </div>
  </div>
</div>
  <div class="form-group">
    <input type="submit" name="submit" value="Add" class="form-control" />
  </div>
</form>
