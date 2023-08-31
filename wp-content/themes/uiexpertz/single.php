<?php
// Template Name: Blog Details Updated Emon

get_header();

$current_post_id = get_the_ID();
$categories = wp_get_post_categories($current_post_id, array('fields' => 'ids'));

$related_query_args = array(
    'post_type' => 'post',
    'posts_per_page' => -1, // You can adjust the number of related posts to display
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
<div class="wb-blog-details pt-105">
    <div class="container">
        <a href="<?php echo get_post_type_archive_link('post'); ?>"
            class="back-to-blog d-flex align-items-center gap-2 text-clr-sky text-decoration-none fs-14 fw-bold">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L7.0625 10.9375L2.875 6.75H12V5.25H2.875L7.0625 1.0625L6 0L0 6L6 12Z" fill="#5648FF" />
            </svg>
            </svg> <span class="fs-14 fw-bold text-clr-darkBlue">Back</span>
        </a>
        <h1><?php echo get_the_title(); ?></h1>
        <div class="d-flex align-items-center gap-3">
              <?php if (has_category()):
                $categories = get_the_category();
                if($categories) {
                  $first_category_name = $categories[0]->name;
                  $first_category_id = $categories[0]->term_id;
                }
                ?>
              <a href="<?php echo get_post_type_archive_link('post'); ?>?cat=<?php echo esc_attr($first_category_id); ?>"
                class="fs-12 fw-medium ls-1 text-uppercase text-decoration-none px-2 py-1 bg-clr-lightPink"><?php echo esc_html($first_category_name); ?></a>
              <?php endif; ?>
            <span class="fs-12 fw-medium text-clr-gray ls-1 text-uppercase"><?php echo get_the_date(); ?></span>
        </div>
        <div class="blog-details-img mt-4">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="blog-details-wraps mt-5">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-details-wrap">
                      <?php echo get_the_content(); ?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <?php
                    $categories = get_categories();
                    ?>
                    <div class="categories mb-5">
                        <h3 class="text-clr-blue fs-4 fw-bold mb-4">Categories</h3>
                        <ul class="list-unstyled m-0 p-0 d-flex align-items-center gap-2 flex-wrap">
                            <?php foreach($categories as $index => $category) :
                                $category_id = $category->term_id;    
                            ?>
                            <li class="flex-shrink-0">
                                <a href="<?php echo get_post_type_archive_link('post'); ?>?cat=<?php echo esc_attr($category_id); ?>" class="category-item text-decoration-none"><?php echo esc_html($category->name); ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="recent-post mb-4">
                        <h3 class="text-clr-blue fs-4 fw-bold mb-4">Recent post</h3>
                        <ul class="list-unstyled m-0 p-0 d-flex align-items-center gap-2 flex-wrap">
                            <?php
                            // Define a custom query to get recent posts
                            $args = array(
                                'post_type' => 'post', // You can specify other post types if needed
                                'posts_per_page' => 5, // Number of recent posts to display
                                'ignore_sticky_posts' => 1, // Ignore sticky posts
                            );

                            $recent_posts = new WP_Query($args);

                            // Check if there are recent posts
                            if ($recent_posts->have_posts()) {
                                while ($recent_posts->have_posts()) {
                                    $recent_posts->the_post();
                            ?>
                                    <li class="mb-2">
                                        <a href="<?php the_permalink(); ?>"
                                            class="recent-post-item text-decoration-none d-flex align-items-center gap-2">
                                            <div class="flex-shrink-0">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
                                            </div>
                                            <span class="text-wrap"><?php the_title(); ?></span>
                                        </a>
                                    </li>
                            <?php
                                }
                                // Restore global post data
                                wp_reset_postdata();
                            } else {
                                echo '<li>No recent posts found.</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if($related_query->have_posts()) : ?>
  <!--  Latest Blogs  start -->
  <div class="latest-blog section-padding bg-clr-lightGray">
    <div class="testimonial-container">
    <h4 class="uiexpertz-generic-title-114">Recommended posts</h4>
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
          <a class="text-decoration-none position-relative bg-btn banner-btn  border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center"
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

        <div id="splide" class="splide testimonial">
          <div class="splide__track">
            <ul class="splide__list">
            <?php while($related_query->have_posts()): $related_query->the_post() ?>
              <li class="splide__slide">
              <div class="service-item  bg-white mb-4 pb-2">
                    <div class="p-1">
                    <a href="<?php echo get_the_permalink(); ?>" ><?php the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?></a>
                    </div>
                    <?php
                      $current_post_id = get_the_ID();
                      $categories = get_the_category($current_post_id);

                      if (!empty($categories)) {
                          $first_category = $categories[0];
                          $category_name = $first_category->name;
                          $category_slug = $first_category->slug;
                          $category_id = $first_category->term_id;
                          ?>
                          <ul class="list-unstyled d-flex align-items-center gap-3 px-4 pt-4">
                              <li class="bg-clr-lightPink py-2 px-3 ls-1 fs-6 fs-12 text-clr-darkBlue">
                                  <a href="<?php echo get_post_type_archive_link('post'); ?>?cat=<?php echo esc_attr($category_id); ?>" class="text-decoration-none">
                                      <?php echo esc_html($category_name); ?>
                                  </a>
                              </li>
                          </ul>
                          <?php
                      }
                      ?>
                    <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                      <h4 class="text-clr-blue fs-5 fw-bold mb-3"><a href="<?php echo get_the_permalink(); ?>" ><?php the_title(); ?></a></h4>
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
              </li>
              <?php endwhile; wp_reset_query(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <!-- Latest Blogs end -->




<?php get_footer(); ?>