<?php
get_header();
$cbtoolkit_case_study_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_section_subtitle', __('Case Studies', 'cb-toolkit') );
$cbtoolkit_case_study_section_title = get_theme_mod( 'cbtoolkit_case_study_section_title', __('Our signature digital experiences projects.', 'cb-toolkit') );
$cbtoolkit_case_study_section_content = get_theme_mod( 'cbtoolkit_case_study_section_content', __('We showcased how our skilled hands and creative minds turn a concept into a fully-functional product.', 'cb-toolkit') );
$cbtoolkit_case_study_section_image = get_theme_mod( 'cbtoolkit_case_study_section_image', '' );
$cbtoolkit_case_study_inner_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_inner_section_subtitle', __('Explore our key experience', 'cb-toolkit') );
$cbtoolkit_case_study_inner_section_title = get_theme_mod( 'cbtoolkit_case_study_inner_section_title', __('Explore our key experience', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_cf7_section_subtitle', __('Let’s work together', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_title = get_theme_mod( 'cbtoolkit_case_study_cf7_section_title', __('Tell us about your project, or send us an email at  <span><a class="fw-extraBold text-white" href="mailto:hello@uiexpertz.com">hello@uiexpertz.com </a></span>', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_content = get_theme_mod( 'cbtoolkit_case_study_cf7_section_content', __('We take pride in delivering exceptional customer satisfaction and are always thrilled to hear how we’ve helped our clients achieve their goals.', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_form_heading = get_theme_mod( 'cbtoolkit_case_study_cf7_section_form_heading', __('Fill out the form to start the <br class="d-none d-xl-inline"> conversation', 'cb-toolkit') );
$post_id = get_the_ID();
$taxonomy_data = get_the_terms($post_id, 'project_category');
$first_cat_name = '';
if($taxonomy_data) {
  $first_cat_name = $taxonomy_data[0]->name;
}
$portfolio_objective = function_exists('get_field') ? get_field('portfolio_objective', $post_id, TRUE): '';
/**
 * Process 1
 */
$process_1 = function_exists('get_field') ? get_field('process_1', get_the_ID()): '';
$process_01_sub_title = '';
$process_01_title = '';
$process_01_description = '';
$process_01_image = '';
if($process_1) {
  $process_01_sub_title = $process_1['process_01_sub_title'] ?? '';
  $process_01_title = $process_1['process_01_title'] ?? '';
  $process_01_description = $process_1['process_01_description'] ?? '';
  $process_01_image = $process_1['process_01_image'] ?? '';
}



/**
 * Process 2
 */
$process_2 = function_exists('get_field') ? get_field('process_2', get_the_ID()): '';
$process_02_sub_title = '';
$process_02_title = '';
$process_2_description = '';
$process_2_image_01 = '';
$process_2_image_03 = '';
if($process_2) {
  $process_02_sub_title = $process_2['process_02_sub_title'] ?? '';
  $process_02_title = $process_2['process_02_title'] ?? '';
  $process_2_description = $process_2['process_2_description'] ?? '';
  $process_2_image_01 = $process_2['process_2_image_01'] ?? '';
  $process_2_image_02 = $process_2['process_2_image_02'] ?? '';
  $process_2_image_03 = $process_2['process_2_image_03'] ?? '';
}


/**
 * Process 3
 */
$process_3 = function_exists('get_field') ? get_field('process_3', get_the_ID()): '';
$process_3_subtitle = '';
$process_03_title = '';
$process_3_description = '';
if($process_3) {
  $process_3_subtitle = $process_3['process_3_subtitle'] ?? '';
  $process_03_title = $process_3['process_03_title'] ?? '';
  $process_3_description = $process_3['process_3_description'] ?? '';
}
$process_3_image_gallery = function_exists('get_field') ? get_field('process_3_image_gallery', get_the_ID()): '';

/**
 * Process 4
 */
$process_4 = function_exists('get_field') ? get_field('process_4', get_the_ID()): '';
$process_4_subtitle = '';
$process_4_title = '';
$process_4_description = '';
$process_4_image_bottom_title = '';
$process_4_image_bottom_content = '';
$process_4_image_1 = '';
$process_4_image_2 = '';
if($process_4) {
  $process_4_subtitle = $process_4['process_4_subtitle'] ?? '';
  $process_4_title = $process_4['process_4_title'] ?? '';
  $process_4_description = $process_4['process_4_description'] ?? '';
  $process_4_image_1 = $process_4['process_4_image_1'] ?? '';
  $process_4_image_2 = $process_4['process_4_image_2'] ?? '';
  $process_4_image_bottom_title = $process_4['process_4_image_bottom_title'] ?? '';
  $process_4_image_bottom_content = $process_4['process_4_image_bottom_content'] ?? '';
}

?>
<!--subbanner banner -->
<div class="  subBanner bg-clr-blue fs-6 pt-75">
  <div class="container">
    <div class="banner-wrapper d-flex flex-column justify-content-between pb-4">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="banner-info text-center text-lg-start mb-5 mb-lg-0">
            <?php if(!empty($first_cat_name)) : ?>
            <p class="text-clr-sky fs-18"><?php echo $first_cat_name; ?></p>
            <?php endif; ?>
            <h1 class="fs-48 text-white mb-4 ">
              <?php the_title(); ?>
            </h1>
            <div class="section-intro fs-18 fw-normal text-clr-skyBlue mb-5 ">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-img text-center text-lg-end ">
            <img src="<?php echo esc_url($process_01_image); ?>"
              alt="banner img" class="img-fluid">
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!--/ banner -->



<!-- technical expertise support -->
<div class="technical-expertise-support section-padding">
  <div class="container">
    <div class="technical-expertise-wrap row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="technical-expertise-left">
          <?php echo get_the_content(); ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="technical-expertise-right ms-lg-4 ms-0">
          <h4 class="fs-4 fw-bold"><?php echo esc_html__('Objective'); ?></h4>

          <div class="mt-3">
            <?php echo wp_kses_post($portfolio_objective); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/  technical expertise support  -->



<!-- user flow -->
<div class="user-flow py-120 bg-clr-lightGray">
  <div class="container">
    <div class="section-heading text-center mb-5">
      <div class="section-hints d-flex justify-content-center align-items-center gap-2">
        <?php if(!empty($process_01_sub_title)) : ?>
        <p class="fs-14 mb-0 fw-bold text-clr-darkBlue">
            <?php echo wp_kses_post($process_01_sub_title); ?>
        </p>
        <?php endif; ?>
      </div>
      <?php if(!empty($process_01_title)) : ?>
      <h1 class="fs-40 text-clr-blue py-2">
        <?php echo esc_html($process_01_title); ?>
      </h1>
      <?php endif; ?>
      <?php if(!empty($process_01_description)) : ?>
      <p class="text-clr-gray">
      <?php echo wp_kses_post($process_01_description); ?>
      </p>
      <?php endif; ?>
    </div>
    <div class="user-flow-wrap pt-3">
      <img src="<?php echo esc_url($process_01_image); ?>" alt="banner img"
        class="img-fluid w-100">
    </div>
  </div>
</div>
<!--/  user flow  -->



<!-- Project Wireframing  -->
<div class="project-wireframing py-120">
  <div class="container">
    <div class="section-heading text-center mb-5">
      <div class="section-hints d-flex justify-content-center align-items-center gap-2">
        <?php if(!empty($process_02_sub_title)) : ?>
        <p class="fs-14 mb-0 fw-bold text-clr-darkBlue">
          <?php echo $process_02_sub_title; ?>
        </p>
        <?php endif; ?>
      </div>
      <?php if(!empty($process_02_title)) : ?>
        <h1 class="fs-40 text-clr-blue py-2">
        <?php echo $process_02_title; ?>
        </h1>
      <?php endif; ?>
      <?php if(!empty($process_2_description)) : ?>
        <p class="text-clr-gray">
        <?php echo $process_2_description; ?>
        </p>
      <?php endif; ?>
    </div>

    <div class="projects">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 md-mb-0">
          <div class="project-show-img border">
            <img src="<?php echo esc_url($process_2_image_01); ?>" alt="banner img" class="img-fluid w-100">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 md-mb-0">
          <div class="project-show-img border">
              <img src="<?php echo esc_url($process_2_image_02); ?>" alt="banner img" class="img-fluid w-100">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 md-mb-0">
          <div class="project-show-img border">
          <img src="<?php echo esc_url($process_2_image_03); ?>" alt="banner img" class="img-fluid w-100">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Project Wireframing  -->





<!-- visual output  -->

<div class="case-study bg-clr-blue section-padding">
  <div class="container">
    <div class="section-heading text-center mb-5">
      <div class="section-hints d-flex justify-content-center align-items-center gap-2">
        <?php if(!empty($process_3_subtitle)) : ?>
        <p class="fs-14 mb-0 fw-bold text-clr-sky">
          <?php echo $process_3_subtitle; ?>
        </p>
        <?php endif; ?>
      </div>
      <?php if(!empty($process_03_title)) : ?>
      <h1 class="fs-40 text-white py-2">
      <?php echo $process_03_title; ?>
      </h1>
      <?php endif; ?>
      <?php if(!empty($process_3_description)) : ?>
      <p class="text-clr-skyBlue">
      <?php echo $process_3_description; ?>
      </p>
      <?php endif; ?>
    </div>
    <?php if(!empty($process_3_image_gallery)) : ?>
    <div class="case-study-wrap">
      <div class="swiper caseStudy-slider">
        <div class="swiper-wrapper">
          <?php foreach($process_3_image_gallery as $slide) : ?>
          <div class="swiper-slide">
            <div class="visual-output d-flex flex-column justify-content-between h-100 bg-transparent">
              <?php if(!empty($slide['full_image_url'])) : ?>
              <div class="p-1">
                <img src="<?php echo esc_url($slide['full_image_url']); ?>"
                  alt="banner img" class="img-fluid w-100">
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <?php endif; ?>
  </div>

  <div class="swipper-button position-relative">
    <div class="swiper-button-prev-unique position-absolute d-flex justify-content-center align-items-center">
      <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="btn-swiper" d="M64 63.5L0.5 0V127L64 63.5Z" />
        <path d="M25.9998 72L27.4165 70.5833L20.8332 64L27.4165 57.4167L25.9998 56L17.9998 64L25.9998 72Z"
          fill="white" />
      </svg>

    </div>
    <div class="swiper-button-next-unique position-absolute d-flex justify-content-center align-items-center">
      <svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="btn-swiper" d="M0 63.5L63.5 0V127L0 63.5Z" fill="#97A3C1" />
        <path d="M38.0002 72L36.5835 70.5833L43.1668 64L36.5835 57.4167L38.0002 56L46.0002 64L38.0002 72Z"
          fill="white" />
      </svg>
    </div>
  </div>
</div>

<!--/ visual output  -->




<!-- project style guide -->
<div class="py-120">
  <div class="container">
    <div class="project-style-guide">
      <div class="container">
        <div class="section-heading text-center mb-5">
          <div class="section-hints d-flex justify-content-center align-items-center gap-2">
            <?php if(!empty($process_4_subtitle)) : ?>
            <p class="fs-14 mb-0 fw-bold text-clr-darkBlue">
              <?php echo $process_4_subtitle; ?>
            </p>
            <?php endif; ?>
          </div>
          <?php if(!empty($process_4_title)) : ?>
            <h1 class="fs-40 text-clr-blue py-2">
              <?php echo $process_4_title; ?>
            </h1>
          <?php endif; ?>
          <?php if(!empty($process_4_title)) : ?>
            <p class="text-clr-gray mb-4">
              <?php echo $process_4_description; ?>
              </p>
          <?php endif; ?> 
        </div>
      </div>

      <div class="row">
        <?php if(!empty($process_4_image_1)) : ?>
        <div class="col-lg-8 mb-4 mb-lg-0">
            <div>
              <img src="<?php echo esc_url($process_4_image_1); ?>" alt="banner img"
                class="img-fluid w-100">
            </div>
          </div>
          <?php endif; ?> 
          <?php if(!empty($process_4_image_2)) : ?>
        <div class="col-lg-4">
          <div>
            <img src="<?php echo esc_url($process_4_image_2); ?>" alt="banner img"
              class="img-fluid w-100">
          </div>
        </div>
        <?php endif; ?> 
      </div>

      <div class="result mt-5 pt-3">
        <div class="row">
          <div class="col-lg-4">
          <?php if(!empty($process_4_image_bottom_title)) : ?>
            <h4 class="fs-2 text-clr-blue">
              <?php echo $process_4_image_bottom_title; ?>
            </h4>
          <?php endif; ?>
          </div>
          <div class="col-lg-8">
            <div>
              <ul class="list-unstyled">
                <li>
                  <?php if(!empty($process_4_image_bottom_content)) : ?>
                    <p class="fs-6 text-clr-gray">
                      <?php echo $process_4_image_bottom_content; ?>
                      </p>
                  <?php endif; ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ project style guide  -->


<!-- contact start -->
<div class="contact bg-clr-blue section-padding">
  <div class="section-heading text-center mb-5">
    <div class="section-hints d-flex justify-content-center align-items-center gap-2">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delete/contacttitle.svg" alt="banner img"
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
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delete/contact.svg" alt="banner img"
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