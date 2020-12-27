<div class="container" style="width: 60%; margin: 0 auto;">
    <h4 style="color: green">Edit Food</h4> <hr>
    <div class="row">
        <form action="<?php echo base_url()?>update-food" method="post">
            <?php foreach($all_food_by_id as $row){
                    // echo $rrow->book_id;
                ?>
                <input type="hidden" value="<?php echo $row->food_id?>" name="food_id">
                <div class="form-group">
                    <input type="text" value="<?php echo $row->food_name; ?>" placeholder="Food Name" class="form-control" name="food_name">
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $row->food_price; ?>" placeholder="Food Price" class="form-control" name="food_price">
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-success" value="Update">
                </div>
            <?php } ?>
        </form>
    </div>

</div>