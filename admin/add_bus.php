<?php session_start();  
 if(isset($_SESSION['email'])) {
    if($_SESSION['role']=="admin"){
    include("db.php");
    $email= $_SESSION['email']; ?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 16:46:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin_static/images/favicon.png">
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin_static/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="admin_static/css/colors/blue.css" id="theme" rel="stylesheet">
     <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

     <link href="admin_static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin_static/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="admin_static/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!--alerts CSS -->
    <link href="admin_static/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
   
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="admin_static/images/2.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="admin_static/images/2.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="admin_static/images/21.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="admin_static/images/21.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                       

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-in"></i></a>
                           
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src=admin_static/images/users/profile.png alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src=admin_static/images/users/profile.png alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php print_r($_SESSION['name']); ?></h4>
                                                <p class="text-muted"><?php print_r($_SESSION['email']); ?></p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                   
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add_Bus</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="ad_index.php">Home</a></li>
                        <li class="breadcrumb-item">Add_Bus</li>
                    
                    </ol>
                </div>
               <!--  -->
            </div>
            <div class="container-fluid">
               
                </div>

                
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            
                            <div class="card-body">
                                <form method="POST" action="add_bus_proccess.php" >
                                    <div class="form-body">
                                        <h3 class="card-title">Add Bus Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bus_no</label>
                                                    <input required="" type="text" name="bno" class="form-control" placeholder="Enter bus number">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Destionation station</label>
                                                    <input type="text" name="destination" required="" class="form-control" placeholder="Enter Destination station">
                                                </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bus Description</label>
                                                    <textarea type="text" required="" name="description" class="form-control form-control-danger" placeholder="Enter bus description"></textarea>
                                                    </div>
                                            </div>

                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Source station</label>
                                                    <input  required="" type="text" name="source" class="form-control form-control-danger" placeholder="Enter Source station">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Source Time (H:M:AM/PM)</label>
                                                    <input  required="" type="Time" name="stime" class="form-control form-control-danger" placeholder="Enter Source Time">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Destination Time (H:M:AM/PM)</label>
                                                    <input  required="" type="Time" name="time" class="form-control form-control-danger" placeholder="Enter Destination Time">
                                                    </div>
                                            </div>

                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Total no.seat</label>
                                                    <input  required="" type="text" name="totalseat" class="form-control form-control-danger" placeholder="Enter Total no.seat">
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter Bus date</label>
                                                    <input  required="" type="date" name="bdate" class="form-control form-control-danger" placeholder="Enter bus date">
                                                    </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="text" name="price" required="" class="form-control" placeholder="Enter price">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
   <!--                                      <input type="submit" name="addbus" class="btn bnt-success" value="submit"> -->
                                        <button type="submit" name="addbus" class="btn btn-success"> <i class="fa fa-check"></i> Add Bus</button>
                                        <button type="submit" name="cancel" class="btn btn-inverse" formnovalidate>Cancel</button>
                                    </div>
<!--                                    <?php
                                        if(isset($_SESSION['addbus_error']))
                                        {?><h5 style="color: red">
                                           <?php echo $_SESSION['addbus_error'];?>
                                           </h5>
                                           <?php unset($_SESSION['addbus_error']);
                                        }
                                    ?>  -->
                                </form>
                            </div>
                        </div>
                    </div> 
            </div>
            <footer class="footer">
                SpeeOn Travels
            </footer>
        </div>
    </div>
    <script src="admin_static/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin_static/plugins/bootstrap/js/popper.min.js"></script>
    <script src="admin_static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin_static/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="admin_static/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin_static/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin_static/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="admin_static/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="admin_static/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="admin_static/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>
<?php 

    }
    else
    {
         header('location:../index.php');
    }

}
    ?>

</html>