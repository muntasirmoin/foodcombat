<div class="container">
<div class="card">
  <div class="card-header"  style="color:green">
    <h1>Manage Reservation</h1>
  </div>
  <hr>
  <div class="card-body">
    <table class="table table-dark" id="myTable">
        <thead class="thead">
            <tr>
            <th scope="col">ID</th>
            

            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>

            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Person</th>
            
            <th scope="col">Status</th>
           
            </tr>
        </thead>
        <tbody>
            <?php foreach($all_reservation as $row){?>

            
            <tr>
                
                    <td><?php echo $row->reservation_id;?></td>
                    <td><?php echo $row->reservation_name;?></td>
                    <td><?php echo $row->reservation_email;?></td>
                    <td><?php echo $row->reservation_number;?></td>
                    <td><?php echo $row->reservation_date;?></td>
                    <td><?php echo $row->reservation_time;?></td>
                    <td><?php echo $row->reservation_person;?></td>
                    <!-- <td>
                        <a href="" class="btn btn-danger">Pending</a>
                    </td> -->
                    <td> 
                        <?php
                            
                            $status = $row->status;
                            if($status == 1)
                            { ?>
                                <a href="" class="btn btn-info btn-sm">Reserved</a>
                            <?php }
                            else
                            { ?>
                                <a href="admin_controller/update_status_reserve?sid=<?php echo $row->reservation_id;?>&sval=<?php echo $row->status; ?>" class="btn btn-warning btn-sm">Pending</a>
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


