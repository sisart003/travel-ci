<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Travel Agency - Bootstrap 4 Admin Dashboard Template</title>
    <style>
        body{
            overflow: hidden;
        }
        .table-wrap{
            height: 575px;
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Travel Agency</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" ><i class="fa fa-fw fa-user-circle"></i>Users</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" ><i class="fas fa-clipboard-list"></i>Categories</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" ><i class="fas fa-list-alt"></i>Sub-Categories</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" ><i class=" fas fa-box"></i>Package</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" ><i class="fas fa-hand-paper"></i>Inquiry</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">User Form</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <!-- ============================================================== -->
                                    <!-- basic form -->
                                    <!-- ============================================================== -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <form action="#" id="basicform" data-parsley-validate="" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="inputFirstname">First Name</label>
                                                        <input id="inputFirstname" type="text" name="fname" data-parsley-trigger="change" required="" placeholder="Enter your first name" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputLastName">Last Name</label>
                                                        <input id="inputLastName" type="text" name="lname" data-parsley-trigger="change" required="" placeholder="Enter you last name" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputUserName">Username</label>
                                                        <input id="inputUserName" type="text" name="username" data-parsley-trigger="change" required="" placeholder="Enter you username" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputEmail">Email</label>
                                                        <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter your email" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputPassword">Password</label>
                                                        <input id="inputPassword" type="password" name="password" data-parsley-trigger="change" required="" placeholder="Enter your password" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputConfirmPassword">Confirm Password</label>
                                                        <input id="inputConfirmPassword" type="password" name="password2" data-parsley-trigger="change" required="" placeholder="Confirm your password" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputMobile">Phone</label>
                                                        <input id="inputMobile" type="number" name="phone" data-parsley-trigger="change" required="" placeholder="Enter your mobile" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputUserName">Birthday</label>
                                                        <input id="inputUserName" type="date" name="birthday" data-parsley-trigger="change" required="" placeholder="Enter your birthday" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputUserName">Upload Photo</label>
                                                        <input id="inputUserName" type="file" name="photo" data-parsley-trigger="change" required="" placeholder="Upload your photo" autocomplete="off" class="form-control">
                                                    </div>

                                                    <div class="row my-4">
                                                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                            <label class="be-checkbox custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-6 pl-0">
                                                            <p class="text-right">
                                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-plus"></i> Create New User
                            </button>
                            <br><br>
                            <div class="card">
                                <h5 class="card-header">User Table </h5>                                 
                                <div class="card-body table-wrap">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Profile</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Type of User</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/59/19/37/591937e67896b1c2d5091bdbadb454ab.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/bd/3f/0b/bd3f0be69ba16dccf908c39ea24fbf1b.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/72/ce/42/72ce425218439871fa9d4cf52fa634b7.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/49/30/d3/4930d341c20c71dffa67443ddfca09cb.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/5d/d1/b2/5dd1b218ae6ca1492c3e773224c117d4.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>
                                                    <img src="https://i.pinimg.com/736x/48/c3/36/48c33662ba4c23373a4d6c8d1f764499.jpg" alt="" class="img-thumbnail" style="height: 128px; width: 128px;">
                                                </td>
                                                <td>Chrishart Estrada</td>
                                                <td>sisart003</td>
                                                <td>sisart003@gmail.com</td>
                                                <td>Admin</td>
                                                <td>
                                                    <a href="#" class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                    <a href="#" class="btn btn-light"> <i class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                        <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Travel Agency. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?php echo base_url(); ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url(); ?>assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?php echo base_url(); ?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url(); ?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?php echo base_url(); ?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?php echo base_url(); ?>assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>