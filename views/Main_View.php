<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Issue</title>
    <meta charset="utf-8">
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
</head>
<body>
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
                    <li class="active"><a href="#"><b>Home <span class="glyphicon glyphicon-home"></span></b></a></li>
                    <li> <a href="<?php echo base_url();?>/index.php/ContactUs_Controller"><b>Contact Us <span class="glyphicon glyphicon-earphone"></span></b></a></li>

                </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url();?>/index.php/Main_Controller/logout"><b><?php echo $fname;?> | Logout <span class="glyphicon glyphicon-log-out"></b></span></a></li>
                </ul>

            </div>
          </nav>

  <div id="wrapper">
<!-- Side Bar*************************************************-->

      <div id="sidebar-wrapper" class="cat">

          <ul class="sidebar-nav" id="ulfont">
               <li><a href="<?php echo base_url();?>/index.php/Main_Controller"><blockquote class="blockquote-reverse">
                            <p><?php echo $fname;?></p>
                            <footer><?php echo $companyname;?> User</footer>
                            </blockquote></a>
                </li><hr>
              <li >Register Issue<span class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil" id="glyph" ></span></li>
              <li><a href="<?php echo base_url();?>/index.php/MainTrack_Controller">Track Issue<span class="pull-right hidden-xs showopacity glyphicon glyphicon-search" id="glyph" ></span></a></li>
          </ul>
      </div>
      <script>
      $("#menu-toggle").click( function(e){
          e.preventDefault();
          $("#wrapper").toggleClass("menuDisplayed");
      });
    </script>
    <!--<script>
    $(function(){
    $('.cat').hover(function(){
        $(this).animate({width:'200px'},500);
    },function(){
        $(this).animate({width:'1px'},500);
    }).trigger('mouseleave');
});
    </script>-->

<!-- Page Content*******************************************************************************-->
      <div id="wrapper">      
          <div class="container-fluid">
          <div class="row">
          <div class="col-lg-12">
          <div id="page-content-wrapper" >

              <h2 class="heading" align="center"> Welcome   <?php echo $fname;?>!</h2>
              <h4 class="heading" align="center"> Service Request Management</h4>


              <?php if( $error= $this->session->flashdata('login_successful')):?>
                      <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    Congratulations, You are Logged In !
                </div>
                <?php endif; ?>
            <?php if( $error= $this->session->flashdata('SA_data')):?>
                         <div class="alert alert-success"><?= $error ?></div>
            <?php endif; ?>
            <div class="text-info"><p id="demo" align="right"></p>
              <script>
                document.getElementById("demo").innerHTML = Date();
              </script>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5"> 
                <h2>Register Your Issue</h2>
                <?php echo form_open('/Main_Controller/submit_form');?>
                    <div class="panel-body">
                        <form role="form" >
                            <div class="form-group" >
                              <div class="form-group"> 
                                      <label>Select a Product:</label>
                                      <select class="form-control" name="main_project">
                                      <?php foreach ($list_all_projects as $key => $value) {  ?>
                                      <option name="main_project"><?php echo $value['capm_name'];?></option>
                                      <?php } ?>
                                      </select>
                              </div>
                              <div class="form-group"> 
                                      <label>Select a Category:</label>
                                      <select class="form-control" name="main_category">
                                      <?php foreach ($list_all_categories as $key => $value) {  ?>
                                      <option name="main_project"><?php echo $value['category'];?></option>
                                      <?php } ?>
                                      </select>
                              </div>
                              <div class="form-group"> 
                                      <label>Select a Sub - Category:</label>
                                      <select class="form-control" name="main_subcategory">
                                      <?php foreach ($list_all_subcategories as $key => $value) {  ?>
                                      <option name="main_project"><?php echo $value['RCat_subcategory'];?></option>
                                      <?php } ?>
                                      </select>
                              </div>
                            </div>
                        <div class="form-group">
                                <label>Subject:</label> 
                                <?php echo form_error('main_subject','<div style="color:#ff1111;" >', '</div>'); ?>
                                <input type="text" placeholder="Enter a Subject" name= "main_subject" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Contact No:</label>
                                <?php echo form_error('main_mobile','<div style="color:#ff1111;" >', '</div>'); ?>
                                <input type="text" placeholder="Enter your Contact No." name= "main_mobile" class="form-control">
                        </div>
                        <div class="form-group">
                                <label>Description:</label>
                                <?php echo form_error('main_desc','<div style="color:#ff1111;" >', '</div>'); ?>
                                <textarea cols="25" rows="7" maxlength="250" placeholder="Maximum 250 words" 
                                name= "main_desc" class="form-control" style="resize: none"></textarea> 
                        </div>
                      <!--  <div class="form-group" id="upload-file-container" align="center">
                          Please select a file to attach:
                           <input type="file" name="photo" />
                         </div>-->
                         <div class="form-group" >
                             <label>File input:</label>
                             <input type="file" >
                         </div>

                        <div >
                          <button type="submit" class="btn btn-success btn-sm">Submit</button>
                          <input type="reset" class="btn btn-primary btn-sm"></button>
                      </div>

                   </div>
                   </div>
                   </form>
                   <?php echo form_close();?>

                   </div>
            </div>
          </div></div>
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
        







    </body>
</html>
