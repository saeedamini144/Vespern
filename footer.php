 <?php
    $footer_logo = fw_get_db_customizer_option('footer_logo');
    $footer_first_column_desc = fw_get_db_customizer_option('footer_first_column_desc');
    $footer_icon_social = fw_get_db_customizer_option('footer_icon_social');
    $footer_contact_icon = fw_get_db_customizer_option('footer_contact_icon');
    $copyright = fw_get_db_customizer_option('copyright');
    ?>
 <!-- ======= Footer ======= -->
 <footer id="footer">
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
         <div class="container">

             <!-- <div class="section-title" data-aos="fade-up">
                 <h2>Contact Us</h2>
             </div> -->

             <div class="row  d-flex align-items-center">

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="contact-about">
                         <figure>
                             <?php
                                if (!empty($footer_logo['url'])) {
                                ?>
                                 <img src="<?php echo $footer_logo['url'] ?>" alt="footer logo">
                             <?php
                                } else {
                                }
                                ?>
                         </figure>
                         <p><?php echo $footer_first_column_desc ?></p>
                         <div class="social-links">
                             <?php
                                if (!empty($footer_icon_social)) {
                                    foreach ($footer_icon_social as $social_icon) {
                                ?>
                                     <a href="<?php echo $social_icon['social_icon_link'] ?>" class=""><i class="<?php echo $social_icon['social_icon_name'] ?>"></i></a>
                             <?php
                                    }
                                } else {
                                    echo ' ';
                                }
                                ?>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                     <div class="info">
                         <?php
                            if (!empty($footer_contact_icon)) {
                                foreach ($footer_contact_icon as $contact_icon) {
                            ?>
                                 <div>
                                     <i class="<?php echo $contact_icon['choose_icon'] ?>"></i>
                                     <p><?php echo $contact_icon['icon_content'] ?></p>
                                 </div>
                         <?php
                                }
                            }
                            ?>
                     </div>
                 </div>

                 <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                     <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                         <div class="form-group">
                             <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                         </div>
                         <div class="form-group">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                         </div>
                         <div class="form-group">
                             <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                         </div>
                         <div class="my-3">
                             <div class="loading">Loading</div>
                             <div class="error-message"></div>
                             <div class="sent-message">Your message has been sent. Thank you!</div>
                         </div>
                         <div class="text-center"><button type="submit">Send Message</button></div>
                     </form>
                 </div>

             </div>

         </div>
     </section><!-- End Contact Section -->
     <section>
         <div class="container">
             <div class="row d-flex align-items-center">
                 <div class="col-lg-12 text-lg-left text-center">
                     <div class="copyright">
                         <?php echo $copyright ?>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </footer><!-- End Footer -->

 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <?php
    wp_footer();
    ?>
 </body>

 </html>