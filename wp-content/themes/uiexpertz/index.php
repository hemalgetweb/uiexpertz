<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uiexpertz
 */
get_header();

$cbtoolkit_blog_banner_image = get_theme_mod('cbtoolkit_blog_banner_image', get_template_directory_uri() . '/assets/img/blog-banner.svg');
$cbtoolkit_blog_sub_title = get_theme_mod('cbtoolkit_blog_sub_title', __('Latest Blogs and News', 'uiexpertz'));
$cbtoolkit_blog_title = get_theme_mod('cbtoolkit_blog_title', __('Sharing our knowledge, experience and insight.', 'uiexpertz'));
$cbtoolkit_blog_content = get_theme_mod('cbtoolkit_blog_content', __('Keep yourself updated with our blogs that offer the latest news, updates, & tips related to full-service creative agency.', 'uiexpertz'));
$cbtoolkit_blog_category_select = get_theme_mod('cbtoolkit_blog_category_select', array());
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 8;
$sidebar_class = is_active_sidebar( 'blog-sidebar' ) ? 'theme-has-blog-sidebar' : 'theme-has-blog-no-sidebar';
$cbblog_layout = get_theme_mod('cbblog_layout') ? get_theme_mod('cbblog_layout') : 'right-sidebar';
if(isset($_GET['s'])) {
	$search = $_GET['s'];
}
$sidebar_space = '';
if($cbblog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'ml-50' : '';
} else if($cbblog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'mr-50' : '';
} else {
	$blog_column = 8;
}

// Get all categories for the "post" post type
$categories = get_categories(array(
    'taxonomy' => 'category', // Specify the taxonomy (category in this case)
    'hide_empty' => true,    // Set to false to include categories with no posts
	'post_type' => 'post'
));



/**
 * Get query var for category archive
 */
if (get_query_var('cat')) {
    // The 'cat' query variable is set in the URL
    // You can access its value using get_query_var('cat')
    $archive_category_id = get_query_var('cat');
    $cat_id_passed = true;
} else {
    $archive_category_id = 0;
    $cat_id_passed = false;
}
?>



<!--sub banner -->
<div class=" subBanner bg-clr-blue fs-6 ">
    <div class="container">
        <div class="banner-wrapper d-flex flex-column justify-content-between pb-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-info text-center text-lg-start mb-5 mb-lg-0">
                        <?php if(!empty($cbtoolkit_blog_sub_title)) : ?>
                        <p class="text-clr-sky fs-18"><?php echo wp_kses_post($cbtoolkit_blog_sub_title); ?></p>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_blog_title)) : ?>
                        <h1 class="fs-48 text-white mb-4 ">
                            <?php echo wp_kses_post($cbtoolkit_blog_title); ?>
                        </h1>
                        <?php endif ?>
                        <div class="section-intro fs-18 fw-normal text-clr-skyBlue mb-5 ">
                            <?php if(!empty($cbtoolkit_blog_content)) : ?>
                            <p>
                                <?php echo wp_kses_post($cbtoolkit_blog_content); ?>
                            </p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php if(!empty($cbtoolkit_blog_banner_image)) : ?>
                    <div class="banner-img text-center text-lg-end ">
                        <img src="<?php echo esc_url($cbtoolkit_blog_banner_image); ?>"
                            alt="<?php echo esc_attr__('Blog banner', 'uiexpertz'); ?>" class="img-fluid">
                    </div>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!--/ sub banner -->



