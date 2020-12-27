<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Combat</title>
    <link rel="stylesheet" href="<?= base_url('asset/dashboard/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/dashboard/css/jquery.dataTables.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/dashboard/style/style.css');?>">
</head>
<body>
    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!--  toggle  -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>dashboard">
                    <h3 style="margin-top: 10px">Food Combat</h3>
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                    
                    <!-- log out -->
                    <li><a href=""><?php echo $this->session->userdata('admin_name');?></a></li>
                    <li><a href="<?php echo base_url();?>logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>

                
            </ul>
            <!-- Sidebar Menu Items -  -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    
                    <li>
                        <a href="<?php echo base_url()?>dashboard"><i class="fa fa-user"></i> Admin</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>food"> <i class="fa fa-plus-square" ></i> Manage Food</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>order"><i class="fa fa-database"></i> Order</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>reservation"><i class="fa fa-database" aria-hidden="true"></i> Reservation</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>contact"><i class="fa fa-bell" aria-hidden="true"></i> Contact</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>"><i class="fa fa-eye" aria-hidden="true"></i> User View</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div style="margin-top: 100px"></div>

        <?php
            echo $admin_content;
        ?>
    </div><!-- /#wrapper -->
</body>
<script src="<?= base_url('asset/dashboard/js/jquery-3.5.1.slim.min.js');?>"></script>
<script src="<?= base_url('asset/dashboard/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('asset/dashboard/js/jquery.dataTables.min.js')?>"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>
<script>
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {                        
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
        });
    });    
    
</script>
</html>