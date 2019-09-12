<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
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

            <a href="#" class="navbar-brand"><b> <?php echo $companyname;?></b></a>
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
                <li><a href="<?php echo base_url();?>/index.php/CAU_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>
</nav>

<div id="wrapper">
    <!-- Side Bar*************************************************-->

    <div id="sidebar-wrapper" class="cat">

        <ul class="sidebar-nav" id="ulfont">
         <li><a href="<?php echo base_url();?>/index.php/CA_Controller"><blockquote class="blockquote-reverse">
                            <p><?php echo $fname;?></p>
                            <footer><?php echo $companyname;?> Company Admin</footer>
                            </blockquote></a>
         </li><hr>
            <li ><a href="<?php echo base_url();?>/index.php/CACM_Controller">Client Master <span class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench" id="glyph" ></a></span></li>
             <li><a href="<?php echo base_url();?>/index.php/CAProduct_Controller">Product Technology<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPM_Controller">Product Master<span class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CACP_Controller">Client-Product Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer" id="glyph" ></span></a></li>
             <li><a href="<?php echo base_url();?>/index.php/CACategory_Controller">Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></li>
            <li><a href="<?php echo base_url();?>/index.php/CACat_Controller">Category/Sub-Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-modal-window" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPC_Controller">Product-Category Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-link" id="glyph" ></span></a></li>
            <li>User (Allocator)<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" id="glyph" ></span></li>
            <li><a href="<?php echo base_url();?>/index.php/CAUG_Controller">User-Group Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list" id="glyph" ></span></a></li>
             <li><a href="<?php echo base_url();?>/index.php/CAAllocate_Controller">Allocate Complaints<span class="pull-right hidden-xs showopacity glyphicon glyphicon-check" id="glyph" ></span></a></li>
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


                        <h1 class="heading" align="center"> User</h1>
                        <?php if( $error= $this->session->flashdata('SA_data')):?>
                                         <div class="alert alert-success"><?= $error ?></div>
                        <?php endif; ?>

                        <div class="text-info"><p id="demo" align="right"></p>
                            <script>
                                document.getElementById("demo").innerHTML = Date();
                            </script>
                        </div>

                        <div class="panel-body">

                            <div class="col-lg-4"> 
                            <?php echo form_open_multipart('<?php echo base_url();?>/index.php/CAU_Controller/submit_form');?>
                                <form>

                                    <div class="panel-body">

                                    <h4>Please fill these Details:</h4>
                                        
                                            <div class="form-group" >
                                                <div class="form-group">
                                                    <label>First name:</label> <?php echo form_error('fname','<div style="color:#ff1111;" >', '</div>'); ?><input type="text" name="fname" placeholder="Enter your First Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name:</label> <?php echo form_error('lname','<div style="color:#ff1111;" >', '</div>'); ?><input type="text" name="lname" placeholder="Enter your Last Name" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Address:</label><?php echo form_error('email','<div style="color:#ff1111;" >', '</div>'); ?> <input type="email" name="email" placeholder="Enter your Email Address" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter a password:</label> <?php echo form_error('password','<div style="color:#ff1111;" >', '</div>'); ?><input type="password" name="password" placeholder="Minimum 6 characters" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Re-enter the password:</label><?php echo form_error('reenter','<div style="color:#ff1111;" >', '</div>'); ?> <input type="password" name="reenter" placeholder="Re-enter Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number:</label><?php echo form_error('mobile','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" name="mobile" placeholder="Enter your Phone Number" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                     <label class="control-label">Select Image:</label>
                                                     <div style="color:#ff1111;" > <?php if(isset($upload_error)) echo $upload_error ?>
                                                     </div><input type="file" name="image" />
                                                      
                                                </div>
                                                <div >
                                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                    <input type="reset" class="btn btn-primary btn-sm"></button>
                                                </div>

                                            </div>
                                    </div>
                                </form> </div>
                                <div class="col-lg-8">
                                   
                              <?php if (!empty( $list_all )) { ?>
                                <br/>
                                <h4 class="heading">Users in <?php echo $companyname;?>: </h4>
                                <br/>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th>First Name</th>
                                        <th> Last Name</th>
                                        <th>Email</th>
                                        <th>Contact No.</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                         <th>Edit</th>
                                        <th>Delete</th>
                                       
                                    </tr>
                                    <?php foreach ($list_all as $key => $value) {  ?>
                                    <tr><td><?php echo $value['fname'];?></td>
                                        <td><?php echo $value['lname'];?></td>
                                        <td><?php echo $value['email'];?></td>
                                        <td><?php echo $value['mobile'];?></td>
                                        <td><?php echo $value['company'];?></td>
                                        <td><?php echo $value['type'];?></td>

                                         <td><?= anchor("/CAU_Controller/edit/{$value['id']}",
                                            'Edit', ['class' => 'btn btn-primary' ])?></td>
                                        <td>
                                            <?= form_open("/CAU_Controller/delete/{$value['id']}");
                                                form_hidden('Sno', $value['id']); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                
                                              <?=  form_close();
                                            ?>
                                            </td>
                                        
                                    </tr>
                                    <?php } ?>
                                    
                                </table>
                                <?php } ?>
                            </div>
                                    


                                <?php echo form_close();?>
                </div>
            </div></div></div></div></div></div>

                <!-- Footer*******************************************************************************-->

                <footer class="footer-distributed">

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