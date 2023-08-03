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
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-3 mt-5 pt-3 justify-content-center">
            <div class="">
            <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center" href="#">
                Lets’s talk
                <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z" fill="white"></path>
                </svg>

            </a>
            </div>
            <div class="">
            <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-transparent text-clr-darkBlue fs-14 fw-extraBold d-flex gap-2 align-items-center" href="#">
                Case Studies
                <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z" fill="#5648FF"></path>
                </svg>

            </a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ UiExpertz Services end -->
