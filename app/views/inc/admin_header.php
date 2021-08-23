 <!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Shreyu - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo URLROOT; ?>/assets/images/newNasdIcon.jpg">

        <!-- plugins -->
        <link href="<?php echo URLROOT; ?>/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
         
            <!-- Table Daata css -->
        <link href="<?php echo URLROOT; ?>/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="left-side-menu-dark">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
                <div class="container-fluid">
                    <!-- LOGO -->
                    <a href="index.html" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="assets/images/logo.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">Shreyu</span>
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo.png" alt="" height="24">
                        </span>
                    </a>

                    

                </div>

            </div>
            <!-- end Topbar -->

           <?php include"admin_nav.php"; ?>