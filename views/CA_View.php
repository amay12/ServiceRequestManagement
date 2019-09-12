<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- For the Footer
    <link rel="stylesheet" href="demo.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
<style>
body {font-family: 'Helvetica Neue Light', Helvetica, Arial, sans-serif;}
a.list-group-item:hover{
    background-color: #222222;
    color: #ff471a;
    transition: all .4s ease 0s;
  -webkit-transition-timing-function: ease;
}
h4.list-group-item-heading:hover{
     color: white;
     transition: all .4s ease 0s;
  -webkit-transition-timing-function: ease;
}
</style>
</head>
<body style="background-color:#f1f1f1">
<!-- Navigation bar*************************************-->
<nav class="navbar navbar-inverse" >
    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header" id="nav1">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"> <b> EPSINFOTECH</b></a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <!--  <li id="menu-toggle"> <a href="#">Menu</a></li> -->

                <li class="active"><a href="<?php echo base_url();?>/index.php/CA_Controller"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                <li><a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>/index.php/CA_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>

    </div>
</nav>
<!-- Page Content*************************************-->
<div id="wrapper" style="background-color:#f1f1f1">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="heading" align="center"> Welcome  <?php foreach ($list_all_name as $key => $value) {  
                          echo $value['fname'];} ?>!</h1>

                   <?php if( $error= $this->session->flashdata('login_successful')):?>
                      <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style= "align : center;">&times;</a>
                    Congratulations, You are Logged In !
                </div>
                <?php endif; ?>
                    <div class="text-info"><p id="demo" align="right"></p>
                        <script>
                            document.getElementById("demo").innerHTML = Date();
                        </script>
                    </div>
                    <br/>
<br/><hr/>
                <h2>Dashboard</h2>
                <div class="row well" style="background-color:#ffffff">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-database fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-size: xx-large;"> <?php  
                                        echo $list_all_client; ?></div>
                                    <div><b>Client Records!</b></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>/index.php/CACM_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green" style="background-color: #33cc99; font-color:'white' !important">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-inverse fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="font-color:'white' !important">
                                    <div style="font-size: xx-large;"> <?php  
                                        echo $list_all_product; ?></div>
                                    <div><b>Products Registered!</b></div>
                                </div>
                            </div>
                        </div>
                         <a href="<?php echo base_url();?>/index.php/CAPM_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green" style="background-color: #ff2235; font-color:'white'">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gears fa-inverse fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="font-color:'white'">
                                    <div style="font-size: xx-large;"> <?php  
                                        echo $list_all_category; ?></div>
                                    <div><b>Categories Entered!</b></div>
                                </div>
                            </div>
                        </div>
                         <a href="<?php echo base_url();?>/index.php/CACat_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning" style="background-color: #ff2235; font-color:'white'">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="font-color:'white'">
                                    <div style="font-size: xx-large;"> <?php  
                                        echo $list_all_user; ?></div>
                                    <div><b>Users Available!</b></div>
                                </div>
                            </div>
                        </div>
                         <a href="<?php echo base_url();?>/index.php/CAU_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div><hr/>
                
                <h2>Links</h2>

                    <div class="row well well-lg" style="background-color:#ffffff">
                        
                        
                            <fieldset>
                             <div class= "row well well-lg " style="background-color:#ffffff">

                    <div class="list-group col-lg-4">
                      <a href="<?php echo base_url();?>/index.php/CACM_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Client Master</h4>
                        <p class="list-group-item-text">Add details of your new Client</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CAPM_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Product Master</h4>
                        <p class="list-group-item-text">Add details of your new Product</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CAProduct_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Product Technology</h4>
                        <p class="list-group-item-text">Add a new Product Technology</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CACP_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Client - Product Link </h4>
                        <p class="list-group-item-text">Link between Clients and Products of your Company</p>
                      </a>
                    </div>

                    <div class="list-group col-lg-4">
                      <a href="<?php echo base_url();?>/index.php/CACategory_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Add a Category</h4>
                        <p class="list-group-item-text">Add a new Category</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CACat_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Request Category - SubCategory</h4>
                        <p class="list-group-item-text">Add details of Categories and their Sub-Categories </p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CAPC_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Product - Category Link</h4>
                        <p class="list-group-item-text">Link between Products and Categories of your Company</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CAU_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">User</h4>
                        <p class="list-group-item-text">Add details of your new Users</p>
                      </a>
                    </div>

                    <div class="list-group col-lg-4">
                      <a href="<?php echo base_url();?>/index.php/CAUG_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">User - Group Link</h4>
                        <p class="list-group-item-text">Divide Users in various Groups</p>
                      </a>
                       <a href="<?php echo base_url();?>/index.php/CAAllocate_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Allocate</h4>
                        <p class="list-group-item-text">Allocate Users or Groups to various Raised Complaints.</p>
                      </a>
                    </div>
                    </div>
                               <!-- <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CACM_Controller">
                                    <input class="btn btn-primary form-control" value="Client Master" name="Client Master" type="button"></a>
                                </div>
                                 <div class="form-group col-lg-3">
                                   <a href="<?php echo base_url();?>/index.php/CAProduct_Controller">
                                   <input class="btn btn-primary form-control"  value="Add new Product Technology " name="Add a new Product Technology" type="button" ></a>
                                </div>

                                <div class="form-group col-lg-3">
                                   <a href="<?php echo base_url();?>/index.php/CAPM_Controller">
                                   <input class="btn btn-primary form-control"  value="Product Master" name="Product Master" type="button" ></a>
                                </div>

                                <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CACP_Controller">
                                    <input class="btn btn-primary form-control"  value="Client-Product Link" name="Client-Product Link" type="button" ></a>
                                </div>
                                 <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CACategory_Controller">
                                    <input class="btn btn-primary form-control"  value="Request Category" name="Request Category/ Sub-Category" type="button" ></a>
                                </div>
                                <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CACat_Controller">
                                    <input class="btn btn-primary form-control"  value="Request Sub-Category" name="Request Category/ Sub-Category" type="button" ></a>
                                </div>
                                <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CAPC_Controller">
                                    <input class="btn btn-primary form-control"  value="Product-Category Link" name="Product-Category Link" type="button" ></a>
                                </div>
                                <div class="form-group col-lg-3">
                                   <a href="<?php echo base_url();?>/index.php/CAU_Controller">
                                   <input class="btn btn-primary form-control"  value="User(Allocator)" name="User(Allocator)" type="button" ></a>
                                </div>
                                <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CAUG_Controller">
                                    <input class="btn btn-primary form-control"  value="User-Group Link" name="User-Group Link" type="button" ></a>
                                </div>
                                <div class="form-group col-lg-3">
                                    <a href="<?php echo base_url();?>/index.php/CAAllocate_Controller">
                                    <input class="btn btn-primary form-control"  value="Allocate" name="Allocate" type="button" ></a>
                                </div>-->


                            </fieldset>
                    
                    </div>
                   
                </div>
            </div>
        </div>
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
    </div>
</div>
<!-- Page Content End******************************************************************-->
</body>
</html>
