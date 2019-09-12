<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User-Group Link</title>
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

            <a href="#" class="navbar-brand"><b> <?php echo $company;?></b></a>
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
                <li><a href="<?php echo base_url();?>/index.php/CACP_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
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
             <li><a href="<?php echo base_url();?>/index.php/CAProduct_Controller">Product Technology<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPM_Controller">Product Master<span class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CACP_Controller">Client-Product Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer" id="glyph" ></a></span></li>
             <li><a href="<?php echo base_url();?>/index.php/CACategory_Controller">Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CACat_Controller">Category/Sub-Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-modal-window" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPC_Controller">Product-Category Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-link" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAU_Controller">User<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" id="glyph" ></span></a></li>
            <li>User-Group Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list" id="glyph" ></span></li>
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

                        <h1 class="heading" align="center"> User Group Link</h1>

                        <div class="text-info"><p id="demo" align="right"></p>
                            <script>
                                document.getElementById("demo").innerHTML = Date();
                            </script>
                             <?php if (!empty( $list_user )) { ?>
                                        <?php if( $error= $this->session->flashdata('SA_data')):?>
                                         <div class="alert alert-success"><?= $error ?></div>
                                 <?php endif; ?>
                        </div><?php echo form_open("/CAUG_Controller/newt")?>
                        <div class="col-lg-6">
                                <h4 class="heading">Users Available for <?php echo $company;?></h4>
                               
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Select a Client</th>
                                        </tr>
                                        <?php foreach ($list_user as $key => $value) {  ?>
                                        <tr><td><?php echo $value['fname'];?></td>
                                            <td><?php echo $value['lname'];?></td>
                                            <td><?php echo $value['email'];?></td>
                                            <td><?php echo $value['type'];?></td>
                                            <td align="center"> <input type="radio" name="radio1" value=<?php echo $value['id'] ?>>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </table>
                                    <?php } ?>
                                </div>
                        </div>
                        <div class="col-lg-1"></div>
                         <div class="col-lg-5">
                                <h4 class="heading">Options:</h4>
                               <table class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th>User Group</th>
                                            <th>Level</th>
                                            <th>Select</th>
                                        </tr> 
                                        <tr align="center">
                                            <td colspan="2" align="center">User</td>
                                            <td><input type="radio" name="radio2" value='user'></td>
                                        </tr>
                                        <tr align="center">
                                            <td colspan="2" align="center">Allocator</td>
                                            <td><input type="radio" name="radio2" value='allocator'></td>
                                        </tr>
                                        <tr align="center">
                                            <td rowspan="3" align="center">Resolver</td>
                                            <td>Level 1</td>
                                            <td><input type="radio" name="radio2" value='resolver1'></td>
                                        </tr>
                                         <tr align="center">
                                            <td>Level 2</td>
                                            <td><input type="radio" name="radio2" value='resolver2'></td>
                                        </tr>
                                         <tr align="center">
                                            <td>Level 3</td>
                                            <td><input type="radio" name="radio2" value='resolver3'></td>
                                        </tr>

                                </table>


                        </div>
<br> 
                    </div>                 
                    <div class="col-lg-12" align="center">
                        <input type="submit" class="btn btn-info" ></button></form>
                    </div><hr>
                     
                            <?php echo form_close();?>
                   </div>

                 </div></div> </div></div></div></div> </div> </div>

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
        </div></div> </div></div></div></div> </div> </div>
<!-- Page Content End******************************************************************-->

</body>
</html>