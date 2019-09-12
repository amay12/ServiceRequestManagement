<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Master</title>
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
<style>
table{
     display: block;
     height: 400px;
     overflow-y: scroll;
}
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
               
            </button>
            

            <a href="#" class="navbar-brand"><b> <?php echo $companyname;?></b></a>
           
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
               
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
                            <footer><?php echo $companyname;?> Company Admin</footer>
                            </blockquote></a>
         </li><hr>
            <li >Client Master <span class="pull-right hidden-xs showopacity glyphicon glyphicon-wrench" id="glyph" ></span></li>
             <li><a href="<?php echo base_url();?>/index.php/CAProduct_Controller">Product Technology<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPM_Controller">Product Master<span class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CACP_Controller">Client-Product Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-transfer" id="glyph" ></span></a></li>
             <li><a href="<?php echo base_url();?>/index.php/CACategory_Controller">Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign" id="glyph" ></span></li>
            <li><a href="<?php echo base_url();?>/index.php/CACat_Controller">Category/Sub-Category<span class="pull-right hidden-xs showopacity glyphicon glyphicon-modal-window" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAPC_Controller">Product-Category Link<span class="pull-right hidden-xs showopacity glyphicon glyphicon-link" id="glyph" ></span></a></li>
            <li><a href="<?php echo base_url();?>/index.php/CAU_Controller">User<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" id="glyph" ></span></a></li>
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


                        <h1 class="heading" align="center"> Client Master</h1>
                        <?php if( $error= $this->session->flashdata('SA_data')):?>
                                         <div class="alert alert-success"><?= $error ?></div>
                        <?php endif; ?>

                        <div class="text-info"><p id="demo" align="right"></p>
                            <script>
                                document.getElementById("demo").innerHTML = Date();
                            </script>
                        </div>
                        <br/>
                        <div class="panel-body">

                            <div class="col-lg-6">
                                <?php echo form_open("/CACM_Controller/update/{$var->Sno}");?>
                                  <form>
                                    <div class="form-group" >
                                            <div class="form-group">
                                                <label>Company Code:</label><?php echo form_error('client_code','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company Code" class="form-control" name="client_code"
                                                value=<?php echo $var->client_code; ?>>
                                            </div>
                                            <div class="form-group">
                                                <label>Company name:</label><?php echo form_error('client_name','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company Name" class="form-control" name="client_name"
                                                value=<?php echo $var->client_name; ?>>
                                            </div>
                                            <div class="form-group">
                                                <label>Company City:</label><?php echo form_error('client_city','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company City" class="form-control" name="client_city"
                                                value=<?php echo $var->client_city; ?>>
                                            </div>

                                            <div class="form-group">
                                                <label>Company Contact No.:</label><?php echo form_error('client_mobile','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Contact Number" class="form-control" name="client_mobile"
                                                value=<?php echo $var->client_mobile; ?>>
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address:</label><?php echo form_error('client_email','<div style="color:#ff1111;" >', '</div>'); ?> <input type="email" placeholder="Enter your Email" class="form-control" name="client_email"
                                                value=<?php echo $var->client_email; ?>>
                                            </div>



                                            <div >
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                <input type="reset" class="btn btn-primary btn-sm"></button>
                                              <!--  <input type="reset" value="Reset" />-->
                                            </div>
                                    </div>
                            
                                </form>
                            </div>
                            <div class="col-lg-6">
                                   
                              
                            </div>
                            <?php echo form_close();?></div>


                        

                    </div>
                </div> </div>     </div> </div> </div> </div>

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