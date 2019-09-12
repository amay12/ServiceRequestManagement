<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- For the Footer-
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
            <a href="#" class="navbar-brand">  EPSINFOTECH</a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <!--  <li id="menu-toggle"> <a href="#">Menu</a></li> -->

                <li class="active"><a href="#"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                <li > <a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>/index.php/SA_Controller/logout"><b>Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
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
                <h1 class="heading" align="center"> Welcome 
                    <?php foreach ($list_all_name as $key => $value) {  
                          echo $value['fname'];} ?> !</h1>

                 <?php if( $error= $this->session->flashdata('login_successful')):?>
                      <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Congratulations, You are Logged In !
                </div>
                 <?php if( $error= $this->session->flashdata('SA_data')):?>
                                    <div class="alert alert-success"><?= $error ?></div>
                            <?php endif; ?>
                <?php endif; ?>

                
                <div class="text-info"><p id="demo" align="right"></p>
                    <script>
                        document.getElementById("demo").innerHTML = Date();
                    </script>
                </div><br/><hr/>
                <h2>Dashboard</h2>
                <div class="row well" style="background-color:#ffffff">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div style="font-size: xx-large;">
                                        <?php  
                                        echo $list_all_company; ?>

                                    </div>
                                    <div><b>Company Records!</b></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>/SAC_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div><div class="col-lg-1"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green" style="background-color: #33cc99; font-color:'white' !important">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-inverse fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="font-color:'white' !important">
                                    <div style="font-size: xx-large;">
                                         <?php  
                                        echo $list_all_user; ?>

                                    </div>
                                    <div><b>Users Registered!</b></div>
                                </div>
                            </div>
                        </div>
                         <a href="<?php echo base_url();?>/SAU_Controller"> 
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div><div class="col-lg-1"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green" style="background-color: #ff2235; font-color:'white'">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gears fa-inverse fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right" style="font-color:'white'">
                                    <div style="font-size: xx-large;">2</div>
                                    <div><b>Properties Entered!</b></div>
                                </div>
                            </div>
                        </div>
                         <a href="#"> 
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
                      <a href="<?php echo base_url();?>/index.php/SAC_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Company</h4>
                        <p class="list-group-item-text">Add details of your partner Companies.</p>
                      </a>
                       
                    </div>

                    <div class="list-group col-lg-4">
                      <a href="<?php echo base_url();?>/index.php/SAU_Controller" class="list-group-item ">
                        <h4 class="list-group-item-heading">Users</h4>
                        <p class="list-group-item-text">Add a new Company Admin.</p>
                      </a>
                       
                     
                    </div>

                    <div class="list-group col-lg-4">
                      <a href="#" class="list-group-item ">
                        <h4 class="list-group-item-heading">Properties</h4>
                        <p class="list-group-item-text">Add Properties for your Companies.</p>
                      </a>
                      
                    </div>
                    </div>


                      </fieldset>
                    
            </div>

                <h2>Feedbacks</h2>
                
               
                
                <div class="row well well-lg" style="background-color:#ffffff">
                    
                   
                     <div class="row well well-lg" style="background-color:#ffffff" style="position:relative;">
                        <?php if (!empty( $list_all_feedback)) { ?>
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <th>Sno</th>
                                        <th>Email </th>
                                        <th>Name</th>
                                        <th>Description</th> 
                                        <th>id</th>
                                        <th>User Account Name</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                    <?php foreach ($list_all_feedback as $key => $value) {  ?>
                                    <tr><td><?php echo $value['Sno'];?></td>
                                        <td><?php echo $value['email'];?></td>
                                        <td><?php echo $value['name'];?></td>
                                        <td><?php echo $value['description'];?></td>
                                        <td><?php echo $value['id'];?></td>
                                        <td><?php echo $value['uname'];?></td>
                                        <td><?= anchor("/SA_Controller/edit/{$value['Sno']}",
                                            'Handled', ['class' => 'btn btn-primary btn-sm' ])?>
                                        </td>   
                                    </tr>
                                    <?php } ?>
                                    
                                </table>
                                <?php } else echo "Good Work! No Feedback to handle.";?>
                            </div>
                        
                </div>
                    
            </div>
            </div>
        </div>
    </div>

    <!-- Footer **************************************************************** -->
    <br/>
    <br/>
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
</div>
</div>
<!-- Page Content End******************************************************************-->
</body>
</html>
