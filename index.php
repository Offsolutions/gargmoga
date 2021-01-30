<?php
require_once("action.php");
$page = basename($_SERVER['PHP_SELF']);
$page_title = "";
require_once("header.php"); ?>
<!-- END HEADER -->
<!-- HERO-4
    ============================================= -->
<section id="hero-6" class="hero-section division">


    <!-- SLIDER -->
    <div class="slider">
        <ul class="slides">

            <?php
            $record_banner = $obj->getData("banners");
            if ($record_banner) {
                $srb = 0;
                foreach ($record_banner as $row_banner) {
                    $srb++;
            ?>

                    <!-- SLIDE #1 -->
                    <li id="slide-<?php echo $srb; ?>">

                        <!-- Background Image -->
                        <img src="images/<?php echo isset($row_banner["img"]) ? $row_banner["img"] : ""; ?>" alt="slide-background">

                        <!-- Image Caption -->
                        <div class="caption d-flex align-items-center center-align">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption-txt black-color">

                                            <?php echo isset($row_banner["title"]) ? $row_banner["title"] : ""; ?>
                                            <!-- Button -->
                                            <a href="about-us.php" class="btn btn-blue tra-white-hover">More About Us</a>

                                        </div>
                                    </div>
                                </div> <!-- End row -->
                            </div> <!-- End container -->
                        </div> <!-- End Image Caption -->

                    </li> <!-- END SLIDE #1 -->
            <?php

                }
            } else {
                echo "";
            } ?>



        </ul>
    </div> <!-- END SLIDER -->


</section> <!-- END HERO-4 -->
<!-- INFO-4
    ============================================= -->
<section id="about-1" class="about-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- ABOUT BOX #1 -->
            <div id="abox-1" class="col-md-6 col-lg-3">
                <div class="abox-1 white-color">

                    <!-- Title -->
                    <h5 class="h5-md">Emergency Cases</h5>

                    <!-- Text -->
                    <h5 class="h5-lg emergency-call"><i class="fa fa-phone"></i> <a href="tel:<?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?>"><?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?></a>
                    </h5>
                    <p class="mt-20">
                        Get The Quality Care That You Deserve Immediately
                    </p>
                    <a href="contact-us.php" class="btn btn-sm btn-tra-white mt-45">Contact Us</a>

                </div>
            </div>


            <!-- ABOUT BOX #2 -->
            <div id="abox-2" class="col-md-6 col-lg-3">
                <div class="abox-1 white-color">

                    <h5 class="h5-md">Find a Doctors</h5>

                    <!-- Text -->
                    <p>
                        We are the top hospital in Punjab that is served with best doctors in every department who are
                        ready at your service all round the clock.
                    </p>

                    <!-- Button -->
                    <a href="team.php" class="btn btn-sm btn-tra-white mt-25">click here</a>

                </div>
            </div>


            <!-- ABOUT BOX #3 -->
            <div id="abox-3" class="col-md-6 col-lg-3">
                <div class="abox-1 white-color">

                    <!-- Title -->
                    <h5 class="h5-md">Appointments</h5>

                    <!-- Text -->
                    <p>
                        Just make an appointment to get help from our experts. It is simple and quick.
                    </p>

                    <!-- Button -->
                    <a href="#" class="btn btn-sm btn-tra-white " style="margin-top: 65px;">Make an Apointment</a>

                </div>
            </div>


            <!-- ABOUT BOX #4 -->
            <div id="abox-4" class="col-md-6 col-lg-3">
                <div class="abox-1 white-color">
                    <!-- Title -->
                    <h5 class="h5-md">24/7 AVAILABILITY</h5>
                    <p style="text-align: justify;">Garg Hospital is known for providing advanced emergency services
                        with rapid response for any kind of treatment. Our emergency department is always ready for
                        these services. </p>
                </div>
            </div>


        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
