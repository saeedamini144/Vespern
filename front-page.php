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
$blog_section_category = fw_get_db_customizer_option('blog_section_category');
$blog_section_title = fw_get_db_customizer_option('blog_section_title');
$blog_section_desc = fw_get_db_customizer_option('blog_section_desc');
$Team_section_title = fw_get_db_customizer_option('Team_section_title');
$Team_section_desc = fw_get_db_customizer_option('Team_section_desc');
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

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $blog_section_title ?></h2>
                <p><?php echo $blog_section_desc ?></p>
            </div>
            <?php if (!empty($blog_section_category)) { ?>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <?php foreach ($blog_section_category as $category_id) {
                                $category = get_term($category_id, 'category');
                            ?>
                                <li data-filter=".filter-<?php echo $category->slug ?>"><?php echo $category->name ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">
                <?php
                // کوئری برای دریافت پست‌ها از دسته‌های انتخاب‌شده
                $args = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, // نمایش تمام پست‌ها، اگر محدودیت خاصی می‌خواهید، مقدار خاصی تعیین کنید
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $blog_section_category, // استفاده از دسته‌بندی‌های انتخاب‌شده
                        ),
                    ),
                ));

                if ($args->have_posts()) {
                    while ($args->have_posts()) {
                        $args->the_post();
                        // دریافت دسته‌بندی هر پست
                        $categories = get_the_category();
                        $category_class = '';
                        foreach ($categories as $cat) {
                            $category_class .= 'filter-' . $cat->slug . ' ';
                        }
                ?>

                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $category_class; ?>">
                            <div class="card-post">
                                <div class="card-img-holder">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                                </div>
                                <a href="<?php the_permalink() ?>">
                                    <h3 class="blog-title"><?php the_title() ?></h3>
                                </a>
                                <span class="blog-time"> <?php the_time('j F, Y') ?></span>
                                <div class="description">
                                    <?php if (has_excerpt()) {
                                        the_excerpt();
                                    } ?>
                                </div>
                                <div class="options">
                                    <a class="read-more" href="<?php the_permalink() ?>">
                                        <span>Read Full Blog</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right pl-2 iconmove" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                        </svg>
                                    </a>
                                    <button class="btn-card"><?php the_category() ?></button>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                } else {
                    echo '<p>No Post Found</p>';
                }
                wp_reset_postdata();
                ?>
            </div>


        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2><?php echo $Team_section_title ?></h2>
                <p><?php echo $Team_section_desc ?></p>
            </div>

            <div class="row">

                <?php get_template_part('template-parts/Team', 'card') ?>

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