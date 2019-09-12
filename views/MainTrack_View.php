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
    <style>
table{
     display: block;
     height: 400px;
     overflow-y: scroll;
}
</style>
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
              <li ><a href="<?php echo base_url();?>/index.php/Main_Controller">Register Issue<span class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil" id="glyph" ></span></li></a>
              <li>Track Issue<span class="pull-right hidden-xs showopacity glyphicon glyphicon-search" id="glyph" ></span></li>
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
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="heading" align="center"> Welcome   <?php echo $fname;?>!<br><small> Service Request Management</small></h2>
             


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
             <h4>Complaints Registered By You:</h4><hr>
                     <?php if (!empty( $list_all)) { ?>
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
                                        <?php foreach ($list_all as $key => $value) {  ?>
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
                                          </tr>
                                        <?php } ?> 
                                    </table>
                                  <?php } ?>
                                    
                                </div> 

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
