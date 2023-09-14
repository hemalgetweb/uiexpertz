<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package uiexpertz
 */

get_header();

$cbtoolkit_error_404_image = get_theme_mod('cbtoolkit_error_404_image', get_template_directory_uri() . '/assets/img/404.png');
$cbtoolkit_error_sub_title = get_theme_mod('cbtoolkit_error_sub_title', __('Page not found', 'uiexpertz'));
$cbtoolkit_error_title = get_theme_mod('cbtoolkit_error_title', __('Sorry we can`t find that page!', 'uiexpertz'));
$cbtoolkit_error_desc = get_theme_mod('cbtoolkit_error_desc', __("The page you are looking for might have been removed it's name, changed or is temporary unavailable.", 'uiexpertz'));
$cbtoolkit_error_link_text = get_theme_mod('cbtoolkit_error_link_text', __('Take me home', 'uiexpertz'));
?>

<!--subbanner banner -->
<section class="subBanner bg-clr-blue fs-6 ">
   <div class="container">
      <div class="banner-wrapper d-flex flex-column justify-content-between pb-4">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="banner-info text-start">
                  
                  <?php if(!empty($cbtoolkit_error_sub_title)) : ?>
                     <p class="text-clr-sky fs-18">
                        <?php echo wp_kses_post($cbtoolkit_error_sub_title); ?>
                     </p>
                  <?php endif; ?>
                  
                  <?php if(!empty($cbtoolkit_error_title)) : ?>
                     <h1 class="fs-48 text-white mb-4 ">
                        <?php echo wp_kses_post($cbtoolkit_error_title); ?>
                     </h1>
                  <?php endif; ?>
                  
                  <?php if(!empty($cbtoolkit_error_desc)) : ?>
                     <p class="section-intro fs-18 fw-normal text-clr-skyBlue mb-5 ">
                        <?php echo wp_kses_post($cbtoolkit_error_desc); ?>
                     </p>
                  <?php endif; ?>

                  <div class="navbar-right btn-wrap d-flex justify-content-lg-start justify-content-center flex-wrap gap-3 gap-lg-4">
                     <?php if(!empty($cbtoolkit_error_link_text)) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none position-relative text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center back-to-home-btn">
                           <?php echo wp_kses_post($cbtoolkit_error_link_text); ?>
                        </a>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            <div class="col-md-6">               
               <?php if(!empty($cbtoolkit_error_404_image)) : ?>
               <div class="banner-img text-center text-lg-end">
                  <img src="<?php echo esc_url($cbtoolkit_error_404_image); ?>" alt="<?php echo esc_attr__('Error image', 'uiexpertz'); ?>" class="img-fluid">
               </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!--/ banner -->


<?php
get_footer();
