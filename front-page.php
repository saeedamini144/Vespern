<?php
get_header();
// $sitetitle = fw_get_db_settings_option('sitetitle');//the code for call back the theme setting with the main panel not the customizer
$first_section_title = fw_get_db_customizer_option('first_section_title');
$first_section_text = fw_get_db_customizer_option('first_section_text'); //for use the customizer theme panel settings
$first_section_button = fw_get_db_customizer_option('first_section_button');
$first_section_button_link =  fw_get_db_customizer_option('first_section_button_link');
$first_section_image = fw_get_db_customizer_option('first_section_image');
$client_logo = fw_get_db_customizer_option('client_logo');
$aboutus_section_title = fw_get_db_customizer_option('aboutus_section_title');
$about_section_right_text = fw_get_db_customizer_option('about_section_right_text');
$about_section_left_text = fw_get_db_customizer_option('about_section_left_text');
$about_section_button = fw_get_db_customizer_option('about_section_button');
$about_section_button_link = fw_get_db_customizer_option('about_section_button_link');
$about_section_item = fw_get_db_customizer_option('about_section_item');
$about_section_banner = fw_get_db_customizer_option('about_section_banner');
// $about_secton_counter = fw_get_db_customizer_option('about_secton_counter');
$services_section_title = fw_get_db_customizer_option('services_section_title');
$services_section_text = fw_get_db_customizer_option('services_section_text');
$featur_section_title = fw_get_db_customizer_option('featur_section_title');
$featur_section_desc = fw_get_db_customizer_option('featur_section_desc');
$testimonial_section_title = fw_get_db_customizer_option('testimonial_section_title');
$testimonial_section_desc = fw_get_db_customizer_option('testimonial_section_desc');
?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up"><?php echo $first_section_title ?></h1>
                <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $first_section_text ?></h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="<?php echo $first_section_button_link ?>" class="btn-get-started scrollto"><?php echo $first_section_button ?></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="<?php if (!empty($first_section_image)) {
                                echo $first_section_image['url'];
                                // var_dump($first_section_image) 
                            } else {
                                echo null;
                            }
                            ?>" class="img-fluid animated" alt="">

            </div>
        </div>
    </div>
    <!-- //intead of use blog info to call file its better used echo get_theme_file_uri() -->
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
        <div class="container">

            <div class="row">
                <?php
                if (!empty($client_logo)) { // بررسی اینکه لوگوها وجود دارند
                    foreach ($client_logo as $logo) {
                        if (!empty($logo['url'])) { // اطمینان از اینکه URL لوگو معتبر است
                ?>
                            <div class="col-lg-2 col-md-4 col-6">
                                <img src="<?php echo esc_url($logo['url']); ?>" class="img-fluid" alt="" data-aos="zoom-in">
                            </div>
                <?php
                        }
                    }
                } else {
                    echo 'No logo found'; // پیام به‌جای خطا و لود نشدن سایت
                }
                ?>
            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $aboutus_section_title ?></h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <?php echo $about_section_left_text ?>
                    <!-- <ul>
                    <?php
                    if (!empty($about_section_item)) {
                        foreach ($about_section_item as $item) {
                            if (!empty($item))
                    ?>
                                <li><i class="ri-check-double-line"></i><?php echo $item ?></li>

                        <?php
                        }
                    } else {
                        $item = array('default_value');
                        // var_dump($item);
                    }
                        ?>
                    </ul> -->
                    <ul>
                        <?php
                        if (!empty($about_section_item)) {
                            // var_dump($item);
                            foreach ($about_section_item as $item) {
                                if (!empty($item))
                        ?>
                                <li><i class="<?php echo $item['icon'] ?>"></i><?php echo $item['text_item'] ?></li>

                        <?php
                            }
                        } else {
                            $item = array('default_value');
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <?php echo $about_section_right_text ?>
                    <a href="<?php echo esc_url($about_section_button_link) ?>" class="btn-learn-more"><?php echo $about_section_button ?></a>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
                    <img src="<?php
                                if (!empty($about_section_banner)) {
                                    echo $about_section_banner['url'];
                                    // var_dump($first_section_image) 
                                } else {
                                    echo null;
                                }
                                ?>" alt="" class="img-fluid">
                </div>

                <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <?php get_template_part('template-parts/aboutcounter', 'card'); ?>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $services_section_title; ?></h2>
                <p><?php echo $services_section_text; ?></p>
            </div>

            <div class="row">
                <?php get_template_part('template-parts/cardservices', 'service') ?>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
        <div class="container">

            <div class="row">
                <?php get_template_part('template-parts/portfolio', 'card') ?>
            </div>

        </div>
    </section><!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $featur_section_title ?></h2>
                <p><?php echo $featur_section_desc ?></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <?php get_template_part('template-parts/features', 'card') ?>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $testimonial_section_title; ?></h2>
                <p><?php echo $testimonial_section_desc; ?></>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php get_template_part('template-parts/testimonials', 'card'); ?>

                    <!-- <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>End testimonial item -->

                    <!-- <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- 
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <div class="portfolio-links">
                                <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                        <h3>Free</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                        <h3>Business</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                        <h3>Developer</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-5">
                    <i class="ri-question-line"></i>
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </div><!-- End F.A.Q Item-->

        </div>
    </section><!-- End F.A.Q Section -->
</main><!-- End #main -->
<?php
get_footer();
?>