<!-- blog-header-tab -->
<div class="blog-header-tab">
    <div class="container">
        <div class="blog-tab-list position-relative">
            <ul class="nav nav-pills align-items-center justify-content-center mb-0 pb-3 pb-md-0" id="pills-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <?php if(!isset($_POST['search'])) :
                    $active_class = "";
                    if(!$archive_category_id) {
                        $active_class = "active";
                    }  
                    ?>
                    <button
                        class="nav-link <?php echo $active_class; ?> py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
                        role="tab">

                        Latest Blogs
                    </button>
                    <?php else: ?>
                        <button
                        class="nav-link active py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button"
                        role="tab">
                            Latest Blogs
                        </button>
                    <?php endif; ?>
                </li>
                <?php if(!empty($cbtoolkit_blog_category_select)) : ?>
                <?php foreach($cbtoolkit_blog_category_select as $index=>$category_id) :
                        $cat_name = get_cat_name($category_id);    
                    ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link py-3 py-xl-4 d-flex align-items-center gap-2 text-clr-gray fs-6 fw-bold"
                        id="pills-<?php echo $category_id; ?>-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-<?php echo $category_id; ?>" type="button" role="tab">

                        <?php echo $cat_name; ?>
                    </button>
                </li>
                <?php endforeach; ?>
                <?php endif; ?>
                <li class="nav-item ms-lg-auto">
                    <button type="button" class="border-0 bg-transparent search-btn p-0 me-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-search.svg"
                            alt="about image" class="img-fluid">
                    </button>
                </li>

            </ul>
            <!-- search-wrap -->
            <div class="searchBar position-absolute " style="display: block;">
                <form id="searchForm" action="#" method="POST">
                    <div class="search-wrap position-relative">
                        <input type="text" class="form-control px-4 text-clr-gray fs-14 fw-normal" name="search" placeholder="Search.." id="searchInput">
                    </div>
                </form>
                <button type="button" class="cross-btn border-0 bg-transparent position-absolute" id="searchButton">
                    <img src="http://www.uiexpertz.com/wp-content/themes/uiexpertz/assets/img/cross.svg" alt="about image" class="img-fluid cross-search me-3">
                </button>
                </div>
            <!-- search-wrap -End -->
        </div>
    </div>
</div>
<!--/ blog-header-tab -->

