    <!-- brand start -->
    <div class="brand pb-130 pt-115 bg-clr-blue overflow-hidden">
        
        <div class="container">
            <div class=" me-auto mb-5">
                <?php if(!empty($settings['subtitle'])) : ?>
                <div class="section-hints d-flex justify-content-start align-items-center gap-2">
                    <p class="fs-14 mb-0 fw-bold text-clr-sky"><?php echo wp_kses_post($settings['subtitle']); ?></p>
                </div>
                <?php endif; ?>
                <?php if(!empty($settings['title'])) : ?>
                    <h1 class="fs-40 fw-normal text-white py-2"><?php echo wp_kses_post($settings['title']); ?></h1>
                <?php endif; ?>
                <?php if(!empty($settings['title'])) : ?>
                    <p class="uiexpertz-brand-content-114"><?php echo wp_kses_post($settings['content']); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if(!empty($settings['slides'])) : ?>
        <div class="ui-brand ui-brand-wrap">
            <div id="splide" class="uiexpertz-swiper-brand-114 brand-wrap splide brand-active">
                <div class="splide__track py-5">
                    <ul class="splide__list">
                        <?php foreach($settings['slides'] as $slide) : ?>
                            <li class="splide__slide">
                                <div class="brand-item">
                                    <?php echo wp_get_attachment_image( $slide['brand_image']['id'], 'full' ); ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <!--/ brand end -->