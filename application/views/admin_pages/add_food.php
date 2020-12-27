<div class="container" style="width: 60%; margin: 0 auto;">
    <h4 style="color: green">Add Food</h4> <hr>
    <div >
        <form action="<?php echo base_url()?>save-food" method="post">
           
                
                <div class="form-group">
                    <input type="text"  placeholder="Food Name" class="form-control" name="food_name">
                </div>
                <div class="form-group">
                    <input type="text"  placeholder="Food Price" class="form-control" name="food_price">
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-success" value="Add Food">
                </div>
            
        </form>
    </div>

</div>