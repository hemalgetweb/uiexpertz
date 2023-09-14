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
<div class=" subBanners bg-clr-blue fs-6 pt-120 pb-120">
    <div class="container">
        <div class="banner-wrapper d-flex flex-column justify-content-between">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner-info text-center text-md-start mb-lg-0">
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
                <div class="col-md-6">
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
<div class="service pt-100">
    <div class="uiexpertz-service-top-heading-wrap pb-60">
        <div class="container">
            <div class="text-center mb-5">
                <?php if(!empty($cbtoolkit_case_study_inner_section_title)) : ?>
                <h1 class="fs-40 text-clr-blue py-2"><?php echo $cbtoolkit_case_study_inner_section_title; ?></h1>
                <?php endif; ?>
                <?php if(!empty($cbtoolkit_case_study_inner_section_subtitle)) : ?>
                <p class="text-clr-gray"><?php echo $cbtoolkit_case_study_inner_section_subtitle; ?></p>
                <?php endif; ?>
            </div>
            <?php
                $taxonomy = 'project_service'; // Taxonomy name

                $terms = get_terms( array(
                    'taxonomy' => $taxonomy,
                    'hide_empty' => true,
                    'post_type' => 'project'
                ) );
                ?>
            <div class="uiexpertz-archive-project-tab-buttons-114">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-tab0-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-tab0" type="button" role="tab" aria-controls="nav-tab0"
                            aria-selected="true">All</button>
                        <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                        <?php foreach ( $terms as $index => $term ) : ?>
                        <button class="nav-link" id="nav-tab<?php echo $index+1; ?>-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-tab<?php echo $index+1; ?>" type="button" role="tab"
                            aria-controls="nav-tab<?php echo $index+1; ?>"
                            aria-selected="false"><?php echo esc_html( $term->name ); ?></button>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="uiexpertz-project-bottom-main-wrap-114 bg-clr-lightGray pt-10 pb-95">
        <div class="tab-content" id="uiexprtz-project-nav-tabContent">
            <div class="tab-pane fade show active" id="nav-tab0" role="tabpanel" aria-labelledby="nav-tab1-tab">
                <?php if(have_posts()) : ?>
                <div class="explore-experience">
                    <div class="container">
                        <div class="mt-5">
                            <div class="row" id="uiexpertz_service_archive_wrapper">
                                <?php while(have_posts()) : the_post();
                                    ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item service-item-wrap bg-white mb-4 pb-3 js-text-cursor-block">
                                        <a class="uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
                                            href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>"
                                            class="js-text-cursor d-none">
                                            <?php echo esc_html__('Get inspired', 'cb-core'); ?>
                                            <span class="pb-1">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 16L8.9375 14.9375L13.125 10.75H4V9.25H13.125L8.9375 5.0625L10 4L16 10L10 16Z"
                                                        fill="white" />
                                                </svg>

                                            </span>
                                        </a>
                                        <div>
                                            <?php if(has_post_thumbnail( )) : ?>
                                            <div class="p-1">
                                                <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                                            </div>
                                            <?php endif; ?>
                                            <ul
                                                class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                                <?php
                                                $post_categories = get_the_terms(get_the_ID(), 'project_category');
                                                if ($post_categories && !is_wp_error($post_categories)) {
                                                    foreach ($post_categories as $category) {
                                                        echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                            <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                                <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                                <p class="fs-6 text-clr-gray mb-3"><?php echo wp_kses_post(get_the_excerpt(), 13); ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink(); ?>"
                                            class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                            <span>
                                                <h4 class="fs-14 fw-semi-bold text-clr-gray">
                                                    <?php echo esc_html__('View details', 'uiexpertz'); ?></h4>
                                            </span>
                                            <span>
                                                <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                                </svg>

                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
            <?php foreach ( $terms as $index => $term ) : 
                    $term_id = $term->term_id;
                    $post_type = "project";
                    $args = array(
                        'post_type' => $post_type,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'project_service',
                                'field'    => 'term_id',
                                'terms'    => $term_id,
                            ),
                        ),
                    );
                    
                    $projects = new WP_Query( $args );
                    ?>
            <div class="tab-pane fade" id="nav-tab<?php echo $index+1; ?>" role="tabpanel"
                aria-labelledby="nav-tab<?php echo $index+1; ?>-tab">
                <?php if(have_posts()) : ?>
                <div class="explore-experience bg-clr-lightGray">
                    <div class="container">
                        <div class="mt-5">
                            <div class="row" id="uiexpertz_service_archive_wrapper">
                                <?php while($projects->have_posts()) : $projects->the_post();
                                        ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item service-item-wrap bg-white mb-4 pb-3 js-text-cursor-block">
                                        <a class="uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
                                            href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>"
                                            class="js-text-cursor d-none">
                                            <?php echo esc_html__('Get inspired', 'cb-core'); ?>
                                            <span class="pb-1">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10 16L8.9375 14.9375L13.125 10.75H4V9.25H13.125L8.9375 5.0625L10 4L16 10L10 16Z"
                                                        fill="white" />
                                                </svg>

                                            </span>
                                        </a>
                                        <div>
                                            <?php if(has_post_thumbnail( )) : ?>
                                            <div class="p-1">
                                                <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
                                            </div>
                                            <?php endif; ?>
                                            <ul
                                                class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                                <?php
                                                $post_categories = get_the_terms(get_the_ID(), 'project_category');
                                                if ($post_categories && !is_wp_error($post_categories)) {
                                                    foreach ($post_categories as $category) {
                                                        echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                            <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                                <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                                <p class="fs-6 text-clr-gray mb-3"><?php echo wp_kses_post(get_the_excerpt(), 13); ?></p>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink(); ?>"
                                            class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                            <span>
                                                <h4 class="fs-14 fw-semi-bold text-clr-gray">
                                                    <?php echo esc_html__('Read more', 'uiexpertz'); ?></h4>
                                            </span>
                                            <span>
                                                <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                                </svg>

                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!--/ UiExpertz Services end -->




<?php get_footer(); ?>