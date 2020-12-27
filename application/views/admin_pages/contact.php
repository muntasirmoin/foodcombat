<div class="container">
<div class="card">
  <div class="card-header"  style="color:green">
    <h1>Contact / Food Review</h1>
  </div>
  <hr>
  <div class="card-body">
    <table class="table table-dark" id="myTable">
        <thead class="thead">
            <tr>

            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>

            <th scope="col">Number</th>
            <th scope="col">Message</th>

            <th scope="col">Status</th>
           
            </tr>
        </thead>
        <tbody>
            
             <?php foreach($all_contact as $row){?>

            
              <tr>
    
                      <td><?php echo $row->contact_id;?></td>
                      <td><?php echo $row->contact_name;?></td>
                      <td><?php echo $row->contact_email;?></td>

                      <td><?php echo $row->contact_number;?></td>
                      <td><?php echo $row->contact_message;?></td>

                     
                      <td> 
                          <?php
                              
                              $status = $row->status;
                              if($status == 1)
                              { ?>
                                  <a href="" class="btn btn-success">Checked</a>
                              <?php }
                              else
                              { ?>
                                  <a href="admin_controller/update_status_contact?sid=<?php echo $row->contact_id;?>&sval=<?php echo $row->status; ?>" class="btn btn-danger btn-sm">Unchecked</a>
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


