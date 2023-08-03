<?php
$service_box_height = $settings['service_box_height'] ? $settings['service_box_height'] : '';
?>
<!-- UiExpertz Services start -->
<div class="service">
    <div class="container">
        <?php if(!empty($settings['slides'])) : ?>
        <div class="service-wrapper row">
            <?php foreach($settings['slides'] as $index => $slide) : ?>
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="service-item  bg-white h-100" style="min-height: <?php echo esc_attr($service_box_height); ?>;">
                    <div class="p-1">
                        <img src="<?php echo esc_url($slide['service_image']['url']) ?>" class="img-fluid w-100" alt="<?php echo \Elementor\Control_Media::get_image_alt( $slide['service_image'] ); ?>">
                    </div>
                    <div class="service-content p-4 text-decoration-none d-block mt-1">
                        <?php if(!empty($slide['service_title'])) : ?>
                        <h4 class="text-clr-blue fs-5 fw-bold mb-3"><?php echo esc_html($slide['service_title']); ?></h4>
                        <?php endif; ?>
                        <?php if(!empty($slide['service_excerpt'])) : ?>
                            <p class="fs-14 text-clr-gray mb-2"><?php echo wp_kses_post($slide['service_excerpt']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="px-4 pb-4">
                            <a href="<?php echo $slide['service_link']['url'] ? esc_url($slide['service_link']['url']): ''; ?>" class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                <span>
                                    <h4 class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'cb-core'); ?></h4>
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
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ UiExpertz Services end -->
