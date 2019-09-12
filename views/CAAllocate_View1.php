<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Allocate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/sidebar.css"/>
    <!-- For the Footer
    <link rel="stylesheet" href="demo.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style>
body {font-family: 'Helvetica Neue Light', Helvetica, Arial, sans-serif;}
</style>

</head>

</head>
<body background="g.jpg">
<!-- Navigation Bar*************************************************-->
<nav class="navbar navbar-inverse" id="navv" data-spy="affix" >
    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header" id="nav1">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <a href="#">
                    <span class="glyphicon glyphicon-tasks"></span>
                </a>
                <!--<span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>-->
            </button>
            <!--  <ul class="nav navbar-nav"><li id="menu-toggle"> <a href="#"> &equiv;</a></li></ul>-->

            <a href="#" class="navbar-brand"><b> <?php echo $company; ?></b></a>
            <!--   <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>-->
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <!--  <li id="menu-toggle"> <a href="#">Menu</a></li> -->
                <li id="menu-toggle">
                    <a href="#">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </li>
                <li><a href="<?php echo base_url();?>/index.php/CA_Controller"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                <li> <a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>/index.php/CACM_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>
</nav>

<div id="wrapper">
    <!-- Side Bar*************************************************-->

    <div id="sidebar-wrapper" class="cat">

        <ul class="sidebar-nav" id="ulfont">
         <li><a href="<?php echo base_url();?>/index.php/CA_Controller"><blockquote class="blockquote-reverse">
                            <p><?php echo $fname;?></p>
                            <footer><?php echo $company;?> Company Admin</footer>
                            </blockquote></a>
         </li><hr>
            <li ><a href="<?php echo base_url();?>/index.php/CACM_Controller">Client Master <span class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPM_Controller">Product Master<span class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CACP_Controller">Client-Product Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer" id="glyph" ></span></a></li>
             <li><a href="<?php echo base_url();?>/index.php/CACategory_Controller">Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></li>
            <li><a href="<?php echo base_url();?>/index.php/CACat_Controller">Category/Sub-Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-modal-window" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPC_Controller">Product-Category Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-link" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAU_Controller">User<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAUG_Controller">User-Group Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list" id="glyph" ></span></a></li>
            <li>Allocate<span class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list" id="glyph" ></span></li>
        </ul>
    </div>
    <script>
        $("#menu-toggle").click( function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");
        });
    </script>
    <!-- Page Content*************************************-->
   <div id="wrapper">      
          <div class="container-fluid">
          <div class="row">
          <div class="col-lg-12">
          <div id="page-content-wrapper" >


                        <h1 class="heading" align="center">Allocate</h1>
                        <?php if( $error= $this->session->flashdata('SA_data')):?>
                                 <div class="alert alert-success"><?= $error ?></div>
                        <?php endif; ?>

                        <div class="text-info"><p id="demo" align="right"></p>
                            <script>
                                document.getElementById("demo").innerHTML = Date();
                            </script>
                        </div>
                        
                        <div class="panel-body">
 
                          <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                            <?php echo form_open('/CAAllocate_Controller/submit');?>
                               <h4>Raised Complaints for  <?php echo $company; ?>:</h4>    
                              <?php if (!empty( $list_all )) { ?>
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"
                                style = " display: block;
                                 height: 400px;
                                 overflow-y: scroll;">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Subject</th>
                                        <th>Mobile</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Complaint By:</th>
                                        <th>Allocate</th>

                                    </tr>
                                    <?php foreach ($list_all as $key => $value) {  ?>
                                    <tr><td><?php echo $value['main_project'];?></td>
                                        <td><?php echo $value['main_cat'];?></td>
                                        <td><?php echo $value['main_subc'];?></td>
                                        <td><?php echo $value['main_subject'];?></td>
                                        <td><?php echo $value['main_mobile'];?></td>
                                        <td><?php echo $value['main_desc'];?></td>
                                        <td><?php echo $value['status'];?></td>
                                         <td><?php echo $value['user_fname']." ".$value['user_lname'];?></td>
                                        <?= form_hidden('product_name', $value['main_project']); ?>
                                        <?= form_hidden('category', $value['main_cat']); ?>
                                        <?= form_hidden('sub_category', $value['main_subc']); ?>
                                        <?= form_hidden('subject', $value['main_subject']); ?>
                                        <?= form_hidden('mobile', $value['main_mobile']); ?>
                                        <?= form_hidden('description', $value['main_desc']); ?>
                                        <?= form_hidden('status', $value['status']); ?>
                                         <td>
                                            <button type="submit" class= "btn btn-info" data-toggle="modal" data-target="#popUpWindow" name= "btn" value=<?php echo $value['main_sno'];?>>Allocate</button>
                                         </td> 
                                       
                                    </tr>
                                    <?php } ?>
                                    
                                </table>
                                <?php } ?><?php echo form_close();?>
                            </div>
                           </div>

