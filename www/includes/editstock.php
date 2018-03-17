<div class="offset-md-2 col-md-8">
<form action="/processes/process.stock.php?action=edit" method="POST" onsubmit="return confirm('Are you sure you want to edit this?')">
<?php 
  $stocks = new Stock();
  // Ang $id ara na sa index na define.
  $result = $stocks->get_stock($value['stock_id']);
?>
<?php foreach ($result as $value): ?>
  <input type="hidden" name="id" value="<?php echo $value['stock_id'] ?>">
<div class="row">
 <div class="col-md-6">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" required="" value="<?php echo $value['stock_name'] ?>" class="form-control" />
  </div>
  <div class="form-group">
    <label>Location</label>
    <input type="text" name="location" required="" value="<?php echo $value['stock_location'] ?>" class="form-control" />
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" name="desc" required="" value="<?php echo $value['stock_description'] ?>" class="form-control" />
  </div>
 </div>
 <div class="col-md-6">
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" required="" value="<?php echo $value['stock_price'] ?>" step="0.01" class="form-control"/ >
  </div>
  <div class="form-group">
    <label>Brand</label>
    <input type="text" name="brand" required="" value="<?php echo $value['stock_brand'] ?>" class="form-control" />
  </div>
  <div class="form-group">
    <label>Year</label>
    <input type="number" name="year" required="" value="<?php echo $value['stock_year'] ?>" class="form-control" />
  </div>
 </div> 
</div>
<?php endforeach ?>
  <div class="form-group">
    <input type="submit" name="submit" value="Save" class="form-control" />
  </div>
</form>
</div>

