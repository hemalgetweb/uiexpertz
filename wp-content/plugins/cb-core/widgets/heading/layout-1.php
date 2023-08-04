<div class="container">
    <div class="section-heading text-center">
        <div class="section-hints d-flex justify-content-center align-items-center gap-2">
            <?php if(!empty($settings['subtitle'])) : ?>
                <p class="fs-14 mb-0 fw-bold text-clr-darkBlue"><?php echo wp_kses_post($settings['subtitle']); ?></p>
            <?php endif; ?>
        </div>
        <?php if(!empty($settings['subtitle'])) : ?>
        <h1 class="fs-40 text-clr-blue py-2"><?php echo wp_kses_post($settings['title']); ?></h1>
        <?php endif; ?>
        <?php if(!empty($settings['content'])) : ?>
            <p class="text-clr-gray mb-0"><?php echo wp_kses_post($settings['content']); ?></p>
        <?php endif; ?>
    </div>
</div>