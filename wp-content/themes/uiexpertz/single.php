<?php
// Template Name: Blog Details Updated Emon

get_header();

$current_post_id = get_the_ID();
$categories = wp_get_post_categories($current_post_id, array('fields' => 'ids'));

$recent_query_args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'order' => 'DESC',
  'orderby' => 'date',
);

$recent_query = new WP_Query($recent_query_args);
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
            <span class="fs-12 fw-medium single-uiexpertz-blog-meta text-clr-gray ls-1 text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M12.4427 13.099L13.3724 12.1693L10.6562 9.45312V5.625H9.34375V10L12.4427 13.099ZM10 17C9.03536 17 8.12884 16.8177 7.28043 16.4531C6.43202 16.0885 5.6888 15.5872 5.05078 14.9492C4.41276 14.3112 3.91146 13.5671 3.54688 12.7169C3.18229 11.8667 3 10.9583 3 9.99165C3 9.02499 3.18229 8.11632 3.54688 7.26562C3.91146 6.41493 4.41276 5.67361 5.05078 5.04167C5.6888 4.40972 6.4329 3.91146 7.28309 3.54688C8.13328 3.18229 9.0417 3 10.0083 3C10.975 3 11.8837 3.18375 12.7345 3.55125C13.5853 3.91875 14.3253 4.4175 14.9546 5.0475C15.584 5.6775 16.0822 6.41833 16.4493 7.27C16.8164 8.12167 17 9.03167 17 10C17 10.9646 16.8177 11.8712 16.4531 12.7196C16.0885 13.568 15.5903 14.3112 14.9583 14.9492C14.3264 15.5872 13.5843 16.0885 12.732 16.4531C11.8797 16.8177 10.969 17 10 17ZM10.0087 15.6875C11.5822 15.6875 12.922 15.1315 14.0282 14.0195C15.1344 12.9076 15.6875 11.5648 15.6875 9.9913C15.6875 8.4178 15.1344 7.07796 14.0282 5.97177C12.922 4.86559 11.5822 4.3125 10.0087 4.3125C8.43519 4.3125 7.09245 4.86559 5.98047 5.97177C4.86849 7.07796 4.3125 8.4178 4.3125 9.9913C4.3125 11.5648 4.86849 12.9076 5.98047 14.0195C7.09245 15.1315 8.43519 15.6875 10.0087 15.6875Z" fill="#384973"/>
</svg> <?php echo get_the_date(); ?></span>
            <span class="fs-12 fw-medium single-uiexpertz-blog-meta text-clr-gray ls-1 text-uppercase">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M9.99967 10.0002C9.08301 10.0002 8.29829 9.67377 7.64551 9.021C6.99273 8.36822 6.66634 7.5835 6.66634 6.66683C6.66634 5.75016 6.99273 4.96544 7.64551 4.31266C8.29829 3.65988 9.08301 3.3335 9.99967 3.3335C10.9163 3.3335 11.7011 3.65988 12.3538 4.31266C13.0066 4.96544 13.333 5.75016 13.333 6.66683C13.333 7.5835 13.0066 8.36822 12.3538 9.021C11.7011 9.67377 10.9163 10.0002 9.99967 10.0002ZM3.33301 16.6668V14.3335C3.33301 13.8613 3.45454 13.4272 3.69759 13.0314C3.94065 12.6356 4.26356 12.3335 4.66634 12.1252C5.52745 11.6946 6.40245 11.3717 7.29134 11.1564C8.18023 10.9411 9.08301 10.8335 9.99967 10.8335C10.9163 10.8335 11.8191 10.9411 12.708 11.1564C13.5969 11.3717 14.4719 11.6946 15.333 12.1252C15.7358 12.3335 16.0587 12.6356 16.3018 13.0314C16.5448 13.4272 16.6663 13.8613 16.6663 14.3335V16.6668H3.33301ZM4.99967 15.0002H14.9997V14.3335C14.9997 14.1807 14.9615 14.0418 14.8851 13.9168C14.8087 13.7918 14.708 13.6946 14.583 13.6252C13.833 13.2502 13.0761 12.9689 12.3122 12.7814C11.5483 12.5939 10.7775 12.5002 9.99967 12.5002C9.2219 12.5002 8.45106 12.5939 7.68717 12.7814C6.92329 12.9689 6.16634 13.2502 5.41634 13.6252C5.29134 13.6946 5.19065 13.7918 5.11426 13.9168C5.03787 14.0418 4.99967 14.1807 4.99967 14.3335V15.0002ZM9.99967 8.3335C10.458 8.3335 10.8504 8.1703 11.1768 7.84391C11.5031 7.51752 11.6663 7.12516 11.6663 6.66683C11.6663 6.2085 11.5031 5.81613 11.1768 5.48975C10.8504 5.16336 10.458 5.00016 9.99967 5.00016C9.54134 5.00016 9.14898 5.16336 8.82259 5.48975C8.4962 5.81613 8.33301 6.2085 8.33301 6.66683C8.33301 7.12516 8.4962 7.51752 8.82259 7.84391C9.14898 8.1703 9.54134 8.3335 9.99967 8.3335Z" fill="#384973"/>
</svg>
                <?php
                // Get the author ID for the current post
                $author_id = get_the_author_meta('ID');

                // Get the author's display name
                $author_name = get_the_author_meta('display_name', $author_id);

                // Display the author's name
                echo esc_html($author_name); // Use esc_html() to sanitize the output
                ?>
            </span>
        </div>
        <div class="blog-details-img mt-4">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
        <div class="blog-details-wraps mt-5">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-details-wrap">
                      <?php echo get_the_content(); ?>
                      <div class="apps-comment-114">
                        <div class="comments-area">
                          <?php 
                            comments_template();
                          ?>
                        </div>
                      </div>
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
<?php if($recent_query->have_posts()) : ?>
  <!--  Latest Blogs  start -->
  <div class="latest-blog section-padding bg-clr-lightGray">
    <div class="testimonial-container">
    <h4 class="uiexpertz-generic-title-114">Recent posts</h4>
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
            <?php while($recent_query->have_posts()): $recent_query->the_post() ?>
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