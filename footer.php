 <!-- ======= Footer ======= -->
 <footer id="footer">
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
         <div class="container">

             <!-- <div class="section-title" data-aos="fade-up">
                 <h2>Contact Us</h2>
             </div> -->

             <div class="row">

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="contact-about">
                         <h3>Vesperr</h3>
                         <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                         <div class="social-links">
                             <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                             <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                             <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                             <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                     <div class="info">
                         <div>
                             <i class="ri-map-pin-line"></i>
                             <p>A108 Adam Street<br>New York, NY 535022</p>
                         </div>

                         <div>
                             <i class="ri-mail-send-line"></i>
                             <p>info@example.com</p>
                         </div>

                         <div>
                             <i class="ri-phone-line"></i>
                             <p>+1 5589 55488 55s</p>
                         </div>

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
                 <div class="col-lg-6 text-lg-left text-center">
                     <div class="copyright">
                         &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
                     </div>
                     <div class="credits">
                         <!-- All the links in the footer should remain intact. -->
                         <!-- You can delete the links only if you purchased the pro version. -->
                         <!-- Licensing information: https://bootstrapmade.com/license/ -->
                         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                         Designed by <a href="mailto:saaed.amini@gmail.com">Saeed Amini</a>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                         <a href="#intro" class="scrollto">Home</a>
                         <a href="#about" class="scrollto">About</a>
                         <a href="#">Privacy Policy</a>
                         <a href="#">Terms of Use</a>
                     </nav>
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