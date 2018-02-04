<form action="/processes/process.stock.php?action=new" method="POST" onsubmit="return confirm('Are you sure you want to add this?')">
<div class="row">
 <div class="col-md-6">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>Location</label>
      <input type="text" name="location" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>Description</label>
      <input type="text" name="desc" required=""  class="form-control" />
    </div>
    <div class="form-group">
      <label>QTY</label>
      <input type="number" name="qty" required="" class="form-control" />
    </div>
  </div>
  <div class="col-md-6">
    
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" required="" step="0.01" class="form-control"/ >
  </div>
  <div class="form-group">
    <label>Brand</label>
    <input type="text" name="brand" required=""  class="form-control" />
  </div>
  <div class="form-group">
    <label>Year</label>
    <input type="number" name="year" required=""  class="form-control" />
  </div>
  </div>
</div>
  <div class="form-group">
    <input type="submit" name="submit" value="Add" class="form-control" />
  </div>
</form>