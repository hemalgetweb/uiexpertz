<?php
$service_box_height = $settings['service_box_height'] ? $settings['service_box_height'] : '';
?>
<!-- UiExpertz Services start -->
<div class="service">
    <div class="container">
        <?php if(!empty($settings['slides'])) : ?>
        <div class="service-wrapper row">
            <?php foreach($settings['slides'] as $index => $slide) : ?>
            <div class="col-lg-4 col-sm-6 mb-4 ">
                <a href="<?php echo $slide['service_link']['url'] ? esc_url($slide['service_link']['url']): ''; ?>" class="js-text-cursor-block service-item  bg-white d-flex flex-column justify-content-between" style="min-height: <?php echo $service_box_height ? esc_attr($service_box_height): 'auto'; ?>;">
                <a class="uiexpertz-theme-accourdion-btn-114 js-text-cursor js-text-cursor bg-clr-darkBlue px-2 py-2 text-nowrap text-white" href="<?php echo $slide['service_link']['url'] ? esc_url($slide['service_link']['url']): ''; ?>">Explore Service <span class="pb-1"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 16L8.9375 14.9375L13.125 10.75H4V9.25H13.125L8.9375 5.0625L10 4L16 10L10 16Z" fill="white"></path></svg></span></a>
                    <div>
                        <div class="p-1">
                            <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                        </div>
                        <div class="service-content px-4 pt-4 text-decoration-none d-block mt-1">
                            <?php if(!empty($slide['service_title'])) : ?>
                            <h4 class="text-clr-blue fs-4 fw-bold mb-3"><?php echo esc_html($slide['service_title']); ?></h4>
                            <?php endif; ?>
                            <?php if(!empty($slide['service_excerpt'])) : ?>
                                <p class="fs-6 text-clr-gray mb-3"><?php echo wp_kses_post($slide['service_excerpt']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <div class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                            <span>
                                <span class="fs-14 fw-semi-bold text-clr-gray"><?php echo esc_html__('Read more', 'cb-core'); ?></span>
                            </span>
                            <div class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
                                <span>
                                    <svg class="arrow-svg" width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.06288 10.7034L0.296875 9.9374L8.93471 1.29154H1.20873V0.208252H10.792V9.79154H9.70873V2.06556L1.06288 10.7034Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ UiExpertz Services end -->
