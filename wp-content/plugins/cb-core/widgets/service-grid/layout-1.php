  <!-- why choose uiexperts /-start -->
  <section id="whychooseus">
      <div class="container">
          <?php if(!empty($settings['slides'])) : ?>
            <div class="why-choose-us-wrapper text-center">
                <?php foreach($settings['slides'] as $slide) : ?>
                <div class="why-choose-us-item">
                    <div class="card-img mb-4">
                        <?php echo wp_get_attachment_image( $slide['service_image']['id'], 'full' ); ?>
                    </div>
                    <?php if(!empty($slide['service_title'])) : ?>
                    <h5 class="fs-5 fw-bold text-clr-blue mb-4">
                        <?php echo wp_kses_post( $slide['service_title'] ); ?>
                    </h5>
                    <?php endif; ?>
                    <?php if(!empty($slide['service_content'])) : ?>
                    <p class="fs-14 fw-normal text-clr-gray mb-4"><?php echo wp_kses_post( $slide['service_content'] ); ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
          <?php endif; ?>
      </div>
  </section>
  <!-- why choose uiexperts /-end -->