<!-- Modal -->                            
     <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Available Resolvers</h3>

                    <p>Choose a Resolver for the selected complaint. Choose Select All to choose the whole group.</p>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                 <?php echo form_open('/CAAllocate_Controller/submit_form');?>
                        <div class="form-group"> 
                                <label>Resolver Group 1</label> 
                                 <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr><th>ID </th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Select</th>
                                        </tr>
                                        <?php foreach ($list_resolver1 as $key => $value) {  ?>
                                        <tr><td><?php echo $value['id'];?></td>
                                            <td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['lname'];?></td>
                                            <td align="center"> <input type="radio" name="radio1" value=<?php echo $value['id'] ?>>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                        <td colspan="3">Select All</td>
                                        <td align="center"><input type="radio" name="radio1" value= "7777"></td>
                                        </tr>
                                    </table>
                                </div>
                        </div>       
                        <div class="form-group"> 
                                <label>Resolver Group 2</label> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr><th>ID </th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Select</th>
                                        </tr>
                                        <?php foreach ($list_resolver2 as $key => $value) {  ?>
                                        <tr><td><?php echo $value['id'];?></td>
                                            <td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['lname'];?></td>
                                            <td align="center"> <input type="radio" name="radio1" value=<?php echo $value['id'] ?>>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                        <td colspan="3">Select All</td>
                                        <td align="center"><input type="radio" name="radio1" value= "8888"></td>
                                        </tr>
                                    </table>
                                </div>
                                 
                        </div>
                        <div class="form-group"> 
                                <label>Resolver Group 3</label> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr><th>ID </th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Select</th>
                                        </tr>
                                        <?php foreach ($list_resolver3 as $key => $value) {  ?>
                                        <tr><td><?php echo $value['id'];?></td>
                                            <td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['lname'];?></td>
                                            <td align="center"> <input type="radio" name="radio1" value=<?php echo $value['id'] ?>>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                        <td colspan="3">Select All</td>
                                        <td align="center"><input type="radio" name="radio1" value= "9999"></td>
                                        </tr>
                                    </table>
                                </div>
                                
                        </div>
                </div>

                <!-- footer -->
                <div class="modal-footer" style="text-align: center;">
                   
                    <div>
                        <button type="submit" class="btn btn-info btn-block">Allocate</button>

                    </div>
                </div>
                 <?php echo form_close();?>

            </div>
        </div>
    </div>

                        

                    </div>
                </div> </div> </div> </div> </div> </div>

        <!-- Footer*******************************************************************************-->

        <footer class="footer-distributed" style="width: 104.2%; margin-left: -12px;">

            <div class="footer-left">

                <h3>EPSInfotech<span> Development</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="ContactUS.html">Contact</a>
                </p>

                <p class="footer-company-name">EPSInfotech &copy; 2016</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>17/A Electronic Complex</span> Indore, India</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 966 9604853</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">amaysmailbox@gmail.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the website</span>
                    Our goal is to restore normal service operation as quickly as possible
                    with minimum disruption to the business, thus ensuring that the best
                    achievable levels of availability and service are maintained.
                </p>



            </div>

        </footer>

        <!-- End of Footer******************************* -->
           
<!-- Page Content End******************************************************************-->

</body>
</html>