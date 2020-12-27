<div class="container">
<div class="card">
  <div class="card-header"  style="color:green">
    <h1>Manage Order</h1>
  </div>
  <hr>
  <div class="card-body">
    <table class="table table-dark" id="myTable">
        <thead class="thead">
            <tr>

            <th scope="col">ID</th>
            <th scope="col">Food Name</th>
            <th scope="col">Quantity</th>

            <th scope="col">Order Date</th>
            <th scope="col">Order Time</th>
           
            <th scope="col">Customer Name</th>
            <th scope="col">Number</th>
            <th scope="col">address</th>

           
            
            
            <th scope="col">Order Status</th>
           
            </tr>
        </thead>
        <tbody>
            
             <?php foreach($all_order as $row){?>

            
              <tr>
    
                      <td><?php echo $row->order_id;?></td>
                      <td><?php echo $row->order_foodname;?></td>
                      <td><?php echo $row->order_quantity;?></td>

                      <td><?php echo $row->order_date;?></td>
                      <td><?php echo $row->order_time;?></td>

                      <td><?php echo $row->order_yourname;?></td>

                      
                      
                      <td><?php echo $row->order_yournumber;?></td>
                      
                      

                      
                      
                      <td><?php echo $row->order_youraddress;?></td> 



                      
                      <td> 
                          <?php
                              
                              $status = $row->status;
                              if($status == 1)
                              { ?>
                                  <a href="" class="btn btn-success">Delivered</a>
                              <?php }
                              else
                              { ?>
                                  <a href="admin_controller/update_status?sid=<?php echo $row->order_id;?>&sval=<?php echo $row->status; ?>" class="btn btn-danger btn-sm">Pending</a>
                              <?php }
                          ?>
                          
                      </td>
                      <!-- <td><a href="" class="btn btn-danger">Delete</a></td>  -->
                  
              </tr>
              <?php } ?>
            
        </tbody>
    </table>
  </div>
</div>
</div>