<?php
$where = array(
    "id" => 1,
);
$row_wcu = $obj->selectData("welcome", $where);
// print_r($row);
if ($row_wcu) {
?>
    <section id="info-4" class="wide-100 info-section division">
        <div class="container">


            <!-- TOP ROW -->
            <div class="top-row mb-80">
                <div class="row d-flex align-items-center">


                    <!-- INFO IMAGE -->
                    <div class="col-lg-6">
                        <div class="info-4-img text-center wow fadeInUp" data-wow-delay="0.6s">
                            <img class="img-fluid" src="images/<?php echo $row_wcu["img"]; ?>" alt="info-image">
                        </div>
                    </div>


                    <!-- INFO TEXT -->
                    <div class="col-lg-6">
                        <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Section ID -->
                            <span class="section-id blue-color">Welcome to Garg Hospital Multi Speciality</span>

                            <!-- Title -->
                            <h3 class="h3-md steelblue-color"><?php echo $row_wcu["title"]; ?></h3>

                            <?php echo $row_wcu["w_desc"]; ?>
                            <!-- Singnature -->


                        </div>
                    </div> <!-- END TEXT BLOCK -->


                </div> <!-- End row -->
            </div> <!-- END TOP ROW -->
            <!-- BOTTOM ROW -->



        </div> <!-- End container -->
    </section>
<?php
} else {
    echo "";
}
?>
<!-- END INFO-4 -->
<!-- SERVICES-7
    ============================================= -->

<section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Our Features</h3>

                <!-- Text -->
                <p>
                    Garg Hospital believes in providing quality healthcare services at affordable cost.
                    Our teams of expert medical professionals with combined extensive clinical expertise develop a
                    perfect treatment plan that is best for you.
                </p>

            </div>
        </div>


        <div class="row">


            <!-- SERVICE BOXES -->
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    $record_features = $obj->getData("features");
                    if ($record_features) {
                        $sr = 0;
                        foreach ($record_features as $row_features) {
                            $sr++;
                    ?>

                            <!-- SERVICE BOX #1 -->
                            <div class="col-md-6">
                                <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
                                   
                                        <!-- <span class="flaticon-137-doctor blue-color"></span> -->
                                        <img style="width: 50px;" src="images/<?php echo $row_features["img"]; ?>" alt="" srcset=""> 
                                        <h5 class="h5-sm steelblue-color"><?php echo $row_features["title"]; ?></h5>
                                        <!-- Text -->
                                        <div class="sbox-7-txt">
                                           
                                            <!-- Title -->
                                          

                                            <!-- Text -->
                                            <p class="p-sm">
                                                
                                                <?php echo $row_features["f_desc"]; ?>
                                            </p>

                                        </div>

                                   
                                </div>
                            </div> <!-- END SERVICE BOX #1 -->

                    <?php
                        }
                    } else {
                        echo "";
                    } ?>

                </div>
            </div> <!-- END SERVICE BOXES -->
            <!-- INFO TABLE -->
            <div class="col-lg-4">
                <div class="services-7-table blue-table mb-30 wow fadeInUp" data-wow-delay="0.6s">

                    <!-- Title -->
                    <h5 class="h5-md">Emergency Cases</h5>

                    <!-- Text -->
                    <h5 class="h5-lg emergency-call"><i class="fa fa-phone"></i> <a style="color: white;" href="tel:<?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?>"><?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?></a>
                    </h5>
                    <p class="mt-20">
                        Get The Quality Care That You Deserve Immediately
                    </p>
                    <a href="contact-us.php" class="btn btn-sm btn-tra-white mt-25">Contact Us</a>


                </div>
            </div> <!-- END INFO TABLE -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END SERVICES-7 -->
<!-- STATISTIC-3
    ============================================= -->
<?php
$where_wwa = array(
    "id" => 7
);
$row_wwa = $obj->selectData("pages", $where_wwa);
// print_r($row);
if ($row_wwa) {
?>
    <div id="statistic-3" class="wide-60 statistic-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section ID -->
                        <span class="section-id blue-color"><?php echo $row_wwa["page_title"]; ?></span>

                        <!-- Title -->
                        <h3 class="h3-md steelblue-color"><?php echo $row_wwa["title"]; ?></h3>

                        <!-- Text -->
                        <?php echo $row_wwa["page_desc"]; ?>


                    </div>
                </div> <!-- END TEXT BLOCK -->
                <!-- STATISTIC IMAGE -->
                <div class="col-lg-6">
                    <div class="statistic-img text-center mb-40 wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="images/<?php echo $row_wwa["img"]; ?>" alt="statistic-image" />
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END STATISTIC-3 -->
<?php
} else {
    echo "";
}

