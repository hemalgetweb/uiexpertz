<!-- UiExpertz Services start -->
<div class="service">
    <div class="container">
        <?php if(!empty($settings['slides'])) : ?>
        <div class="service-wrapper row">
            <?php foreach($settings['slides'] as $index => $slide) : ?>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4 ">
                <div class="service-item  bg-white d-flex flex-column justify-content-between">
                    <div>
                        <div class="p-1">
                            <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                            <img src="<?php echo esc_url($slide['service_image']['url']) ?>" class="img-fluid w-100" alt="<?php \Elementor\Control_Media::get_image_alt( $slide['service_image'] ); ?>">
                        </div>
                        <div class="service-content px-4 pt-4 text-decoration-none d-block mt-1">
                            <h4 class="text-clr-blue fs-4 fw-bold mb-3">UX/UI Design</h4>
                            <p class="fs-6 text-clr-gray mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                aut odit aut fugit,
                                sed quia consequuntur ma</p>
                        
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                            <a href="" class="d-flex read-more text-decoration-none align-items-start justify-content-between mt-4">
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
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<!--/ UiExpertz Services end -->
