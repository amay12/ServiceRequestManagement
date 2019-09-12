<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBuTBUSrjqFTIGszGonuu38LS5CLllPgqo">
    </script>
    <style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>

    <script>
        function initialize() {
            var mapProp = {
                center:new google.maps.LatLng(22.727027,75.85831),
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- For the Footer
    <link rel="stylesheet" href="demo.css">-->
    <link rel="stylesheet" href="footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/footer.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body background="c.jpg">
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
            <a href="#" class="navbar-brand">  <?php echo $companyname;?></a>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <!--  <li id="menu-toggle"> <a href="#">Menu</a></li> -->

               
                <li class="active" onclick="goBack()"> <a ><button class = "btn btn-link"><b>Go Back</b></button></a>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
               <li><a href="<?php echo base_url();?>/index.php/ContactUs_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>

        </div>
</nav>

<!-- Page Content*************************************-->
<div id="wrapper">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="heading" align="center"> Contact Us</h1>

                    <div class="text-info"><p id="demo" align="right"></p>
                        <script>
                            document.getElementById("demo").innerHTML = Date();
                        </script>
                    </div>
                    <p>We are here to answer any questions you may have about our website.
                        Reach out to us by filling this form and we'll respond as soon as we can.</p>
                         <?php if( $error= $this->session->flashdata('SA_data')):?>
                                    <div class="alert alert-success"><?= $error ?></div>
                            <?php endif; ?>

                    <br/>
                    <div class="panel-body">

                        <div class="col-lg-8">
                        <?php echo form_open('/ContactUs_Controller/submit_form');?>
                                <div class="login-panel panel panel-default"><!--Panel is used -->
                                    <div class="panel-heading"> <!--Panel Heading-->
                                        <h3 class="panel-title">Please Fill the Form</h3>
                                    </div>
                                    <div class="panel-body"><!--Panel Body-->
                                        <form role="form"><!--Form inside a panel-->
                                            <fieldset>
                                                <div class="form-group"> <?php echo form_error('email','<div style="color:#ff1111;" >', '</div>'); ?> 
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                                </div><!--Form control to cover the whole area-->
                                                <div class="form-group"> <?php echo form_error('name','<div style="color:#ff1111;" >', '</div>'); ?> 
                                                    <input class="form-control" placeholder="Name" name="name" type="text" value="">
                                                </div>
                                                <label>Description:</label><div class="form-group"> <?php echo form_error('description','<div style="color:#ff1111;" >', '</div>'); ?> 
                                                <textarea cols="25" rows="7" maxlength="250" name="description" placeholder="Maximum 250 words" class="form-control" style="resize: none"></textarea>
                                            </div>
                                                <!-- Change this to a button or input when using this as a form -->
                                                <button class="btn btn-lg btn-danger btn-block">Submit</a>
                                            </fieldset>
                                        </form><?php echo form_close();?>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="well">
                            <h4 class="heading" style="color: crimson;">Email us at:</h4>
                            <p><a href="mailto:amaysmailbox@gmail.com">amaysmailbox@gmail.com</a></p>
                            <br/>
                            <h4 class="heading" style="color: crimson;">Telephone:</h4>
                            <p>+(91)-9669604853</p><br/>

                            <h4 class="heading" style="color: crimson;">Address:</h4>
                            <p>EPS Infotech
                                C/O Pearls Computers
                                17 / A, Electronic Complex
                                Pardeshipura
                                Indore, Madhya Pradesh
                                India – 452010</p><br/>
                                <div id="googleMap" style="width:340px;height:250px;"></div>
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