?>
<!-- INFO-6
    ============================================= -->
<section id="services-5" class="bg-lightgrey wide-100 services-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Our Specialities</h3>

                <!-- Text -->
                <p>
                    We give you here a few details so that your experience at our hospitals is
                    comfortable and pleasant.
                </p>

            </div>
        </div>


        <!-- SERVICES CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme services-holder">

                    <?php
                    $record_services = $obj->selectDataAll("services", array("home_show" => 1));
                    if ($record_services) {
                        $sr = 0;
                        foreach ($record_services as $row_services) {
                            $sr++;
                    ?>
                            <div class="sbox-5">

                                <!-- Image -->
                                <a href="service_details.php?service=<?php echo $row_services["page_title"]; ?>"> <img style="width: 80px; margin-top: 10px;margin-left:auto;margin-right:auto;" class="img-fluid" src="images/<?php echo $row_services["thumb_img"]; ?>" alt="content-image" /></a>

                                <!-- Text -->
                                <div class="sbox-5-txt">

                                    <!-- Title -->
                                    <a href="service_details.php?service=<?php echo $row_services["page_title"]; ?>">
                                        <h5 data-toggle="tooltip" data-placement="top" title="<?php echo $row_services["title"]; ?>" class="h5-sm blue-color">
                                            <?php echo substr($row_services["title"], 0, 10); ?>...</h5>
                                    </a>

                                    <!-- Text -->
                                    <p>
                                        <?php echo $row_services["short_desc"]; ?>...
                                    </p>

                                </div>

                            </div>

                    <?php

                        }
                    } else {
                        echo "";
                    } ?>


                </div>
            </div>
        </div> <!-- END SERVICES CONTENT -->


    </div> <!-- End container -->
</section>
<?php
$where_wwa = array(
    "id" => 8
);
$row_wwa = $obj->selectData("pages", $where_wwa);
// print_r($row);
if ($row_wwa) {
?>
    <section id="info-6" class="bg-blue info-section division">


        <!-- TEXT BLOCK -->
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 offset-lg-6">
                    <div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section ID -->
                        <span class="section-id id-color"><?php echo $row_wwa["page_title"]; ?></span>

                        <!-- Title -->
                        <h3 class="h3-md"><?php echo $row_wwa["title"]; ?></h3>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                           
                            <p>
                                <?php echo $row_wwa["page_desc"]; ?>
                            </p>
                        </div>

                        <!-- Button -->
                        <a href="team.php" class="btn btn-tra-white blue-hover mt-25">Meet The Doctors</a>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- END TEXT BLOCK -->
        <!-- INFO-6 IMAGE -->
        <div class="info-6-img text-center"></div>


    </section> <!-- END INFO-6 -->
<?php
} else {
    echo "";
}

?>
<!-- TABS-1
    ============================================= -->
<!-- END TABS-1 -->
<!-- TESTIMONIALS-2
    ============================================= -->
<!-- END TESTIMONIALS-2 -->
<!-- DOCTORS-1
    ============================================= -->
