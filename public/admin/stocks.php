<div class="table-responsive">
  <div class="card">
    <div class="card-header">
      <h2>
        Stocks
        <a href="#" data-toggle="modal" data-target="#addStock" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
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
              <td><a href="#" class="btn btn-sm"  data-toggle="modal" data-target="#editStock<?php echo $value['stock_id']?>" ><i class="fa fa-pencil"></i></a> <span>|</span> <a onclick="return confirm('Are you sure to delete this item?')" href="/processes/process.stock.php?action=delete&id=<?php echo $value['stock_id'] ?>"><i class="fa fa-trash"></i></a></td>
            </tr>      
            <!--Edit stock -->
            <div class="modal fade" id="editStock<?php echo $value['stock_id']?>">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Stock</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <?php include('includes/editstock.php') ?>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
