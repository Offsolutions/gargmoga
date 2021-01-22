<?php
// if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
//     $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     header('HTTP/1.1 301 Moved Permanently');
//     header('Location: ' . $location);
//     exit;
// }
// require_once("ajax.php");
$where = array(
    "id" => 1,
);
$admin = $obj->selectData("admin", $where);
$meta_desc_admin = $admin["meta_desc"];
$meta_keys_admin = $admin["meta_keys"];
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="<?php if (isset($meta_desc)) {
                                            echo $meta_desc;
                                        } else {
                                            echo $meta_desc_admin;
                                        } ?>">
    <meta name="keywords" content="<?php if (isset($meta_keys)) {
                                        echo $meta_keys;
                                    } else {
                                        echo $meta_keys_admin;
                                    } ?>" />
    <title><?php echo isset($page_title) ? $page_title : "Garg" ?></title>
    <link href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>" rel="shortcut icon" type="image/png">


    <link rel="icon" href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152"
        href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>">
    <link rel="apple-touch-icon" sizes="120x120"
        href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>">
    <link rel="apple-touch-icon" href="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="../../../../../use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet"
        crossorigin="anonymous">
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="css/menu.css" rel="stylesheet">
    <link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery.datetimepicker.min.css" rel="stylesheet">

    <!-- TEMPLATE CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>




<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0"
        nonce="QZstAN83"></script>






    <div id="page" class="page">




        <!-- HEADER
    ============================================= -->
        <header id="header-2" class="header">


            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                <span class="smllogo"><img src="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>"
                        width="300" alt="mobile-logo" /></span>
                <a href="tel:<?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?>" class="callusbtn"><i
                        class="fas fa-phone"></i></a>
            </div>


            <!-- HEADER WIDGETS -->
            <div class="hero-widget clearfix">
                <div class="container">
                    <div class="row d-flex align-items-center">


                        <!-- LOGO IMAGE -->
                        <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                        <div class="col-md-5 col-xl-6">
                            <div class="desktoplogo"><a href="#hero-4"><img
                                        src="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>"
                                        width="300" alt="header-logo"></a></div>
                        </div>

                        <!-- WIDGETS -->
                        <div class="col-md-7 col-xl-6">
                            <div class="row">

                                <!-- Emergency Cases Widget
                            <div class="col-md-6">
                                <div class="header-widget icon-xs">
                                    <span class="flaticon-039-emergency-call-1 blue-color"></span>
                                    <div class="header-widget-txt">
                                        <p>Emergency Cases</p>
                                        <p class="header-widget-phone steelblue-color">1-800-123-4560</p>
                                    </div>
                                </div>
                            </div>-->
                                <!-- Working Hours Widget -->
                                <div class="col-md-6">
                                    <div class="header-widget icon-xs">
                                        <span class="flaticon-092-clock blue-color"></span>
                                        <div class="header-widget-txt">
                                            <p class="txt-400">Hours:</p>
                                            <p class="lightgrey-color">
                                                <?php echo isset($admin["open_time"]) ? $admin["open_time"] : ""; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Location Widget -->
                                <div class="col-md-6">
                                    <div class="header-widget icon-xs">
                                        <span class="flaticon-021-hospital-9 blue-color"></span>
                                        <div class="header-widget-txt">
                                            <?php echo isset($admin["address"]) ? $admin["address"] : ""; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- END WIDGETS -->

                    </div>
                </div>
            </div> <!-- END HEADER WIDGETS -->
            <!-- NAVIGATION MENU -->
            <div class="wsmainfull menu clearfix">
                <div class="wsmainwp clearfix">

                    <!-- LOGO IMAGE -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                    <div class="desktoplogo"><a href="#hero-4"><img
                                src="images/<?php echo isset($admin["logo"]) ? $admin["logo"] : ""; ?>" width="300"
                                alt="header-logo"></a></div>

                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix">
                        <ul class="wsmenu-list">


                            <!-- DROPDOWN MENU -->
                            <li aria-haspopup="true">
                                <a href="index.php">Home </a>
                            </li>
                            <li aria-haspopup="true">
                                <a href="about-us.php">About Us </a>
                            </li>
                            <li aria-haspopup="true">
                                <a href="gallery.php">Gallery </a>
                            </li>
                            <li aria-haspopup="true">
                                <a href="services.php">Services <span class="wsarrow"></span></a>
                                <ul class="sub-menu">
                                    <?php
                                    $recordsh = $obj->getData("services");
                                    if ($recordsh) {
                                        $sr = 0;
                                        foreach ($recordsh as $rowsh) {
                                            $sr++;
                                    ?>
                                    <li aria-haspopup="true"><a
                                            href="service_details.php?service=<?php echo $rowsh["page_title"]; ?>"><?php echo $rowsh["title"]; ?></a>
                                    </li>
                                    <?php
                                        }
                                    } else {
                                        echo "";
                                    }
                                    ?>

                                </ul>
                            </li> <!-- END DROPDOWN MENU -->
                            <li aria-haspopup="true">
                                <a href="team.php">Our Team</a>
                            </li>
                            <li aria-haspopup="true">
                                <a href="contact-us.php">Contact Us </a>
                            </li>
                            <!-- HIDDEN NAVIGATION MENU BUTTON -->
                            <li class="nl-simple header-btn" aria-haspopup="true"><a class="blue-hover"
                                    href="timetable.html">Our Doctors Timetable</a></li>


                        </ul>

                    </nav> <!-- END MAIN MENU -->
                    <!-- NAVIGATION MENU BUTTON -->
                    <div class="header-button">
                        <span class="nl-simple header-btn blue-hover"><a href="timetable.html">Our Doctors
                                Timetable</a></span>
                    </div>


                </div>
            </div> <!-- END NAVIGATION MENU -->


        </header>