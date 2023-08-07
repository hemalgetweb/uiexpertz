<?php
get_header();
$cbtoolkit_case_study_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_section_subtitle', __('Case Studies', 'cb-toolkit') );
$cbtoolkit_case_study_section_title = get_theme_mod( 'cbtoolkit_case_study_section_title', __('Our signature digital experiences projects.', 'cb-toolkit') );
$cbtoolkit_case_study_section_content = get_theme_mod( 'cbtoolkit_case_study_section_content', __('We showcased how our skilled hands and creative minds turn a concept into a fully-functional product.', 'cb-toolkit') );
$cbtoolkit_case_study_section_image = get_theme_mod( 'cbtoolkit_case_study_section_image', '' );
$cbtoolkit_case_study_inner_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_inner_section_subtitle', __('Explore our key experience', 'cb-toolkit') );
$cbtoolkit_case_study_inner_section_title = get_theme_mod( 'cbtoolkit_case_study_inner_section_title', __('Explore our key experience', 'cb-toolkit') );
?>
<!--subbanner banner -->
<div class=" subBanners bg-clr-blue fs-6 pt-75 pb-120">
    <div class="container">
        <div class="banner-wrapper d-flex flex-column justify-content-between">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-info text-center text-lg-start mb-5 mb-lg-0">
                        <?php if(!empty($cbtoolkit_case_study_section_subtitle)) : ?>
                        <p class="text-clr-sky fs-18"><?php echo $cbtoolkit_case_study_section_subtitle; ?></p>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_case_study_section_title)) : ?>
                        <h1 class="fs-48 text-white mb-4 ">
                            <?php echo $cbtoolkit_case_study_section_title; ?>
                        </h1>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_case_study_section_content)) : ?>
                        <div class="section-intro fs-18 fw-normal text-clr-skyBlue">
                            <p class="mb-0">
                                <?php echo $cbtoolkit_case_study_section_content; ?>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(!empty($cbtoolkit_case_study_section_image)) : ?>
                <div class="col-lg-6">
                    <div class="banner-img text-center text-lg-end ">
                        <img src="<?php echo esc_url($cbtoolkit_case_study_section_image); ?>" alt="banner img"
                            class="img-fluid">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--/ banner -->
<!-- UiExpertz Services start -->
<div class="service section-padding bg-clr-lightGray">
    <div class="container">
        <div class=" text-start mb-5">
            <?php if(!empty($cbtoolkit_case_study_inner_section_title)) : ?>
            <h1 class="fs-40 text-clr-blue py-2"><?php echo $cbtoolkit_case_study_inner_section_title; ?></h1>
            <?php endif; ?>
            <?php if(!empty($cbtoolkit_case_study_inner_section_subtitle)) : ?>
            <p class="text-clr-gray"><?php echo $cbtoolkit_case_study_inner_section_subtitle; ?></p>
            <?php endif; ?>
        </div>
        <?php if(have_posts()) : ?>
        <div class="explore-experience">
            <div class="search-experience">
                <div class="row">
                    <div class="col-xl-6">
                    <select class="form-select form-control case_studies_all_service_ajax" aria-label="Default select example">
                      <option selected value="0">Select Service</option>
                      <?php
                      $args = array(
                          'taxonomy' => 'project_service', // Replace with your custom taxonomy name
                          'orderby' => 'name',
                          'order' => 'ASC',
                          'hide_empty' => false, // Set to true to hide empty terms
                      );
                      
                      $categories = get_terms($args);
                      
                      if (!empty($categories) && !is_wp_error($categories)) {
                          foreach ($categories as $category) {
                              echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                          }
                      } else {
                          echo '<option value="0">No Service found</option>';
                      }
                      ?>
                  </select>
                    </div>
                    <div class="col-xl-6">
                        <select class="form-select form-control case_studies_all_category_ajax">
                        <option selected value="0">Select Category</option>
                          <?php
                            $args = array(
                                'taxonomy' => 'project_category', // Replace with your custom taxonomy name
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => false, // Set to true to hide empty terms
                            );
                            
                            $categories = get_terms($args);
                            
                            if (!empty($categories) && !is_wp_error($categories)) {
                                foreach ($categories as $category) {
                                    echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';
                                }
                            } else {
                                echo '<option value="0">No categories found</option>';
                            }
                          ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mt-5">

                <div class="row"  id="uiexpertz_service_archive_wrapper">
                    <?php while(have_posts()) : the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item service-item-wrap bg-white mb-4 pb-3">
                            <div>
                              <?php if(has_post_thumbnail( )) : ?>
                                <div class="p-1">
                                    <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                                </div>
                                <?php endif; ?>
                                <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                <?php
                                $post_categories = get_the_terms(get_the_ID(), 'category');
                                if ($post_categories && !is_wp_error($post_categories)) {
                                    foreach ($post_categories as $category) {
                                        echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                                <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                    <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                    <p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <a href="<?php the_permalink(); ?>"
                                class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                <span>
                                    <h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
                                </span>
                                <span>
                                    <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                    </svg>

                                </span>
                            </a>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>
                </div>

                <div class="navbar-right btn-wrap d-flex justify-content-center flex-wrap gap-3 gap-lg-4 mt-5"
                    data-wow-duration="0.200s" data-wow-delay="400ms">

                    <button class="text-decoration-none position-relative bg-btn banner-btn  border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center uiexpertz_case_studies_archive_load_more_btn">
                        Load more works
                        <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z"
                                fill="white" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ UiExpertz Services end -->




<?php get_footer(); ?>