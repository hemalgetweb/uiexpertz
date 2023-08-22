<?php
get_header();
$project_objective = function_exists("get_field") ? get_field("project_objective"): array();
$process_general = function_exists("get_field") ? get_field("process_general"): array();
$process_general_title = $process_general['process_general_title'];
$process_general_description = $process_general['process_general_description'];
$process_general_image = $process_general['process_general_image'];
$process_1 = function_exists("get_field") ? get_field("process_1"): array();
$process_01_title = $process_1["process_01_title"];
$process_01_sub_title = $process_1["process_01_sub_title"];
$process_01_description = $process_1["process_01_description"];
$process_01_image = $process_1["process_01_image"];
$process_2 = function_exists("get_field") ? get_field("process_2"): array();
$process_02_title = $process_2["process_02_title"];
$process_02_sub_title = $process_2["process_02_sub_title"];
$process_2_description = $process_2["process_2_description"];
$process_2_image = $process_2["process_2_image"];
$process_3 = function_exists("get_field") ? get_field("process_3"): array();
$process_03_title = $process_3["process_03_title"];
$process_3_subtitle = $process_3["process_3_subtitle"];
$process_3_description = $process_3["process_3_description"];
$process_3_image = $process_3["process_3_image"];
$process_4 = function_exists("get_field") ? get_field("process_4"): array();
$process_4_title = $process_4["process_4_title"];
$process_4_subtitle = $process_4["process_4_subtitle"];
$process_4_description = $process_4["process_4_description"];
$process_4_image_1 = $process_4["process_4_image_1"];
$process_4_image_2 = $process_4["process_4_image_2"];
$process_general_gallery_title = function_exists("get_field") ? get_field("process_general_gallery_title"): "";
$process_gallery_image_subtitle = function_exists("get_field") ? get_field("process_gallery_image_subtitle"): "";
$process_gallery_image_content = function_exists("get_field") ? get_field("process_gallery_image_content"): "";
$process_gallery_images = function_exists("get_field") ? get_field("process_gallery_images"): array();
/**
 * CF7 form data from customizer
 */
$cbtoolkit_case_study_cf7_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_cf7_section_subtitle', __('Let’s work together', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_title = get_theme_mod( 'cbtoolkit_case_study_cf7_section_title', __('Tell us about your project, or send us an email at  <span><a class="fw-extraBold text-white" href="mailto:hello@uiexpertz.com">hello@uiexpertz.com </a></span>', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_content = get_theme_mod( 'cbtoolkit_case_study_cf7_section_content', __('We take pride in delivering exceptional customer satisfaction and are always thrilled to hear how we’ve helped our clients achieve their goals.', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_form_heading = get_theme_mod( 'cbtoolkit_case_study_cf7_section_form_heading', __('Fill out the form to start the <br class="d-none d-xl-inline"> conversation', 'cb-toolkit') );

?>

<!--case study details banner -->

<section class="case-study-details-banner" data-background="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>">
    <div class="container">
        <div class="case-study-details-wrap">
            <div class="case-details-content">
                <div class="case-details-content-wrap">
                    <a href="<?php echo home_url( "/project" ); ?>"
                        class="back-to-case d-flex align-items-center gap-2 text-clr-sky text-decoration-none fs-14 fw-bold">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L7.0625 10.9375L2.875 6.75H12V5.25H2.875L7.0625 1.0625L6 0L0 6L6 12Z" />
                        </svg> <span>Case Studies</span>
                    </a>
                    <div class="mt-4 row align-items-start">
                        <div class="col-xl-6">
                            <h2 class="fs-64 fw-normal text-white"><?php the_title(); ?></h2>
                        </div>
                        <div class="col-xl-6">
                            <p class="fs-18 fw-normal text-clr-skyBlue"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>

                    <div class="case-study-img text-center d-block d-lg-none my-5">
                        <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!--/ case study details banner -->



<!--/ case details overview start -->

