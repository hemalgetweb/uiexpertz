    <!-- Work Process start -->
    <div class="WorkProcess">
        <div class="container">
            <?php if(!empty($settings['slides'])) : ?>
            <div class="workProcess-wrap py-3">
                <div class="row px-4">
                    <?php foreach($settings['slides'] as $slide) : ?>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div
                            class="workProcessItem d-flex mb-40 align-items-start gap-4 elementor-repeater-item-<?php echo esc_attr( $slide['_id'] ); ?>">
                            <?php if(!empty($slide['count'])) : ?>
                            <h2 class="fs-40 text-clr-blue process-count"><?php echo esc_html($slide['count']); ?>
                                <span class="count-shape"></span>
                            </h2>
                            <?php endif; ?>
                            <div class="workBorder"></div>
                            <div>
                                <?php if(!empty($slide['title'])) : ?>
                                <h3 class="text-clr-blue fs-5 fw-bold"><?php echo esc_htmL($slide['title']); ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($slide['excerpt'])) : ?>
                                <p class="text-clr-gray fs-14 "><?php echo wp_kses_post($slide['excerpt']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="d-flex flex-wrap align-items-center gap-3 mt-40 justify-content-center">
                            <?php if(!empty($settings['btn_text_1'])) :
                            if ( ! empty( $settings['btn_link_1']['url'] ) ) {
                                $this->add_link_attributes( 'btn_link_1', $settings['btn_link_1'] );
                            }    
                            ?>
                            <div class="uiexperts-btn-item">
                                <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-clr-darkBlue text-white fs-14 fw-extraBold d-flex gap-2 align-items-center"
                                <?php echo $this->get_render_attribute_string( 'btn_link_1' ); ?>>
                                    <?php echo esc_html($settings['btn_text_1']); ?>
                                    <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z"
                                            fill="white" />
                                    </svg>

                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(!empty($settings['btn_text_2'])) :
                            if ( ! empty( $settings['btn_link_2']['url'] ) ) {
                                $this->add_link_attributes( 'btn_link_2', $settings['btn_link_2'] );
                            }    
                        ?>
                            <div class="uiexperts-btn-item">
                                <a class="text-decoration-none position-relative bg-btn banner-btn  text-uppercase border-0 bg-transparent text-clr-darkBlue fs-14 fw-extraBold d-flex gap-2 align-items-center"
                                <?php echo $this->get_render_attribute_string( 'btn_link_2' ); ?>>
                                    <?php echo esc_html($settings['btn_text_2']); ?>
                                    <svg class="btn-icon position-absolute" width="12" height="12" viewBox="0 0 12 12"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L4.9375 10.9375L9.125 6.75H0V5.25H9.125L4.9375 1.0625L6 0L12 6L6 12Z"
                                            fill="#5648FF" />
                                    </svg>

                                </a>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!--/ Work Process end -->