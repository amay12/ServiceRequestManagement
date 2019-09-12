<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>In-process Complaints </title>
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
            <a href="#" class="navbar-brand"> <b> <?php echo $companyname;?></b></a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <!--  <li id="menu-toggle"> <a href="#">Menu</a></li> -->

                <li><a href="<?php echo base_url();?>/index.php/R_Controller"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                <li><a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>/index.php/CA_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>

    </div>
</nav>
<div id="wrapper">

<!-- Page Content*************************************-->
<div id="wrapper" style="background-color:#f1f1f1">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12" style="position:relative;">

                    <h1 class="heading" align="center"><small><?php echo $fname;?>'s</small><br> Complaint Inbox</h1>

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
                  


                
                   
                   
                    <div class="row well well-sm" style="background-color:#ffffff;">
                    
                     <h3>Selected In-Process Complaint:</h3><hr>
                     <?php if (!empty( $var)) { ?>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <tr>
                                            <th>Sno</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Sub Category</th>
                                            <th>Subject</th>
                                            <th>Contact No</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Complaint Raise Time</th>
                                             <th>Complaint By</th>
                                            
                                            
                                        </tr>
                                        <?php foreach ($var as $key => $value) {  ?>
                                        <tr><td><?php echo $value['Sno'];?></td>
                                            <td><?php echo $value['product_name'];?></td>
                                            <td><?php echo $value['category'];?></td>
                                            <td><?php echo $value['sub_category'];?></td>
                                            <td><?php echo $value['subject'];?></td>
                                            <td><?php echo $value['mobile'];?></td>
                                            <td><?php echo $value['description'];?></td>
                                            <td><?php echo $value['status'];?></td>
                                            <td><?php echo $value['time'];?></td>
                                            <td><?php echo $value['user_fname']." ".$value['user_lname'];?></td>
                                           <?=form_hidden('Sno', $value['Sno']); ?>
                                            
                                        </tr>
                                       

                                        
                                    </table>
                                    
                                </div> 

                            
                   
                    </div>
                </div>
                </div>


               
                
                
                
                <h3> Actions:</h3>

                    <div class="row well well-lg" style="background-color:#ffffff" style="position:relative;">
                        <div class="list-group col-lg-4">
                        

                      <a href="#">
                        <h4 class="list-group-item-heading"> <?= anchor("/R_Controller/resolve/{$value['Sno']}",'Resolved', ['class' => 'btn btn-success btn-bg btn-block' ])?></h4>
                        <p class="list-group-item-text">Select when you have resolved the user issue.</p>
                      </a></div>
                      <div class="list-group col-lg-4">
                       <a href="#">
                        <h4 class="list-group-item-heading"> <?= anchor("/R_Controller/escalate/{$value['Sno']}",'Escalate', ['class' => 'btn btn-warning btn-bg btn-block' ])?></h4>
                        <p class="list-group-item-text">Select when you need to escalate this issue to a different group.</p>
                      </a></div>
                      <div class="list-group col-lg-4">
                       <a href="#">
                        <h4 class="list-group-item-heading">  <?= anchor("/R_Controller/hold/{$value['Sno']}",'Hold', ['class' => 'btn btn-danger btn-bg btn-block' ])?>
                        </h4>
                        <p class="list-group-item-text">Select when you want to keep the issue in-process to hold.</p>
                      </a></div>
                       
                    </div>  
                        
                            
                        
                           <?php } ?><?php } ?>
                           
                         </div>
                          </div>    
                    </div>
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