<section class="case-overview">
    <div class="container">
        <div class="case-study-img text-center d-none d-lg-block">
          <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
        </div>
        <div class="py-120 row gx-lg-5 gx-0">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div>
                    <h3 class="fs-40 text-clr-blue fw-normal mb-4 mt-0">Overview</h3>
                    <p class="text-clr-gray fs-4 "><?php echo get_the_content(); ?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <h3 class="fs-40 text-clr-blue fw-normal mb-4 mt-0">Objective</h3>
                    <?php if(!empty($project_objective)) : 
                      $project_objective = $lines = explode("\n", $project_objective);
                    ?>
                    <ul class="m-0 p-0 list-unstyled">
                      <?php foreach($project_objective as $index=>$objective) : 
                        ?>
                          <?php if(!empty($objective)) : ?>
                          <li class="d-flex has-p-mb-0 align-items-center gap-3 mb-3 fs-6 text-clr-gray mb-0">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/case-check.svg"
                                  alt="about image" class="img-fluid" /><?php echo $objective; ?>
                          </li>
                          <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ case details overview  end -->



<!--/ work process  start -->
<section class="uiexpertz-work-process py-120 bg-clr-lightGray">
    <div class="container">
        <div class="section-heading text-center mb-5">
          <?php if(!empty($process_general_title)) : ?>
            <h1 class="fs-40 text-clr-blue pb-2"><?php echo esc_html($process_general_title); ?></h1>
          <?php endif; ?>
          <?php if(!empty($process_general_description)) : ?>
            <p class="text-clr-gray"><?php echo wp_kses_post($process_general_description); ?></p>
          <?php endif; ?>
        </div>
        <div>
            <img src="<?php echo esc_url($process_general_image); ?>" alt="about image"
                class="img-fluid">
        </div>
    </div>
</section>
<!--/ work process end -->



<!--/ work process details start -->

<section class="work-process-details">

    <div class="py-120">
        <div class="container">
            <div class="work-process-details-wrap">
                <div class="row mb-60">
                    <div class="col-lg-6">
                      <?php if(!empty($process_01_title)) : ?>
                        <h2 class="fs-120 text-clr-darkBlue fw-lighter"><?php echo wp_kses_post($process_01_title); ?></h2>
                      <?php endif; ?>
                        <?php if(!empty($process_01_sub_title)) : ?>
                          <p class="fs-40 text-clr-blue"><?php echo wp_kses_post($process_01_sub_title); ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                      <?php if(!empty($process_01_description)) : ?>
                          <?php echo wp_kses_post($process_01_description); ?>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="case-study-img text-center">
                    <img src="<?php echo esc_url($process_01_image); ?>" alt="about image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class=" py-120 bg-clr-blue">
        <div class="container">
            <div class="work-process-details-wrap">
                <div class="row mb-60">
                    <div class="col-lg-6">
                      <?php if(!empty($process_02_title)) : ?>
                        <h2 class="fs-120 text-clr-sky fw-lighter"><?php echo wp_kses_post($process_02_title); ?></h2>
                      <?php endif; ?>
                      <?php if(!empty($process_02_sub_title)) : ?>
                        <p class="fs-40 text-white"><?php echo wp_kses_post($process_02_sub_title); ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                      <div class="uiexpertz-has-process-2">
                        <?php if(!empty($process_2_description)) : ?>
                            <?php echo wp_kses_post($process_2_description); ?>
                        <?php endif; ?>
                      </div>
                    </div>
                </div>
                <div class="case-study-img text-center">
                    <img src="<?php echo esc_url($process_2_image); ?>" alt="about image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="py-120">
        <div class="container">
            <div class="work-process-details-wrap uiexpertz-process-3-content-114">
                <div class="row mb-60">
                    <div class="col-lg-6">
                      <?php if(!empty($process_03_title)) : ?>
                        <h2 class="fs-120 text-clr-darkBlue fw-lighter"><?php echo wp_kses_post($process_03_title); ?></h2>
                      <?php endif; ?>
                      <?php if(!empty($process_3_subtitle)) : ?>
                        <p class="fs-40 text-clr-blue"><?php echo wp_kses_post($process_3_subtitle); ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                      <?php if(!empty($process_3_description)) : ?>
                       <?php echo wp_kses_post($process_3_description); ?>
                      <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($process_3_image)) : ?>
                <div class="case-study-img text-center">
                    <img src="<?php  echo esc_url($process_3_image); ?>" alt="process image"
                        class="img-fluid">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class=" py-120 bg-clr-lightGray">
        <div class="container">
            <div class="work-process-details-wrap uiexpertz-process-4-content-114">
                <div class="row mb-60">
                    <div class="col-lg-6">
                      <?php if(!empty($process_4_title)) : ?>
                        <h2 class="fs-120 text-clr-darkBlue  fw-lighter"><?php echo wp_kses_post($process_4_title); ?></h2>
                      <?php endif; ?>
                      <?php if(!empty($process_4_subtitle)) : ?>
                        <p class="fs-40 text-clr-blue"><?php echo wp_kses_post($process_4_subtitle); ?></p>
                      <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                      <?php if(!empty($process_4_description)) : ?>
                        <?php echo wp_kses_post($process_4_description); ?>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="case-study-img text-center">
                    <div class="row">
                      <?php if(!empty($process_4_image_1)) : ?>
                        <div class="col-lg-6">
                            <div>
                                <img src="<?php echo esc_url($process_4_image_1); ?>"
                                    alt="about image" class="img-fluid">
                            </div>
                        </div>
                        <?php endif; ?>
                      <?php if(!empty($process_4_image_2)) : ?>
                        <div class="col-lg-6">
                            <div>
                                <img src="<?php echo esc_url($process_4_image_2); ?>"
                                    alt="about image" class="img-fluid">
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>


