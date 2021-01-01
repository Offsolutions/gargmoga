<?php
require_once("action.php");
if (!isset($_SESSION["admin_email"])) {
    echo "<script>
    window.location.assign('index.php');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Admin Panel">
    <meta name="author" content="Admin">

    <title>Admin Panel</title>
    <link href="../images/<?php echo isset($_SESSION["logo"]) ? $_SESSION["logo"] : ""; ?>" rel="shortcut icon" type="image/png">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/styles/style.min.css">

    <!-- Material Design Icon -->
    <link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Dropify -->
    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">
    <!-- TinyMCE -->
    <link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">
    <!-- Must include this script FIRST -->
    <script src="assets/plugin/tinymce/tinymce.min.js"></script>
    <!-- Waves Effect -->
    <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
    <!-- Lightview -->
    <link rel="stylesheet" href="assets/plugin/lightview/css/lightview/lightview.css">
    <!-- Color Picker -->
    <link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">

    <link rel="stylesheet" href="https://unpkg.com/toastmejs@latest/dist/css/toastme.css" />
    <script src="https://unpkg.com/toastmejs@latest/dist/js/toastme.min.js"></script>
    <!-- Data Tables -->
    <link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
</head>

<body>

    <script>
        //Customize your Notification
        const config = {
            timeout: 15000,
            positionY: "bottom", // top or bottom
            positionX: "right", // right left, center
            distanceY: 20, // Integer value
            distanceX: 20, // Integer value
            zIndex: 100, // Integer value
            theme: "default", // default, ligh or  dark (leave empty for "default" theme)
            duplicates: false, // true or false - by default it's false
        };
        //Create a new Toastmejs class instance
        const mytoast = new Toastme(config);
        //Call it whenever you want!
    </script>

    <?php
    if (isset($_SESSION["msg"])) {
    ?>
        <script>
            mytoast.<?php echo $_SESSION['status']; ?>("<?php echo $_SESSION['msg']; ?>");
        </script>
    <?php
        unset($_SESSION["msg"]);
        unset($_SESSION["status"]);
    } ?>

    <div class="main-menu">
        <header class="header">
            <a href="dashboard.php" class="logo">Admin</a>
            <button type="button" class="button-close fa fa-times js__menu_close"></button>
        </header>
        <!-- /.header -->
        <div class="content">

            <div class="navigation">
                <ul class="menu js__accordion">
                    <li class="<?php if ($page == 'dashboard.php') echo 'current'; ?>">
                        <a class="waves-effect" href="dashboard.php"><i class="menu-icon fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li class="<?php if ($page == 'admin_details.php') echo 'current'; ?>">
                        <a class="waves-effect" href="admin_details.php"><i class="menu-icon fa fa-cogs"></i><span>Admin Details</span></a>
                    </li>
                    <li class="<?php if ($page == 'pages.php') echo 'current'; ?>">
                        <a class="waves-effect" href="pages.php"><i class="menu-icon fa fa-sliders"></i><span>Page Settings</span></a>
                    </li>
                    <li class="<?php if ($page == 'welcome.php') echo 'current'; ?>">
                        <a class="waves-effect" href="welcome.php"><i class="menu-icon fa fa-flag"></i><span>Welcome</span></a>
                    </li>

                    <li class="<?php if ($page == 'gallery.php' || $page == "gallery_cat.php" || $page == "video.php") echo 'current active'; ?>">
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-image"></i><span>Gallery</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li class="<?php if ($page == 'gallery.php') echo 'current'; ?>"><a href="gallery.php">Gallery</a></li>
                            <li class="<?php if ($page == 'video.php') echo 'current'; ?>"><a href="video.php">Videos</a></li>
                            <!-- <li class="<?php if ($page == 'gallery_cat.php') echo 'current'; ?>"><a href="gallery_cat.php">Category</a></li> -->
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li class="<?php if ($page == 'banners.php') echo 'current active'; ?>">
                        <a class="waves-effect" href="banners.php"><i class="menu-icon fa fa-flag"></i><span>Banners</span></a>
                    </li>
                    <li class="<?php if ($page == 'testimonials.php' || $page == "add_testimonials.php") echo 'current active'; ?>">
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-tumblr"></i><span>Testimonials </span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li class="<?php if ($page == 'testimonials.php') echo 'current'; ?>"><a href="testimonials.php">Testimonials</a></li>
                            <li class="<?php if ($page == 'add_testimonials.php') echo 'current'; ?>"><a href="add_testimonials.php">Add Testimonials</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li class="<?php if ($page == 'features.php' || $page == "add_features.php") echo 'current active'; ?>">
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-gift"></i><span>Features</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li class="<?php if ($page == 'features.php') echo 'current'; ?>"><a href="features.php">Features</a></li>
                            <li class="<?php if ($page == 'add_features.php') echo 'current'; ?>"><a href="add_features.php">Add Features</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li class="<?php if ($page == 'services.php' || $page == "add_services.php") echo 'current active'; ?>">
                        <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-gears"></i><span>Services</span><span class="menu-arrow fa fa-angle-down"></span></a>
                        <ul class="sub-menu js__content">
                            <li class="<?php if ($page == 'services.php') echo 'current'; ?>"><a href="services.php">Services</a></li>
                            <li class="<?php if ($page == 'add_services.php') echo 'current'; ?>"><a href="add_services.php">Add services</a></li>
                        </ul>
                        <!-- /.sub-menu js__content -->
                    </li>
                    <li class="<?php if ($page == 'clients.php') echo 'current active'; ?>">
                        <a class="waves-effect" href="clients.php"><i class="menu-icon fa fa-group"></i><span>Our Partners</span></a>
                    </li>
                    <li class="<?php if ($page == 'team.php') echo 'current active'; ?>">
                        <a class="waves-effect" href="team.php"><i class="menu-icon fa fa-group"></i><span>Team</span></a>
                    </li>
                   
                </ul>
                <!-- /.menu js__accordion -->
            </div>
            <!-- /.navigation -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.main-menu -->

    <div class="fixed-navbar">
        <div class="pull-left">
            <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
            <h1 class="page-title"><?php echo strtoupper($_SESSION['admin_name']); ?></h1>
            <!-- /.page-title -->
        </div>
        <!-- /.pull-left -->
        <div class="pull-right">

            <!-- /.ico-item -->
            <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
            <div class="ico-item">
                <img src="../images/<?php echo isset($_SESSION["logo"]) ? $_SESSION["logo"] : ""; ?>" alt="" class="ico-img">
                <ul class="sub-ico-item">
                    <li><a class="" href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
                <!-- /.sub-ico-item -->
            </div>
            <!-- /.ico-item -->
        </div>
        <!-- /.pull-right -->
    </div>
    <!-- /.fixed-navbar -->


    <div id="wrapper">
        <div class="main-content">