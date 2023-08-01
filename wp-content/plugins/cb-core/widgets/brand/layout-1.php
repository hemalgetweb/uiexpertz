    <!-- brand start -->
    <div class="brand pb-130 pt-115 bg-clr-blue">
        
        <div class="container">
            <div class=" me-auto mb-5">
                <?php if(!empty($settings['subtitle'])) : ?>
                <div class="section-hints d-flex justify-content-start align-items-center gap-2">
                    <p class="fs-14 mb-0 fw-bold text-clr-sky"><?php echo wp_kses_post($settings['subtitle']); ?></p>
                </div>
                <?php endif; ?>
                <?php if(!empty($settings['title'])) : ?>
                    <h1 class="fs-40 text-white py-2"><?php echo wp_kses_post($settings['title']); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($settings['slides'])) : ?>
        <div class="marquee">
            <div class="uiexpertz-swiper-brand-114 brand-wrap swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach($settings['slides'] as $slide) : ?>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <?php echo wp_get_attachment_image( $slide['brand_image']['id'], 'full' ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <!--/ brand end -->