<!--/ work process details end -->





<!-- visual design start -->

<section class="visual-design py-120">
    <div class="container">
        <div class="section-heading text-center mb-60">
            <div class="section-hints d-flex justify-content-center align-items-center gap-2">
                <p class="fs-14 mb-0 fw-bold text-clr-darkBlue">Novelship</p>
            </div>
            <h1 class="fs-40 text-clr-blue pb-2">Visual Design</h1>
            <p class="text-clr-gray">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
    </div>
    <?php if(!empty($process_gallery_images)) : ?>
    <div class="case splide">
        <div class="splide__track" id="splide-track">
            <ul class="splide__list">
              <?php foreach($process_gallery_images as $index=>$image_atts) : ?>
                <li class="splide__slide">
                    <img src="<?php echo $image_atts["full_image_url"]; ?>"
                        alt="visual-design " class="img-fluid">
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
</section>
<!--/ visual design end -->
<!-- contact start -->
<div class="contact bg-clr-blue section-padding">
  <div class="section-heading text-center mb-5">
    <div class="section-hints d-flex justify-content-center align-items-center gap-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacttitle.svg" alt="banner img"
        class="img-fluid">
        <?php if(!empty($cbtoolkit_case_study_cf7_section_subtitle)) : ?>
          <p class="fs-14 mb-0 fw-bold text-clr-sky"><?php echo wp_kses_post( $cbtoolkit_case_study_cf7_section_subtitle ); ?></p>
        <?php endif; ?>
    </div>
    <?php if(!empty($cbtoolkit_case_study_cf7_section_title)) : ?>
      <h1 class="fs-40 text-white py-2"><?php echo wp_kses_post( $cbtoolkit_case_study_cf7_section_title ); ?></h1>
      <?php endif; ?>
    <?php if(!empty($cbtoolkit_case_study_cf7_section_content)) : ?>
      <p class="text-clr-skyBlue"><?php echo wp_kses_post( $cbtoolkit_case_study_cf7_section_content ); ?></p>
      <?php endif; ?>
  </div>
  <div class="footer-bg">
    <div class="container">
      <div class="contact-wrap bg-white py-5">
        <div class="row my-3 align-items-center">
          <div class="col-lg-5 offset-lg-1">
            <div class="contactImg text-center mb-5 mb-lg-0">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-animate.svg" alt="banner img"
                class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contact-info">
            <?php if(!empty($cbtoolkit_case_study_cf7_section_form_heading)) : ?>
              <h3 class="fs-4 fw-bold"><?php echo wp_kses_post( $cbtoolkit_case_study_cf7_section_form_heading ); ?></h3>
            <?php endif; ?>
            </div>
            <div class="contact-form">
              <?php echo do_shortcode( '[contact-form-7 id="452" title="Contact Global"]' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- contact end -->
<?php get_footer(); ?>