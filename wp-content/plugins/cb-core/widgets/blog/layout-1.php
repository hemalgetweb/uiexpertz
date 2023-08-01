
    <!--  Latest Blogs  start -->
    <div class="latest-blog section-padding bg-clr-lightGray">
        <div class="container">
            <div class="blog-heading d-flex flex-wrap align-items-start  justify-content-between  mb-5">
                <div class="section-headings text-start">
                    <?php if(!empty($settings['subtitle'])) : ?>
                    <div class="section-hints d-flex justify-content-start align-items-center gap-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/section-hints.svg" class="img-fluid" alt="section-heading">
                        <p class="fs-14 mb-0 fw-bold text-clr-darkBlue"><?php echo wp_kses_post($settings['subtitle']); ?></p>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($settings['title'])) : ?>
                        <h1 class="fs-40 text-clr-blue py-2"><?php echo wp_kses_post($settings['title']); ?></h1>
                    <?php endif; ?>
                    <?php if(!empty($settings['content'])) : ?>
                        <p class="text-clr-gray fs-6"><?php echo wp_kses_post($settings['content']); ?></p>
                    <?php endif; ?>
                </div>
                <?php if(!empty($settings['btn_text'])) : 
                if ( ! empty( $settings['btn_link']['url'] ) ) {
                    $this->add_link_attributes( 'btn_link', $settings['btn_link'] );
                }    
                ?>
                <div class="d-flex align-items-center  mt-2 pt-3 justify-content-start">
                    <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center"
                    <?php echo $this->get_render_attribute_string( 'btn_link' ); ?>>
                        <?php echo wp_kses_post($settings['btn_text']); ?>
                        <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z"
                                fill="white" />
                        </svg>

                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php if($wp_query->have_posts()) : ?>
            <div class="row">
                <?php while($wp_query->have_posts()) :
                    $wp_query->the_post();
                    $categories = get_the_category(get_the_ID());
                    $first_cat_name = '';
                    if($categories) {
                        $first_cat_name = $categories[0]->name;
                    }
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item  bg-white mb-4 pb-2">
                        <?php if(has_post_thumbnail( get_the_ID() )) : ?>
                        <div class="p-1">
                            <?php the_post_thumbnail(get_the_ID('full')); ?>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($first_cat_name)) : ?>
                        <ul class="list-unstyled d-flex align-items-center gap-3  px-4 pt-4">
                            <li class="bg-clr-lightPink py-2 px-3 ls-1 fs-6 fs-12 text-clr-darkBlue"><?php echo esc_html($first_cat_name); ?></li>
                        </ul>
                        <?php endif; ?>
                        <div class="service-content px-4 mt-1 pb-1 text-decoration-none d-block ">
                            <h4 class="text-clr-blue fs-5 fw-bold mb-3"><a href="<?php the_permalink( get_the_ID() ); ?>"></a></h4>
                            <p class="fs-6 text-clr-gray mb-3"><?php the_excerpt(get_the_ID()); ?></p>
                            <a href="<?php the_permalink( get_the_ID() ); ?>"
                                class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                <span>
                                    <h4 class="fs-14 fw-semi-bold text-clr-gray">Read more</h4>
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
