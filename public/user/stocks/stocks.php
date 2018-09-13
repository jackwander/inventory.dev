<div class="table-responsive">
  <div class="card">
    <div class="card-header">
      <h2>
        Stocks
      </h2>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <th>Name</th>
          <th>Location</th>
          <th>Description</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Brand</th>
          <th>Year</th>
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
            </tr>      
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