<?php
$record_team = $obj->getData("team");
if ($record_team) {
?>
    <section id="doctors-1" class="wide-40 doctors-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">Our Medical Specialists</h3>

                    <!-- Text -->
                    <p>
                    We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievement of our staff, We are all work together to help our all patients for recovery
                    </p>

                </div>
            </div> <!-- END SECTION TITLE -->


            <div class="row">
                <?php
                $sr = 0;
                foreach ($record_team as $row_team) {
                    $sr++;
                ?>
                    <!-- DOCTOR #1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="doctor-1">

                            <!-- Doctor Photo -->
                            <div class="hover-overlay text-center">

                                <!-- Photo -->
                                <img class="img-fluid" src="images/<?php echo $row_team["img"]; ?>" alt="doctor-foto">
                                <div class="item-overlay"></div>

                                <!-- Profile Link -->
                                <div class="profile-link">
                                    <a class="btn btn-sm btn-tra-white black-hover" href="team_details.php?team=<?php echo str_replace(" ","-",$row_team["name"]); ?>" title="">View More
                                        Info</a>
                                </div>

                            </div>

                            <!-- Doctor Meta -->
                            <div class="doctor-meta">

                                <h5 class="h5-sm steelblue-color"><?php echo $row_team["name"]; ?></h5>
                                <span class="blue-color"><?php echo $row_team["post"]; ?></span>

                                <!-- <p class="p-sm grey-color">
                            <?php echo $row_team["team_desc"]; ?>
                        </p> -->

                            </div>

                        </div>
                    </div> <!-- END DOCTOR #1 -->
                <?php } ?>

            </div> <!-- End row -->
            <!-- ALL DOCTORS BUTTON -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="all-doctors mb-40">
                        <a href="team.php" class="btn btn-blue blue-hover">Meet All Doctors</a>
                    </div>
                </div>
            </div>


        </div> <!-- End container -->
    </section> <!-- END DOCTORS-1 -->
<?php


} else {
    echo "";
} ?>


<?php
$recordt = $obj->getData("testimonials");
if ($recordt) {
?>
    <!-- TESTIMONIALS-2
			============================================= -->
    <section id="reviews-2" class="bg-lightgrey wide-100 reviews-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 section-title">

                    <!-- Title 	-->
                    <h3 class="h3-md steelblue-color">What Our Patients Say</h3>

                    <!-- Text -->
                    <p>Our Happy Patients
                    </p>

                </div>
            </div> <!-- END SECTION TITLE -->


            <!-- TESTIMONIALS CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme reviews-holder">

                        <?php $sr = 0;
                        foreach ($recordt as $rowt) {
                            $sr++;
                        ?>
                            <!-- TESTIMONIAL #1 -->
                            <div class="review-2">
                                <div class="review-txt text-center">

                                    <!-- Quote -->
                                    <div class="quote"><img src="images/quote.png" alt="quote-img" /></div>

                                    <!-- Author Avatar -->
                                    <div class="testimonial-avatar">
                                        <img src="images/<?php echo $rowt["t_img"]; ?>" alt="testimonial-avatar">
                                    </div>

                                    <?php echo $rowt["t_desc"]; ?>

                                    <!-- Testimonial Author -->
                                    <div class="review-author">
                                        <h5 class="h5-sm"><?php echo $rowt["t_name"]; ?></h5>
                                        <!-- <span><?php echo $rowt["t_title"]; ?></span> -->
                                    </div>

                                </div>
                            </div>
                            <!--END  TESTIMONIAL #1 -->

                        <?php

                        }
                        ?>

                    </div>
                </div>
            </div> <!-- END TESTIMONIALS CONTENT -->


        </div> <!-- End container -->
    </section> <!-- END TESTIMONIALS-2 -->

<?php  } else {
    echo "";
} ?>

<?php
$where = array(
    "id" => 9,
);
$row_wcu = $obj->selectData("pages", $where);
// print_r($row);
if ($row_wcu) {
?>
    <section id="about-6" class="pt-100 about-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-lg-6">
                    <div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

                        <!-- Section ID -->
                        <span class="section-id blue-color"><?php echo $row_wcu["page_title"]; ?></span>

                        <!-- Title -->
                        <h3 class="h3-md steelblue-color"><?php echo $row_wcu["title"]; ?></h3>

                        <!-- CONTENT BOX #1 -->
                        <div class="box-list">
                         
                            <?php echo $row_wcu["page_desc"]; ?>
                        </div>



                        <!-- Button -->
                        <a href="about-us.php" class="btn btn-blue blue-hover mt-25">More About Us</a>

                    </div>
                </div> <!-- END TEXT BLOCK -->
                <!-- IMAGE BLOCK -->
                <div class="col-lg-6">
                    <div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
                        <img class="img-fluid" src="images/<?php echo $row_wcu["img"]; ?>" alt="about-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-6 -->
<?php
} else {
    echo "";
}
?>
<!-- FOOTER-1
    ============================================= -->
<?php require_once("footer.php"); ?>