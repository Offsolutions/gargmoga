  <footer id="footer-1" class="bg-image wide-40 footer division">
      <div class="container">


          <!-- FOOTER CONTENT -->
          <div class="row">


              <!-- FOOTER INFO -->
              <div class="col-md-6 col-lg-3">
                  <div class="footer-info mb-40">

                      <!-- Footer Logo -->
                      <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
                      <img src="images/<?php echo isset($admin["flogo"]) ? $admin["flogo"] : ""; ?>" width="250"
                          alt="footer-logo">

                      <!-- Text -->
                      <p class="p-sm mt-20">
                          <?php echo isset($admin["admin_desc"]) ? strip_tags($admin["admin_desc"]) : ""; ?>
                      </p>

                      <!-- Social Icons -->
                      <div class="footer-socials-links mt-20">
                          <ul class="foo-socials text-center clearfix">
                              <?php if (!empty($admin["facebook"])) { ?>
                              <li><a href="<?php echo $admin['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                              <?php   } ?>
                              <?php if (!empty($admin["twitter"])) { ?>
                              <li><a href="<?php echo $admin['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                              <?php   } ?>
                              <?php if (!empty($admin["insta"])) { ?>
                              <li><a href="<?php echo $admin['insta']; ?>"><i class="fa fa-instagram"></i></a></li>
                              <?php   } ?>
                              <?php if (!empty($admin["youtube"])) { ?>
                              <li><a href="<?php echo $admin['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
                              <?php   } ?>



                          </ul>
                      </div>

                  </div>
              </div>


              <!-- FOOTER CONTACTS -->
              <div class="col-md-6 col-lg-3">
                  <div class="footer-box mb-40">

                      <!-- Title -->
                      <h5 class="h5-xs">Our Location</h5>

                      <!-- Address -->
                      <p><i class="fa fa-map-marker" ></i>   <?php echo isset($admin["address"]) ? strip_tags($admin["address"]) : ""; ?></p>

                      <!-- Email -->
                      <p class="foo-email mt-20"><i class="fa fa-envelope" ></i>  <a
                              href="mailto:<?php echo isset($admin["admin_email"]) ? $admin["admin_email"] : ""; ?>"><?php echo isset($admin["admin_email"]) ? $admin["admin_email"] : ""; ?></a>
                      </p>

                      <!-- Phone -->
                      <p><i class="fa fa-phone" ></i>  <?php echo isset($admin["phone"]) ? $admin["phone"] : ""; ?></p>
                      <p><i class="fa fa-phone" ></i>  <?php echo isset($admin["phone2"]) ? $admin["phone2"] : ""; ?></p>

                  </div>
              </div>


              <!-- FOOTER LINKS -->
              <div class="col-md-6 col-lg-2">
                  <div class="footer-links mb-40">

                      <!-- Title -->
                      <h5 class="h5-xs">Services</h5>

                      <!-- Footer Links -->
                      <ul class="foo-links clearfix">
                          <?php
                            $recordsssfv = $obj->getDataLimit("services", 4);
                            if ($recordsssfv) {
                                $sr = 0;
                                foreach ($recordsssfv as $rowsssfv) {
                                    $sr++;
                            ?>
                          <li><i class="fa fa-arrow-right" style="color: white;" aria-hidden="true"></i>  <a
                                  href="service_details.php?service=<?php echo $rowsssfv["page_title"]; ?>"><?php echo $rowsssfv["title"]; ?></a>
                          </li>
                          <?php
                                }
                            } else {
                                echo "";
                            }
                            ?>
                      </ul>

                  </div>
              </div>



              <!-- FOOTER PHONE NUMBER -->
              <div class="col-md-6 col-lg-3">
                  <div class="footer-box mb-40">

                      <div class="fb-page" data-href="https://www.facebook.com/garghospitalmoga/" data-tabs="timeline"
                          data-width="" data-height="200px" data-small-header="false" data-adapt-container-width="true"
                          data-hide-cover="false" data-show-facepile="true">
                          <blockquote cite="https://www.facebook.com/garghospitalmoga/" class="fb-xfbml-parse-ignore"><a
                                  href="https://www.facebook.com/garghospitalmoga/">Garg Hospital Moga</a></blockquote>
                      </div>
                  </div>
              </div>


          </div> <!-- END FOOTER CONTENT -->
          <!-- FOOTER COPYRIGHT -->
          <div class="bottom-footer">
              <div class="row">
                  <div class="col-md-12">
                      <p class="footer-copyright">&copy; 2021 <span>Garg Hospital Moga</span>. All Rights Reserved |
                          Powered by <a href="http://officialsolutions.in"><span>Official Solutions</span> </a></p>
                  </div>
              </div>
          </div>


      </div> <!-- End container -->
  </footer> <!-- END FOOTER-1 -->




  </div> <!-- END PAGE CONTENT -->
  <!-- EXTERNAL SCRIPTS
    ============================================= -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/sticky.js"></script>
  <script src="js/jquery.scrollto.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/hero-form.js"></script>
  <script src="js/contact-form.js"></script>
  <script src="js/comment-form.js"></script>
  <script src="js/appointment-form.js"></script>
  <script src="js/jquery.datetimepicker.full.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/wow.js"></script>

  <!-- Custom Script -->
  <script src="js/custom.js"></script>

  <script>
new WOW().init();
  </script>
  <script src="js/changer.js"></script>
  <script defer src="js/styleswitch.js"></script>


  </body>

  </html>