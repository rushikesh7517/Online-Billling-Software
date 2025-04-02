


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"  rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">



<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">Ladachi Kulfi <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admindashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="addproduct.php">
                    <i class="fa fa-plus-square"></i>
                    <span>Add Products</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="product_qty_update.php">
                    <i class="fa fa-user-plus"></i>
                    <span>Update Quantity</span></a>
            </li>
            
             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="list_product.php">
                    <i class="fa fa-cubes"></i>
                    <span>View Products</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="register.php">
                    <i class="fa fa-user-plus"></i>
                    <span>Add Franchiese</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="list_register.php">
                    <i class="fa fa-fw fa-user"></i>
                    <span>View All Franchaise</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="orders.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>New Orders</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

                <!-- Nav Item - Tables -->
               <li class="nav-item active">
                 <a class="nav-link" href="previousorders.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Previous Orders</span></a>
                </li>
                 <!-- Divider -->
            <hr class="sidebar-divider">

                <li class="nav-item active">
                 <a class="nav-link" href="invoice_list.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Report</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                  <!-- <li> -->
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                <!-- </li> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                         <div class="topbar-divider d-none d-sm-block"></div>
                         

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="profile.php"  role="button" >
                            <input type="submit" class="btn btn-success" value="Myprofile">                               
                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>

                                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="adminlogout.php"  role="button" >
                               <input type="submit" class="btn btn-danger" value="LOGOUT">
                               
                            </a>
                                        </li>
                                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
                      
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

