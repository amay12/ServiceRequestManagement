<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- For the Footer
   <link rel="stylesheet" href="demo.css">-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/footer.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>
<body background="<?php echo base_url();?>/assets/c.jpg" >
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">

                <!--<a href="#" class="navbar-left"><img src="logo.png" style="width: 150px; height=40px; "></a>-->
               <a href="#" class="navbar-brand">EPSINFOTECH</a>
            </div>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Sign-In</a></li>

                    <li><a href="ContactUs.html">Contact Us</a></li>


                </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- drop down menu -->
                    <li class="dropdown-inverse">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Forgot Password</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
    </nav>
    <div class="container-fluid">
        <br/>
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default"><!--Panel is used -->
                    <div class="panel-heading"> <!--Panel Heading-->
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body"><!--Panel Body-->
                        <?php echo form_open('/Login_Controller/submit_form');?>
                        <form role="form"><!--Form inside a panel-->
                            <fieldset>
                                <div class="form-group">
                                <?php echo form_error('email','<div class="text-danger" >', '</div>'); ?>
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                </div><!--Form control to cover the whole area-->
                                <?php echo form_error('password', '<div class="text-danger" >', '</div>'); ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Log-In</button>
                                
                            </fieldset>
                        </form>  
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>    </div>
        <!-- Footer*******************************************************************************-->
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

        <!-- End of Footer******************************* -->


</body>
</html>
