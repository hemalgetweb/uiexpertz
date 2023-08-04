<?php
/**
 * single.php
 * @package WordPress
 * @subpackage uiexpertz
 * @since uiexpertz 1.0
 * 
 */
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-lg-8 col-md-12 col-sm-12' : 'col-lg-8 col-md-12 col-sm-12';
$cbblog_layout = get_theme_mod('cbblog_layout') ? get_theme_mod('cbblog_layout'): 'right-sidebar';
$sidebar_space = '';
$author_id = get_the_author_meta('ID');
$post_id = get_the_ID();
if($cbblog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pl-50' : '';
} else if($cbblog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pr-50' : '';
}
$category = get_the_category(get_the_ID());
$cat_id = '';
$cat_name = '';
if($category) {
    $cat_id = $category ? $category[0]->term_id : '';
    $cat_name = $category ? $category[0]->name : '';
}
$author_avatar = get_avatar( $author_id, 32 );
$comment_count = get_comments_number( $post_id );
$author_id = get_post_field('post_author', get_the_ID());
$author_archive_link = get_author_posts_url($author_id);
$username = get_the_author_meta('user_login', $author_id);
$current_url = urlencode( get_permalink() );
$post_title = get_the_title();
$facebook_share_link = 'https://www.facebook.com/sharer/sharer.php?u=' . $current_url;
$twitter_share_link = 'https://twitter.com/intent/tweet?url=' . $current_url . '&text=' . urlencode( $post_title );
$linkedin_share_link = 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($current_url);
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'DESC',
);

$recent_posts = new WP_Query($args);


/**
 * Blog details customizer meta
*/
$cbblog_details_related_post_subtitle = get_theme_mod( 'cbblog_details_related_post_subtitle', __('UiExpertz Latest Blogs', 'uiexpertz') );
$cbblog_details_related_post_title = get_theme_mod( 'cbblog_details_related_post_title', __('Related Posts', 'uiexpertz') );
$cbblog_details_related_post_content = get_theme_mod( 'cbblog_details_related_post_content', __('Facilisis mauris sit amet massa vitae tortor condimentum.', 'uiexpertz') );
$cbblog_details_related_post_btn_text = get_theme_mod( 'cbblog_details_related_post_btn_text', __('View all', 'uiexpertz') );
$cbblog_details_related_post_btn_link = get_theme_mod( 'cbblog_details_related_post_btn_link', __('#', 'uiexpertz') );

/**
 * CF7 form data from customizer
 */
