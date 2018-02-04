<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <th>Name</th>
      <th>Location</th>
      <th>Description</th>
      <th>Qty</th>
      <th>Price</th>
      <th>Brand</th>
      <th>Year</th>
      <th>Action</th>
    </thead>
    <tbody>
    <?php 
      $stocks = new Stock();
      $items = $stocks->view_stocks();
    ?>
    <?php foreach ($items as $value): ?>
      <tr>
        <td><?php echo $value['stock_name'] ?></td>
        <td><?php echo $value['stock_location'] ?></td>
        <td><?php echo $value['stock_description'] ?></td>
        <td><?php echo $value['stock_quantity'] ?></td>
        <td><?php echo $value['stock_price'] ?></td>
        <td><?php echo $value['stock_brand'] ?></td>
        <td><?php echo $value['stock_year'] ?></td>
        <td><a href="index.php?act=edit&id=<?php echo $value['stock_id']?>"><i class="fa fa-pencil"></i></a> <span>|</span> <a onclick="return confirm('Are you sure to delete this item?')" href="/processes/process.stock.php?action=delete&id=<?php echo $value['stock_id'] ?>"><i class="fa fa-trash"></i></a></td>
      </tr>      
    <?php endforeach ?>
    </tbody>
  </table>
</div>
