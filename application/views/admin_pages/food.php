<div class="container">
<div class="card">
  <div class="card-header">
    <a href="<?php base_url()?>add-food" class="btn btn-success">Add Food Item</a>
  </div>
  <hr>
  <div class="card-body">
    <table class="table table-dark" id="myTable">
        <thead class="thead">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Food Name</th>
            <th scope="col">Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($all_food as $row){?>
            <tr>
                
                    <th scope="row"><?php echo $row->food_id ; ?></th>
                    <td><?php echo $row->food_name ; ?></td>
                    <td><?php echo $row->food_price ; ?></td>
                    <td>
                        <a href="<?php echo base_url();?>edit-food-item/<?php echo $row->food_id; ?>" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url();?>delete-food/<?php echo $row->food_id; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    <!-- <td><a href="" class="btn btn-danger">Delete</a></td>  -->
                
            </tr>
            <?php } ?>
            
        </tbody>
    </table>
  </div>
</div>
</div>