$cbtoolkit_case_study_cf7_section_subtitle = get_theme_mod( 'cbtoolkit_case_study_cf7_section_subtitle', __('Let’s work together', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_title = get_theme_mod( 'cbtoolkit_case_study_cf7_section_title', __('Tell us about your project, or send us an email at  <span><a class="fw-extraBold text-white" href="mailto:hello@uiexpertz.com">hello@uiexpertz.com </a></span>', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_content = get_theme_mod( 'cbtoolkit_case_study_cf7_section_content', __('We take pride in delivering exceptional customer satisfaction and are always thrilled to hear how we’ve helped our clients achieve their goals.', 'cb-toolkit') );
$cbtoolkit_case_study_cf7_section_form_heading = get_theme_mod( 'cbtoolkit_case_study_cf7_section_form_heading', __('Fill out the form to start the <br class="d-none d-xl-inline"> conversation', 'cb-toolkit') );



/**
 * Related post query
 */
$current_post_id = get_the_ID();

$tags = wp_get_post_tags($current_post_id, array('fields' => 'ids'));
$categories = wp_get_post_categories($current_post_id, array('fields' => 'ids'));

$related_query_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3, // You can adjust the number of related posts to display
    'post__not_in' => array($current_post_id), // Exclude the current post
    'tax_query' => array(
        'relation' => 'OR',
        array(
            'taxonomy' => 'post_tag',
            'field' => 'id',
            'terms' => $tags,
        ),
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $categories,
        ),
    ),
);

$related_query = new WP_Query($related_query_args);

 ?>
<?php get_header(); ?>
<div class=" subBanner blog-details-banner bg-clr-blue fs-6 ">
    <div class="container">
      <div class="banner-wrapper d-flex flex-column justify-content-between">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="banner-info text-center text-lg-start mb-5 mb-lg-0">
              <p class="text-clr-sky fs-18"><?php echo esc_html($cat_name); ?></p>
              <h1 class="fs-48 text-white mb-4 lh-sm">
                <?php the_title(); ?>
              </h1>
              <div class="blog-details-info d-flex align-items-center gap-4">
                <div class="authors d-flex gap-2 align-items-center">
                  <?php echo $author_avatar; ?>
                  <div class="text-clr-skyBlue fs-18 ">Published by <a href="<?php echo esc_url($author_archive_link); ?>" class="text-decoration-none fw-bold text-white"><?php echo esc_html($username); ?></a></div>
                </div>
                <div class="publish-info-line"></div>
                <div class="authors d-flex gap-2 align-items-center text-decoration-none">
                  <img src="assets/img/fi-rs-calendar.svg" class="img-fluid me-1" alt="">
                  <p class="text-clr-skyBlue fs-18 mb-0"><?php echo get_the_date(); ?></p>
                </div>
                <div class="publish-info-line"></div>
                <div class="authors d-flex gap-2 align-items-center  text-decoration-none">
                  <img src="assets/img/comment.svg" class="img-fluid me-1" alt="">
                  <p class="text-clr-skyBlue fs-18 mb-0"><?php echo esc_attr($comment_count); ?> Comments</p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="blog-details section-padding">
    <div class="container">
      <div class="blog-details-wrap">
        <div class="row">
          <div class="col-xl-8">
            <div class="uiexpertz-blog-details-inner">
              <?php the_post_thumbnail(get_the_ID()); ?>
              <?php the_content(); ?>
              <div class="shared-article d-flex align-items-center justify-content-between">
                <h3 class="text-clr-blue fs-4 m-0">Share articles</h3>
                <div class="d-flex gap-3">
                  <a href="<?php echo $facebook_share_link; ?>" target="_blank" class="text-decoration-none blog-details-social">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M22 11C22 4.92486 17.0751 0 11 0C4.92486 0 0 4.92486 0 11C0 16.4903 4.02252 21.0412 9.28125 21.8664V14.1797H6.48828V11H9.28125V8.57656C9.28125 5.81969 10.9235 4.29687 13.4361 4.29687C14.6392 4.29687 15.8984 4.51172 15.8984 4.51172V7.21875H14.5114C13.145 7.21875 12.7188 8.06674 12.7188 8.9375V11H15.7695L15.2818 14.1797H12.7188V21.8664C17.9775 21.0412 22 16.4903 22 11Z" fill="#97A3C1"></path>
                    </svg>


                  </a>
                  <a href="<?php echo $twitter_share_link; ?>" target="_blank" class="text-decoration-none blog-details-social">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_504_6826)">
                        <path d="M6.92098 19.9376C15.2208 19.9376 19.7618 13.0596 19.7618 7.09683C19.7618 6.90347 19.7575 6.70581 19.7489 6.51245C20.6322 5.87363 21.3945 5.08235 22 4.17581C21.1773 4.54184 20.3038 4.78089 19.4094 4.8848C20.3512 4.32029 21.0563 3.43347 21.3941 2.38874C20.5082 2.9138 19.5393 3.28418 18.529 3.48402C17.8483 2.76072 16.9482 2.28181 15.968 2.12134C14.9879 1.96086 13.9821 2.12775 13.1063 2.59621C12.2304 3.06467 11.5333 3.8086 11.1227 4.71299C10.7121 5.61738 10.6108 6.63185 10.8346 7.59956C9.04062 7.50954 7.28561 7.04352 5.68332 6.23171C4.08102 5.41991 2.66722 4.28044 1.53355 2.88718C0.957366 3.8806 0.781052 5.05613 1.04044 6.17487C1.29984 7.29361 1.97547 8.27162 2.93004 8.91011C2.21341 8.88736 1.51248 8.69441 0.885156 8.34722V8.40308C0.884514 9.44559 1.24492 10.4562 1.90512 11.263C2.56531 12.0698 3.48455 12.6231 4.50656 12.8289C3.84272 13.0105 3.14598 13.037 2.47027 12.9062C2.75867 13.8028 3.31978 14.5869 4.07529 15.1493C4.8308 15.7116 5.74303 16.024 6.68465 16.0429C5.08606 17.2986 3.11133 17.9797 1.07852 17.9765C0.718013 17.976 0.357866 17.9539 0 17.9103C2.06512 19.2352 4.4674 19.9389 6.92098 19.9376Z" fill="#97A3C1"></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_504_6826">
                          <rect width="22" height="22" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                  <a href="#" target="_blank" class="text-decoration-none blog-details-social">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_504_6829)">
                        <path d="M11 1.98086C13.9391 1.98086 14.2871 1.99375 15.443 2.04531C16.5172 2.09258 17.0973 2.27305 17.484 2.42344C17.9953 2.62109 18.3648 2.86172 18.7473 3.24414C19.134 3.63086 19.3703 3.99609 19.568 4.50742C19.7184 4.89414 19.8988 5.47852 19.9461 6.54844C19.9977 7.70859 20.0105 8.05664 20.0105 10.9914C20.0105 13.9305 19.9977 14.2785 19.9461 15.4344C19.8988 16.5086 19.7184 17.0887 19.568 17.4754C19.3703 17.9867 19.1297 18.3563 18.7473 18.7387C18.3605 19.1254 17.9953 19.3617 17.484 19.5594C17.0973 19.7098 16.5129 19.8902 15.443 19.9375C14.2828 19.9891 13.9348 20.002 11 20.002C8.06094 20.002 7.71289 19.9891 6.55703 19.9375C5.48281 19.8902 4.90273 19.7098 4.51602 19.5594C4.00469 19.3617 3.63516 19.1211 3.25273 18.7387C2.86602 18.352 2.62969 17.9867 2.43203 17.4754C2.28164 17.0887 2.10117 16.5043 2.05391 15.4344C2.00234 14.2742 1.98945 13.9262 1.98945 10.9914C1.98945 8.05234 2.00234 7.7043 2.05391 6.54844C2.10117 5.47422 2.28164 4.89414 2.43203 4.50742C2.62969 3.99609 2.87031 3.62656 3.25273 3.24414C3.63945 2.85742 4.00469 2.62109 4.51602 2.42344C4.90273 2.27305 5.48711 2.09258 6.55703 2.04531C7.71289 1.99375 8.06094 1.98086 11 1.98086ZM11 0C8.01367 0 7.63984 0.0128906 6.4668 0.0644531C5.29805 0.116016 4.49453 0.305078 3.79844 0.575781C3.07227 0.859375 2.45781 1.2332 1.84766 1.84766C1.2332 2.45781 0.859375 3.07227 0.575781 3.79414C0.305078 4.49453 0.116016 5.29375 0.0644531 6.4625C0.0128906 7.63984 0 8.01367 0 11C0 13.9863 0.0128906 14.3602 0.0644531 15.5332C0.116016 16.702 0.305078 17.5055 0.575781 18.2016C0.859375 18.9277 1.2332 19.5422 1.84766 20.1523C2.45781 20.7625 3.07227 21.1406 3.79414 21.4199C4.49453 21.6906 5.29375 21.8797 6.4625 21.9313C7.63555 21.9828 8.00937 21.9957 10.9957 21.9957C13.982 21.9957 14.3559 21.9828 15.5289 21.9313C16.6977 21.8797 17.5012 21.6906 18.1973 21.4199C18.9191 21.1406 19.5336 20.7625 20.1437 20.1523C20.7539 19.5422 21.132 18.9277 21.4113 18.2059C21.682 17.5055 21.8711 16.7063 21.9227 15.5375C21.9742 14.3645 21.9871 13.9906 21.9871 11.0043C21.9871 8.01797 21.9742 7.64414 21.9227 6.47109C21.8711 5.30234 21.682 4.49883 21.4113 3.80273C21.1406 3.07227 20.7668 2.45781 20.1523 1.84766C19.5422 1.2375 18.9277 0.859375 18.2059 0.580078C17.5055 0.309375 16.7062 0.120313 15.5375 0.06875C14.3602 0.0128906 13.9863 0 11 0Z" fill="#97A3C1"></path>
                        <path d="M11 5.34961C7.88047 5.34961 5.34961 7.88047 5.34961 11C5.34961 14.1195 7.88047 16.6504 11 16.6504C14.1195 16.6504 16.6504 14.1195 16.6504 11C16.6504 7.88047 14.1195 5.34961 11 5.34961ZM11 14.6652C8.97617 14.6652 7.33477 13.0238 7.33477 11C7.33477 8.97617 8.97617 7.33477 11 7.33477C13.0238 7.33477 14.6652 8.97617 14.6652 11C14.6652 13.0238 13.0238 14.6652 11 14.6652Z" fill="#97A3C1"></path>
                        <path d="M18.193 5.12615C18.193 5.85662 17.6 6.44529 16.8738 6.44529C16.1434 6.44529 15.5547 5.85232 15.5547 5.12615C15.5547 4.39568 16.1477 3.80701 16.8738 3.80701C17.6 3.80701 18.193 4.39998 18.193 5.12615Z" fill="#97A3C1"></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_504_6829">
                          <rect width="22" height="22" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                  <a href="<?php echo $linkedin_share_link; ?>" target="_blank" class="text-decoration-none blog-details-social">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_504_6832)">
                        <path d="M20.3715 0H1.62422C0.726172 0 0 0.708984 0 1.58555V20.4102C0 21.2867 0.726172 22 1.62422 22H20.3715C21.2695 22 22 21.2867 22 20.4145V1.58555C22 0.708984 21.2695 0 20.3715 0ZM6.52695 18.7473H3.26133V8.2457H6.52695V18.7473ZM4.89414 6.81484C3.8457 6.81484 2.99922 5.96836 2.99922 4.92422C2.99922 3.88008 3.8457 3.03359 4.89414 3.03359C5.93828 3.03359 6.78477 3.88008 6.78477 4.92422C6.78477 5.96406 5.93828 6.81484 4.89414 6.81484ZM18.7473 18.7473H15.4859V13.6426C15.4859 12.4266 15.4645 10.8582 13.7887 10.8582C12.0914 10.8582 11.8336 12.1859 11.8336 13.5566V18.7473H8.57656V8.2457H11.7047V9.68086H11.7477C12.1816 8.85586 13.2473 7.98359 14.8328 7.98359C18.1371 7.98359 18.7473 10.1578 18.7473 12.9852V18.7473Z" fill="#97A3C1"></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_504_6832">
                          <rect width="22" height="22" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-4">
              <div class="Sidebar">
                <div class="sidebar-widget overflow-hidden p-2 mb-4">
                  <input type="text" class="form-control border-0 ps-5" placeholder="Search" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/search.svg); background-repeat: no-repeat; background-position: 15px center;">
                </div>
        

                    <div class="sidebar-widget border-dark1 radius-6 overflow-hidden mb-4">
                      <h3 class="widget-title text-clr-blue px-4 py-4 fs-4 fw-bold mb-0">
                        Recent Posts
                      </h3>
                      <div class="bg-white">
                        <ul class="recent-post architect-2 list-unstyled mb-0">
                            <?php
                            if ($recent_posts->have_posts()) {
                                while ($recent_posts->have_posts()) {
                                    $recent_posts->the_post();
                                    $post_date = get_the_time('Y-m-d H:i:s');
                                    ?>
                                    <li class="recent-post-list my-3 px-4">
                                        <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="text-decoration-none d-flex gap-3 align-items-center">
                                        <?php the_post_thumbnail( get_the_ID()); ?>
                                        <div class="recent-post-content">
                                            <span class="post-title fs-14 fw-medium text-clr-blue mb-1 d-block">
                                            <?php echo get_the_title(get_the_ID(), ); ?>
                                            </span>
                                            <span class="post-time d-flex align-items-center gap-2 fs-12 fw-normal text-clr-gray2 fs-14 fw-medium mb-0 d-block">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock.svg" class="img-fluid" alt="">
                                            <span>
                                                <?php echo custom_time_diff($post_date); ?>
                                            </span>
                                            </span>
                                        </div>
                                        </a>
                                    </li>
                                <?php }
                                wp_reset_postdata();
                            } else {
                                echo 'No posts found.';
                            }
                            ?>
                        </ul>
                      </div>
                    </div>

              
                <div class="sidebar-widget border-dark1 radius-6 overflow-hidden mb-4">
                  <h3 class="text-clr-blue pt-4 px-4 pb-3 fs-4 fw-bold mb-0">
                    Categories
                  </h3>
                  <div class="bg-light">
                  <ul class="recent-post architect-3 list-unstyled py-3 px-4 mb-0 bg-white">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        $category_name = $category->name;
                        $category_count = $category->count;
                        $category_link = get_category_link($category->term_id);

                        echo '<li class="recent-post-list py-2">';
                        echo '<a href="' . esc_url($category_link) . '" class="d-flex justify-content-between fs-18 fw-medium text-clr-blue text-decoration-none">';
                        echo '<span class="category-name">' . esc_html($category_name) . '</span>';
                        echo '<span class="has-post">(' . esc_html($category_count) . ')</span>';
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                    </ul>
                  </div>
                </div>
                <div class="sidebar-widget border-dark1 radius-6 overflow-hidden">
                  <h3 class="widget-title px-4 pt-4 pb-3 fs-4 fw-bold mb-0">
                    Popular Tag
                  </h3>
                  <ul class="d-flex gap-2 flex-wrap list-unstyled p-4 bg-white">
                    <?php
                    $tags = get_tags();
                    foreach ($tags as $tag) {
                        $tag_name = $tag->name;
                        $tag_link = get_tag_link($tag->term_id);

                        echo '<li>';
                        echo '<a href="' . esc_url($tag_link) . '" class="fs-12 fw-semi-bold text-clr-gray text-decoration-none text-uppercase d-inline-flex ls-1 gap-2 px-2 py-1 border-gray">';
                        echo esc_html($tag_name);
                        echo '</a>';
                        echo '</li>';
                    }
                    ?>
                    </ul>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!--  Latest Blogs  start -->
  <div class="latest-blog section-padding bg-clr-lightGray">
    <div class="container">
      <div class="blog-heading d-flex flex-wrap align-items-start  justify-content-between  mb-5">
        <div class="section-headings text-start">
          <?php if(!empty($cbblog_details_related_post_subtitle)) : ?>
          <div class="section-hints d-flex justify-content-start align-items-center gap-2">
            <p class="fs-14 mb-0 fw-bold text-clr-darkBlue"><?php echo wp_kses_post($cbblog_details_related_post_subtitle); ?></p>
          </div>
          <?php endif; ?>
          <?php if(!empty($cbblog_details_related_post_title)) : ?>
            <h1 class="fs-40 text-clr-blue py-2"><?php echo wp_kses_post($cbblog_details_related_post_title); ?></h1>
          <?php endif; ?>
          <?php if(!empty($cbblog_details_related_post_content)) : ?>
            <p class="text-clr-gray fs-6"><?php echo wp_kses_post($cbblog_details_related_post_content); ?></p>
          <?php endif; ?>
        </div>
        <?php if(!empty($cbblog_details_related_post_btn_text)) : ?>
        <div class="d-flex align-items-center  mt-2 pt-3 justify-content-start">
          <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center"
            href="<?php echo $cbblog_details_related_post_btn_link ? esc_url($cbblog_details_related_post_btn_link): ''; ?>">
            <?php echo wp_kses_post($cbblog_details_related_post_btn_text); ?>
            <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z" fill="white" />
            </svg>
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php if($related_query->have_posts()) : ?>
      <div class="row">
        <?php while($related_query->have_posts()): $related_query->the_post() ?>
        <div class="col-lg-4 col-md-6">
          <div class="service-item  bg-white mb-4 pb-2">
            <div class="p-1">
              <?php the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
            </div>
            <?php
              $current_post_id = get_the_ID();
              $categories = get_the_category($current_post_id);

              if (!empty($categories)) {
                  $first_category = $categories[0];
                  $category_name = $first_category->name;
                  $category_slug = $first_category->slug;
                  ?>
                  <ul class="list-unstyled d-flex align-items-center gap-3 px-4 pt-4">
                      <li class="bg-clr-lightPink py-2 px-3 ls-1 fs-6 fs-12 text-clr-darkBlue">
                          <a href="<?php echo esc_url(get_category_link($first_category)); ?>" class="text-decoration-none">
                              <?php echo esc_html($category_name); ?>
                          </a>
                      </li>
                  </ul>
                  <?php
              }
              ?>
            <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
              <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php the_title(); ?></h4>
              <p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(); ?></p>
              <a href="<?php echo get_the_permalink(); ?>" class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
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
        </div>
        <?php endwhile; wp_reset_query(); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- Latest Blogs end -->

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