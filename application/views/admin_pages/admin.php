<div class="container-fluid" style="margin-left: 10px">
      <div class="row">

      <!-- Icon Cards-->
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                    <img src="asset\dashboard\images\food-1.png">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Total Food</h4>
                    <h2><?php echo $c_food;?></h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                    <img src="asset\dashboard\images\order-1.png">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Total Order</h4>
                    <h2><?php echo $c_order;?></h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                    <img src="asset\dashboard\images\reservation-1.png">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Total Reservation</h4>
                    <h2><?php echo $c_reservation;?></h2>
                </div>
              </div>
            </div>
        </div>

    </div>
  </div>


<div class="container mt-5" style="margin-top: 100px">
  <?php foreach($all_admin as $row){
    
    
  ?>
    <div class="row mt">
       <div class="col-md-12 ">

          <div class="panel panel-default">
              <div class="panel-body">
       
                <div class="box box-info">
        
                  <div class="box-body">
                    <div class="col-sm-6">
                      <div  >  
                      <img  src="<?php echo $row->admin_img?>" alt="user img" style="width:100%;max-width:300px">
                        <!-- <input id="profile-image-upload" class="hidden" type="file"> -->
                      </div>
                      <br>
                    </div>
                    <div class="col-sm-6">


                   
                
                      <h4 style="color:#00b1b1;"><?php echo $row->admin_name;?></h4></span>
                      <span><p><?php echo $row->admin_email;?></p></span>         
                      <span><p><?php echo $row->admin_phone;?></p></span>         
                    </div>
                    <div class="clearfix">
                    
                    </div>
                    

                  <!-- /.box-body -->
                  </div>
                <!-- /.box -->
                </div>
              </div> 
            </div>
        </div>  
    </div>
    <?php } ?>
</div>