<!-- blog-main -->
<main class="blog-main pb-5 bg-clr-lightGray <?php echo is_home() && !is_front_page() ? 'pb-120-i' : '';?>">
    <div class="slider-container">
        <div class="tab-content" id="pills-tabContent">
            <?php $active_class = "";
                if(!$archive_category_id) {
                    $active_class = "show active";
                } else {
                    $active_class = "";
                }
            ?>
            <?php
            /**
             * Show all post by default
             */
            ?>
            <div class="tab-pane fade <?php echo $active_class; ?>" id="pills-all" role="tabpanel" tabindex="0">
                <?php if(!isset($_POST['search'])) : ?>
                <div class="blogCart-section-title">
                    <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                        Latest Blogs
                    </h4>
                </div>
                <!-- blog-slide-active -->
                <div class="blog-slide-active radius-12">

                    <div class="splide-blog splide">
                        <div class="splide__track" id="splide-track">
                            <?php
                                /**
                                 * Fetch all featured blogs
                                */
                                $args = array(
                                    'post_type'      => 'post',
                                    'meta_key'       => 'featured_blog',
                                    'meta_value'     => 1,
                                    'meta_compare'   => '=',
                                    'posts_per_page' => -1,
                                );
                                
                                $fetch_all_featured_post = new WP_Query($args);
                            ?>
                            <?php if($fetch_all_featured_post->have_posts()) : ?>
                            <ul class="splide__list">
                                <?php while($fetch_all_featured_post->have_posts()) :
                                $fetch_all_featured_post->the_post();
                                ?>
                                <li class="splide__slide">
                                    <div class="single-blog bg-white">
                                        <div class="featured-image">
                                            <div class="case-study-img text-center">
                                                <a
                                                    href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail( get_the_ID(), 'full' ); ?></a>
                                            </div>
                                        </div>
                                        <div
                                            class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <?php
                                                $categories = get_the_category();
                                                $cat_first_name = "";
                                                if($categories) {
                                                    $cat_first_name = $categories[0]->name;
                                                }
                                                ?>
                                                <?php if($cat_first_name) : ?>
                                                <h6
                                                    class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                    <?php echo $cat_first_name; ?>
                                                </h6>
                                                <?php endif; ?>
                                                <h3 class="mb-4">
                                                    <a href="<?php the_permalink(); ?>"
                                                        class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <?php if(has_excerpt()) : ?>
                                                <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                    <?php echo esc_html(get_the_excerpt()); ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class=" py-3">
                                                <a href="<?php the_permalink(); ?>"
                                                    class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                    <span>
                                                        <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                                    </span>
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                fill="#384973" />
                                                        </svg>


                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- blog-slide-active -END -->
                <?php endif; ?>

                <!-- blogs-post  -->
                <div>
                    <div class="">
                        <div class="blogCart-section-title">
                            <?php if(!isset($_POST['search'])) : ?>
                            <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                                All blogs
                            </h4>
                            <?php endif; ?>
                            <?php if(isset($_POST['search'])) : ?>
                            <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                                Latest Blogs <?php echo sanitize_text_field($_POST['search']); ?>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <?php
                            /**
                             * Fetch all blogs
                            */
                            if(!isset($_POST['search'])) {
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => true
                                );
                            } else {
                                $search_keyword = sanitize_text_field($_POST['search']);
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => true,
                                    's' => $search_keyword
                                );
                            }
                            
                            $fetch_all_posts = new WP_Query($args);
                        ?>
                        <?php if($fetch_all_posts->have_posts()): ?>
                        <div class="row mt-4 home-filtered-blog-post-114">
                            <?php while($fetch_all_posts->have_posts()) : $fetch_all_posts->the_post(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">
                                    <a  class="js-text-cursor uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
                                        href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>">
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
                                        <div class="p-1">
                                            <?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                            <?php
                                            $categories = get_the_category();
                                            
                                            foreach ($categories as $category) {
                                                echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                            <p class="fs-6 text-clr-gray mb-3"><?php echo wp_trim_words(get_the_excerpt(), 16); ?></p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <?php endif; ?>
                        <button class="ajax-load-more-all-blog w-auto mx-auto mt-5 text-decoration-none position-relative bg-btn banner-btn border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center">
                            Load more
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M-2.62268e-07 6L1.0625 4.9375L5.25 9.125L5.25 -2.95052e-07L6.75 -2.29485e-07L6.75 9.125L10.9375 4.9375L12 6L6 12L-2.62268e-07 6Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <!--/ blogs-post  -->
            </div>
            <!-- /. tab 1 -->
            <?php
            /**
             * Show post only for category archive
             */
            $archive_active_class = "";
            if($archive_category_id) {
                $archive_active_class = "show active";
            } else {
                $archive_active_class = "";
            }
            ?>
            <div class="tab-pane fade uiexpertz-has-archive-default-loaded <?php echo $archive_active_class; ?>" id="pills-archive-<?php echo $archive_category_id; ?>" role="tabpanel" tabindex="0">
                <?php if(!isset($_POST['search'])) : ?>
                <div class="blogCart-section-title">
                    <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                        Archive: <?php echo get_cat_name( $archive_category_id ); ?>
                    </h4>
                </div>
                <!-- blog-slide-active -->
                <div class="blog-slide-active radius-12">

                    <div class="splide-blog1234 splide">
                        <div class="splide__track" id="splide-track2">
                            <?php
                                /**
                                 * Fetch all featured blogs
                                */
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => -1,
                                    'meta_key'       => 'featured_blog',
                                    'meta_value'     => 1,
                                    'meta_compare'   => '=',
                                    'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'term_id',
                                            'terms'    => $archive_category_id,
                                            'operator' => 'IN',
                                        ),
                                    ),
                                );
                                
                                $fetch_all_featured_post = new WP_Query($args);
                            ?>
                            <?php if($fetch_all_featured_post->have_posts()) : ?>
                            <ul class="splide__list">
                                <?php while($fetch_all_featured_post->have_posts()) :
                                $fetch_all_featured_post->the_post();
                                ?>
                                <li class="splide__slide">
                                    <div class="single-blog bg-white">
                                        <div class="featured-image">
                                            <div class="case-study-img text-center">
                                                <a
                                                    href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail( get_the_ID(), 'full' ); ?></a>
                                            </div>
                                        </div>
                                        <div
                                            class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <?php
                                                $categories = get_the_category();
                                                $cat_first_name = "";
                                                if($categories) {
                                                    $cat_first_name = $categories[0]->name;
                                                }
                                                ?>
                                                <?php if($cat_first_name) : ?>
                                                <h6
                                                    class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                    <?php echo $cat_first_name; ?>
                                                </h6>
                                                <?php endif; ?>
                                                <h3 class="mb-4">
                                                    <a href="<?php the_permalink(); ?>"
                                                        class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h3>
                                                <?php if(has_excerpt()) : ?>
                                                <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                    <?php echo esc_html(get_the_excerpt()); ?>
                                                </p>
                                                <?php endif; ?>
                                            </div>
                                            <div class=" py-3">
                                                <a href="<?php the_permalink(); ?>"
                                                    class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                    <span>
                                                        <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                                    </span>
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                fill="#384973" />
                                                        </svg>


                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- blog-slide-active -END -->
                <?php endif; ?>

                <!-- blogs-post  -->
                <div>
                    <div class="">
                        <div class="blogCart-section-title">
                            <?php if(!isset($_POST['search'])) : ?>
                            <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                                All blogs
                            </h4>
                            <?php endif; ?>
                            <?php if(isset($_POST['search'])) : ?>
                            <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                                Latest Blogs <?php echo sanitize_text_field($_POST['search']); ?>
                            </h4>
                            <?php endif; ?>
                        </div>
                        <?php
                            /**
                             * Fetch all blogs
                            */
                            if(!isset($_POST['search'])) {
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => true
                                );
                            } else {
                                $search_keyword = sanitize_text_field($_POST['search']);
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => true,
                                    's' => $search_keyword
                                );
                            }
                            
                            $fetch_all_posts = new WP_Query($args);
                        ?>
                        <?php if($fetch_all_posts->have_posts()): ?>
                        <div class="row mt-4" id="home-filtered-blog-post-143a4143">
                            <?php while($fetch_all_posts->have_posts()) : $fetch_all_posts->the_post(); ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">
                                    <a  class="js-text-cursor uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
                                        href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>">
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
                                        <div class="p-1">
                                            <?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                        </div>
                                        <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                            <?php
                                            $categories = get_the_category();
                                            
                                            foreach ($categories as $category) {
                                                echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                            }
                                            ?>
                                        </ul>
                                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                            <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                            <p class="fs-6 text-clr-gray mb-3"><?php echo wp_trim_words(get_the_excerpt(), 16); ?></p>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                        <span>
                                            <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                        </span>
                                        <span>
                                            <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                            </svg>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!--/ blogs-post  -->
            </div>
            <!-- /. tab 2 -->
            <?php 
            $category_ids = [];
            foreach($cbtoolkit_blog_category_select as $index=>$category_id) :
            array_push($category_ids, $category_id);
            ?>
            <div class="tab-pane fade" id="pills-<?php echo $category_id; ?>" role="tabpanel" tabindex="0">
                <div class="blogCart-section-title">
                        <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                            <?php echo get_cat_name( $category_id ); ?>
                        </h4>
                    </div>

                    <!-- blog-slide-active -->
                    <div class="blog-slide-active radius-12">

                        <div class="splide-blog<?php echo $category_id; ?> splide">
                            <div class="splide__track" id="splide-track<?php echo $category_id ?>">
                                <?php
                                    /**
                                     * Fetch all featured blogs
                                    */
                                    $specific_cat_args = array(
                                        'post_type'      => 'post',
                                        'meta_key'       => 'featured_blog',
                                        'meta_value'     => 1,
                                        'meta_compare'   => '=',
                                        'posts_per_page' => -1,
                                        'cat'            => $category_id
                                    );
                                    $fetch_specific_category_featured_post = new WP_Query($specific_cat_args);
                                ?>
                                <?php if($fetch_specific_category_featured_post->have_posts()) : ?>
                                <ul class="splide__list">
                                    <?php while($fetch_specific_category_featured_post->have_posts()) :
                                    $fetch_specific_category_featured_post->the_post();
                                    ?>
                                    <li class="splide__slide">
                                        <div class="single-blog bg-white">
                                            <div class="featured-image">
                                                <div class="case-study-img text-center">
                                                    <a
                                                        href="<?php echo the_permalink(); ?>"><?php the_post_thumbnail( get_the_ID(), 'full' ); ?></a>
                                                </div>
                                            </div>
                                            <div
                                                class="blog-info ps-3 pe-4 pt-3 d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <h6
                                                        class="sub-title fs-12 fw-medium text-clr-darkBlue bg-clr-lightPink radius-4 px-2 d-inline-block mb-3">
                                                        <?php
                                                    $categories = get_the_category();
                                                    if (!empty($categories)) {
                                                        echo esc_html($categories[0]->name);
                                                    }
                                                    ?>
                                                    </h6>
                                                    <h3 class="mb-4">
                                                        <a href="<?php the_permalink(); ?>"
                                                            class="blog-title text-clr-blue fs-2 fw-bold text-decoration-none">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h3>
                                                    <p class="fs-14 text-clr-gray fw-normal mb-1">
                                                        <?php echo esc_html(get_the_excerpt()); ?>
                                                    </p>
                                                </div>
                                                <div class=" py-3">
                                                    <a href="<?php the_permalink(); ?>"
                                                        class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                                        <span>
                                                            <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                                        </span>
                                                        <span>
                                                            <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z"
                                                                    fill="#384973" />
                                                            </svg>


                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endwhile; wp_reset_query(); ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- blog-slide-active -END -->


                    <!-- blogs-post  -->
                    <div>
                        <div class="">
                            <div class="blogCart-section-title">
                                <h4 class="fs-2 fw-normal text-clr-blue mb-0">
                                    All blogs
                                </h4>
                            </div>
                            <?php
                                /**
                                 * Fetch all featured blogs
                                */
                                $args = array(
                                    'post_type'      => 'post',
                                    'post_status' => 'publish',
                                    'ignore_sticky_posts' => true,
                                    'cat'            => $category_id,
                                    'posts_per_page' => -1
                                );
                                
                                $fetch_all_posts = new WP_Query($args);
                            ?>
                            <?php if($fetch_all_posts->have_posts()): ?>
                            <div class="row mt-4 home-filtered-blog-post-114">
                                <?php while($fetch_all_posts->have_posts()) : $fetch_all_posts->the_post(); ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-item js-text-cursor-block  service-item-wrap bg-white mb-4 pb-3">
                                        <a  class="uiexpertz-theme-accourdion-btn-114 js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white d-none"
                                            href="<?php echo esc_url(get_the_permalink( get_the_ID() )); ?>">
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
                                            <div class="p-1">
                                                <?php the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                            </div>
                                            <ul class="list-unstyled d-flex align-items-center gap-3 flex-wrap px-4 pt-4">
                                                <?php
                                                $categories = get_the_category();
                                                
                                                foreach ($categories as $category) {
                                                    echo '<li class="bg-clr-lightPink py-2 px-3 ls-1 fs-12 fs-12 fw-medium text-clr-darkBlue">' . esc_html($category->name) . '</li>';
                                                }
                                                ?>
                                            </ul>
                                            <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                                                <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
                                                <p class="fs-6 text-clr-gray mb-3"><?php echo wp_trim_words(get_the_excerpt(), 16); ?></p>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex read-more px-4 text-decoration-none align-items-start justify-content-between mt-2">
                                            <span>
                                                <span class="fs-14 fw-semi-bold text-clr-gray">Read more</span>
                                            </span>
                                            <span>
                                                <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                                </svg>

                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_query(); ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--/ blogs-post  -->
            </div>
            <?php endforeach; ?>
            <?php
            if (is_home()) {
                wp_localize_script( 'uiexpertz-script', 'uiexpertz_all_cat_ids', $category_ids );            
            }
            ?>
            <!-- /. tab 2 -->

        </div>
    </div>
</main>
<!--/ blog-main -->

<?php
get_footer();