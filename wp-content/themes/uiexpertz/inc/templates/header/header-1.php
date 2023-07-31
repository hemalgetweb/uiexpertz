<?php
    $cbtoolkit_header_main_right_switch_1 = get_theme_mod('cbtoolkit_header_main_right_switch_1', false);
    $cbtoolkit_side_support_number_text_1 = get_theme_mod('cbtoolkit_side_support_number_text_1', __('+88 012 458 368', 'uiexpertz'));
    $cbtoolkit_side_support_number_link_1 = get_theme_mod('cbtoolkit_side_support_number_link_1', __('+88012458368', 'uiexpertz'));
    $cbtoolkit_header_btn_text = get_theme_mod('cbtoolkit_header_btn_text', __('Lets’s talk', 'uiexpertz'));
    $cbtoolkit_header_btn_link = get_theme_mod('cbtoolkit_header_btn_link', __('#', 'uiexpertz'));
?>


    <!-- mobile menu -->
    <div class="mobileMenu d-block d-xl-none" id="mobileHeader">
        <nav class="navbar p-0">
            <div class="mobileMenu-container">
                <div class="mobileMenu-header d-flex align-items-center gap-4 justify-content-between">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                    </a>
                    <div class="navbarToggler  border-0 text-decoration-none">
                        <div class="menuAction">
                            <a href="#0" class="navbar-toggler-icons openMenu">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.svg" alt="bar icon" class="img-fluid">
                            </a>
                            <a href="#0" class="navbar-toggler-icons closeMenu">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/close.svg" alt="bar icon" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobileMenu-wrapper d-flex align-items-center justify-content-between flex-column">
                    <?php uiexpertz_header_menu(); ?>
                    <div
                        class="navbar-right btn-wrap d-flex flex-wrap justify-content-between align-content-center w-100 gap-3 gap-lg-4">
                        <?php if(!empty($cbtoolkit_side_support_number_text_1)) : ?>
                        <a class="link-text text-decoration-none pe-4 fs-18 text-white fw-semi-bold d-flex gap-2 align-items-center"
                            href="tel:<?php echo esc_attr($cbtoolkit_side_support_number_link_1) ? esc_attr($cbtoolkit_side_support_number_link_1) : ''; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            <?php echo esc_html($cbtoolkit_side_support_number_text_1); ?>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_header_btn_text)) : ?>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky text-uppercase py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="<?php echo $cbtoolkit_header_btn_link ? esc_url($cbtoolkit_header_btn_link): ''; ?>"><?php echo esc_html($cbtoolkit_header_btn_text); ?> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- / Mobile menu -->

    <!-- header -->
    <header id="header" class="m-auto position-fixed top-0 start-0 end-0 d-xl-block d-none" style="background-color: var(--blue)">
        <nav class="navbar navbar-expand-xl py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="logo" class="img-fluid">
                </a>
                <button class="navbar-toggler p-2 border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icons">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu-bar.png" alt="bar icon" class="img-fluid">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php uiexpertz_header_menu(); ?>
                    <div class="navbar-right btn-wrap d-flex flex-wrap gap-3 gap-lg-4">
                        `<?php if(!empty($cbtoolkit_side_support_number_text_1)) : ?>
                        <a class="link-text ms-4 text-decoration-none pe-4 fs-5 text-white d-flex gap-2 align-items-center"
                            href="tel:+88 012 458 368">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="icon" class="img-fluid">
                            <?php echo esc_html($cbtoolkit_side_support_number_text_1); ?>
                        </a>
                        <?php endif; ?>
                        <?php if(!empty($cbtoolkit_header_btn_text)) : ?>
                        <a class="text-decoration-none fw-extraBold nav-bg-btn d-flex align-items-center justify-content-center bg-clr-sky text-uppercase py-2 px-4 border-0 text-clr-blue fs-13 fw-bold"
                            href="<?php echo $cbtoolkit_header_btn_link ? esc_url($cbtoolkit_header_btn_link): ''; ?>"><?php echo esc_html($cbtoolkit_header_btn_text); ?> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--/ header -->
