<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Escalate Complaints </title>
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

                  
                    <div class="text-info"><p id="demo" align="right"></p>
                        <script>
                            document.getElementById("demo").innerHTML = Date();
                        </script>
                    </div>
                  


                
                    <?php echo form_open('/R_Controller/escalate2');?>
                   
                    <div class="row well well-sm" style="background-color:#ffffff; text-align:center; " >
                    
                     <h3>Select a Group to Escalate this Issue:</h3><hr>
                     
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <th>Sno</th>
                                                <th>Group</th>
                                            </tr>
                                            <tr><td>Group 1</td>
                                                <td><input type = "radio" name= "group" value="7777"> </td>
                                            </tr>
                                            <tr><td>Group 2</td>
                                                <td><input type = "radio" name= "group" value="8888"> </td>
                                            </tr>
                                            <tr><td>Group 3</td>
                                                <td><input type = "radio" name= "group" value="9999"> </td>
                                            </tr>
                                        </table>
                                    </div><div class = "col-lg-3"></div><div class = "col-lg-6"><hr>
                                    <input type = "submit" class="btn btn-success btn-md">
                    </div></div><?php echo form_close();?>
                </div>


               
                
                
             

                     
                        
                            
                        
                          
                           
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
