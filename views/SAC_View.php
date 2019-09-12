<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company</title>
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

            <a href="#" class="navbar-brand"><b> EPSINFOTECH</b></a>
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
                <li><a href="<?php echo base_url();?>/index.php/SA_Controller"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                <li> <a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

            </ul>

            <!--right align -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>/index.php/SAC_Controller/logout"><b>Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
            </ul>

        </div>
</nav>

<div id="wrapper">
    <!-- Side Bar*************************************************-->

    <div id="sidebar-wrapper" class="cat">

        <ul class="sidebar-nav" id="ulfont">
            <li >Company <span class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard" id="glyph" ></span></li>
            <li><a href="<?php echo base_url();?>/index.php/SAU_Controller">User<span class="pull-right hidden-xs showopacity glyphicon glyphicon-user" id="glyph" ></span></a></li>
            <li><a href="SAProperties.html">Properties<span class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list" id="glyph" ></span></a></li>
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


                        <h1 class="heading" align="center"> Company Panel</h1>
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

                            <div class="col-lg-4"><h4><u>Enter the Details:</u></h4>
                                <?php echo form_open('/SAC_Controller/submit_form');?>
                                  <form>
                                    <div class="form-group" >
                                            <div class="form-group">
                                                <label>Company Code:</label><?php echo form_error('company_code','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company Code" class="form-control" name="company_code">
                                            </div>
                                            <div class="form-group">
                                                <label>Company name:</label><?php echo form_error('company_name','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company Name" class="form-control" name="company_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Company City:</label><?php echo form_error('company_city','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Company City" class="form-control" name="company_city">
                                            </div>

                                            <div class="form-group">
                                                <label>Company Contact No.:</label><?php echo form_error('company_mobile','<div style="color:#ff1111;" >', '</div>'); ?> <input type="text" placeholder="Enter your Contact Number" class="form-control" name="company_mobile">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address:</label><?php echo form_error('company_email','<div style="color:#ff1111;" >', '</div>'); ?> <input type="email" placeholder="Enter your Email" class="form-control" name="company_email">
                                            </div>



                                            <div >
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                <input type="reset" class="btn btn-primary btn-sm"></button>
                                              <!--  <input type="reset" value="Reset" />-->
                                            </div>
                                    </div>
                            
                                </form><?php echo form_close();?>
                            </div>
                            <div class="col-lg-8" style="height: '500px'; overflow-y:'scroll'; position:'relative';">
                            
                                   
                              <?php if (!empty( $list_all )) { ?>
                                <h4><u>Company Entries:</u></h4>
                                 <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead><tr>
                                        <th>Company Code</th>
                                        <th>Company Name</th>
                                        <th>Company City</th>
                                        <th>Company Contact No</th>
                                        <th>Company Email</th>
                                        <th>Time Created</th>
                                        <th>Edit</th>
                                        <th>Delete</th></tr>
                                    </thead><tbody>
                                    <?php foreach ($list_all as $key => $value) {  ?>
                                    <tr><td class="filterable-cell"><?php echo $value['company_code'];?></td>
                                        <td><?php echo $value['company_name'];?></td>
                                        <td><?php echo $value['company_city'];?></td>
                                        <td><?php echo $value['company_mobile'];?></td>
                                        <td><?php echo $value['company_email'];?></td>
                                        <td><?php echo $value['company_time'];?></td>
                                        <td><?= anchor("/SAC_Controller/edit/{$value['Sno']}",
                                            'Edit', ['class' => 'btn btn-primary' ])?></td><td>
                                            <?= 
                                                form_open("/SAC_Controller/delete/{$value['Sno']}");
                                                form_hidden('Sno', $value['Sno']); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                
                                              <?=  form_close();
                                            ?>
                                            </td>
                                    </tr>
                                    <?php } ?></tbody>
                                    
                                </table>
                                <?php } ?>
                            </div>
                            
                            </div>

                        </div>
                    </div>
                </div></div></div>
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
        
    <!-- Page Content End******************************************************************-->

</body>
</html>
